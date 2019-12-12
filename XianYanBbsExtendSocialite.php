<?php

namespace SocialiteProviders\XianYanBbs;

use SocialiteProviders\Manager\SocialiteWasCalled;

class XianYanBbsExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('xianyan_bbs', Provider::class);
    }
}
