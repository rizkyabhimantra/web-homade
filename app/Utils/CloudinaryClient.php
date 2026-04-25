<?php

namespace App\Utils;

use Cloudinary\Cloudinary;
use Config;
use Exception;
use File;
use Log;

class CloudinaryClient
{

    private Cloudinary $cloudinary;

    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $this->cloudinary = new Cloudinary(Config::get('app.cloudinary_url'));
    }

    public function uploud(
        File|string $image,
        string $folder,
    ) {
        try {
            $public_id = 'image_at' . time();
            $uploud = $this->cloudinary->uploadApi()->upload($image, [
                'public_id' => $public_id,
                'use_filename' => false,
                'folder' => "homade/$folder",
                // --- UPDATE WEBP & QUALITY DI SINI ---
                'format' => 'webp',
                'quality' => 'auto:good'
            ]);
            return $uploud;
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return null;
        }
    }

    public function delete(
        string|null $public_id
    ) {
        try {
            if (!$public_id)
                return;
            $response = $this->cloudinary->adminApi()->deleteAssets($public_id);
            return $response['deleted'][$public_id] === 'deleted';
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return false;
        }
    }

    // yang bawah biarlah

    public function uploudPaymentProof(
        File|string $image,
    ) {
        try {
            $public_id = 'payment_proof_' . time();
            $uploud = $this->cloudinary->uploadApi()->upload($image, [
                'public_id' => $public_id,
                'use_filename' => false,
                'folder' => 'homade/payment_proofs',
                // --- UPDATE WEBP & QUALITY DI SINI ---
                'format' => 'webp',
                'quality' => 'auto:good'
            ]);
            return $uploud;
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return null;
        }
    }

    public function deleteThePaymentProofImage(
        string|null $public_id
    ) {
        try {
            if (!$public_id)
                return;
            $response = $this->cloudinary->adminApi()->deleteAssets($public_id);
            return $response['deleted'][$public_id] === 'deleted';
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return false;
        }
    }

    public function getAllPaymentProofs($limit = 2)
    {
        try {
            $response = $this->cloudinary->adminApi()->assetsByAssetFolder('homade/payment_proofs', [
                'max_results' => $limit,
            ]);
            return $response['resources'];
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return [];
        }
    }

}
