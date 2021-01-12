<?php

namespace Cblink\Service\SocialiteWeixin;

use SocialiteProviders\Manager\SocialiteWasCalled;

class WeixinExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('cblink-weixin', Provider::class);
    }
}
