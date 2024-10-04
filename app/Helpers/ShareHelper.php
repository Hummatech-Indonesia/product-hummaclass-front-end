<?php

namespace App\Helpers;

use App\Enums\ProductStatusEnum;
use App\Models\Product;
use Illuminate\View\View;
use Jorenvh\Share\Share;
use Illuminate\Support\Facades\URL;
use App\Enums\UserRoleEnum;


class ShareHelper
{
    /**
     * shareButtons
     *
     * @param  mixed $slug
     * @return void
     */
    public static function shareLink(string $slug)
    {
        $share = new Share();
        $shareLink = $share->page(route('courses.courses.show', $slug))
            ->whatsapp()
            ->facebook()
            ->telegram()
            ->twitter()
            ->getRawLinks();
        return $shareLink;
    }
}
