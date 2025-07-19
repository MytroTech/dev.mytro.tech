<?php

namespace App\Enums;

enum SocialNetworkType: string
{
    case Instagram = 'instagram';
    case Facebook = 'facebook';
    case LinkedIn = 'linkedin';
    case YouTube = 'youtube';
    case Twitter = 'twitter';
    case Telegram = 'telegram';
    case WhatsApp = 'whatsapp';
    case Viber = 'viber';
    case Pinterest = 'pinterest';
    case TikTok = 'tiktok';
    case Behance = 'behance';

    public function icon(): string
    {
        return match ($this) {
            self::Instagram => 'fa-brands fa-instagram',
            self::Facebook => 'fa-brands fa-facebook',
            self::LinkedIn => 'fa-brands fa-linkedin',
            self::YouTube => 'fa-brands fa-youtube',
            self::Twitter => 'fa-brands fa-twitter',
            self::Telegram => 'fa-brands fa-telegram',
            self::WhatsApp => 'fa-brands fa-whatsapp',
            self::Viber => 'fa-brands fa-viber',
            self::Pinterest => 'fa-brands fa-pinterest',
            self::TikTok => 'fa-brands fa-tiktok',
            self::Behance => 'fa-brands fa-behance',
        };
    }
}
