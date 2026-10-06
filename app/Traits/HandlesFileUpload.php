<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;

/**
 * Image upload helper. Files go straight into public/uploads/* (no Laravel
 * Storage, no storage:link). Display them with asset($record->image).
 */
trait HandlesFileUpload
{
    /**
     * Base implementation (as supplied). Returns the target path or false.
     */
    public static function upload(UploadedFile $file, $uploadDir)
    {
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $fileExtension = $file->getClientOriginalExtension();

        $uniqueFilename = str_replace(
            '.',
            '_',
            uniqid('img_', true)
        ) . '.' . $fileExtension;

        $targetPath = rtrim($uploadDir, '/') . '/' . $uniqueFilename;

        if ($file->move($uploadDir, $uniqueFilename)) {
            return $targetPath;
        }

        return false;
    }

    /**
     * Uploads into public/uploads/{directory} and returns the path RELATIVE to
     * public/ (e.g. "uploads/banner/img_xxx.jpg") - this is what is stored in
     * the database and passed to asset().
     */
    public static function uploadImage(UploadedFile $file, string $directory): string
    {
        $directory = trim($directory, '/');
        $extension = strtolower($file->getClientOriginalExtension());

        if (!in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'], true)) {
            throw new \InvalidArgumentException('Unsupported image extension.');
        }

        $target = static::upload($file, public_path('uploads/' . $directory));

        if ($target === false) {
            throw new \RuntimeException('Image upload failed.');
        }

        return 'uploads/' . $directory . '/' . basename($target);
    }

    /**
     * Safely removes a previously uploaded image from public/uploads.
     */
    public static function deleteImage(?string $path): void
    {
        if (!$path) {
            return;
        }

        $relative = ltrim(str_replace('\\', '/', $path), '/');

        if (!str_starts_with($relative, 'uploads/') || str_contains($relative, '..')) {
            return;
        }

        $fullPath = public_path($relative);

        if (is_file($fullPath)) {
            @unlink($fullPath);
        }
    }
}
