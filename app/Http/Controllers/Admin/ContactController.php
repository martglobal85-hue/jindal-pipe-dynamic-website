<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateContactRequest;
use App\Models\Contact;
use App\Traits\HandlesFileUpload;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Throwable;

/**
 * Contact is a settings-style singleton: one record, edited in place.
 */
class ContactController extends Controller
{
    use HandlesFileUpload;

    public function edit()
    {
        return view('admin.contact.edit', ['record' => Contact::first()]);
    }

    public function update(UpdateContactRequest $request): RedirectResponse
    {
        $uploaded = null;
        $old = null;

        try {
            $contact = Contact::first() ?? new Contact();
            $data = $request->safe()->except('image');

            if ($request->hasFile('image')) {
                $old = $contact->image;
                $uploaded = self::uploadImage($request->file('image'), 'contact');
                $data['image'] = $uploaded;
            }

            $contact->fill($data)->save();

            if ($old) {
                self::deleteImage($old);
            }

            Log::info('Contact settings updated', ['id' => $contact->getKey(), 'admin_id' => auth('admin')->id()]);

            return redirect()->route('admin.contact.edit')->with('success', 'Record updated successfully.');
        } catch (Throwable $e) {
            self::deleteImage($uploaded);

            Log::error('Contact update failed', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'admin_id' => auth('admin')->id(),
            ]);

            return back()->withInput()->with('error', 'Something went wrong. Please try again.');
        }
    }
}
