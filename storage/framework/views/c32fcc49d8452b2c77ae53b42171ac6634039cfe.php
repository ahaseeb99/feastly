<!-- SIDE MENU BAR -->
<style>
    .tabs-menu ul li .active {
        color: white !important;
    }
    .btn-primary-pricing {
        color: white !important;
        font-size: 14px;
    }
    .tabs-menu-body .card .credits-box {
        min-height: auto;
    }
    #back-to-top svg {
    position: relative;
    top: 0px !important;
}
</style>
<aside class="app-sidebar"> 
    <div class="app-sidebar__logo">
        <a class="header-brand" href="<?php echo e(url('/')); ?>">
            <img src="<?php echo e(URL::asset('img/brand/logo.png')); ?>" class="header-brand-img desktop-lgo" alt="Admintro logo">
            <img src="<?php echo e(URL::asset('img/brand/favicon.png')); ?>" class="header-brand-img mobile-logo" alt="Admintro logo">
                      <p style="
                font-size: 10px;
                margin-top: -26px;
                opacity: 0.3;
            ">You AI restaurant campanion
            </p>
        </a>
    </div>
    <a href="#" class="btn-theme-toggle" style="display: none"><span></span></a>
    <ul class="side-menu app-sidebar3">
        <li class="side-item side-item-category mt-4 mb-3"><?php echo e(__('AI Panel')); ?></li>
      <li class="slide">
    <a class="side-menu__item" href="<?php echo e(route('user.dashboard')); ?>">
        <span class="side-menu__icon lead-3 fa-solid fa-utensils"></span>
        <span class="side-menu__label"><?php echo e(__('Dashboard')); ?></span>
    </a>
</li> 
<li class="slide">
    <a class="side-menu__item" href="<?php echo e(route('user.templates')); ?>">
        <span class="side-menu__icon lead-3 fs-18 fa-solid fa-book"></span>
        <span class="side-menu__label"><?php echo e(__('Cooking templates')); ?></span>
    </a>
</li> 
<?php if(config('settings.wizard_feature_user') == 'allow'): ?>
    <li class="slide">
        <a class="side-menu__item" href="<?php echo e(route('user.wizard')); ?>">
            <span class="side-menu__icon lead-3 fs-18 fa-solid fa-seedling"></span>
            <span class="side-menu__label"><?php echo e(__('Article Wizard')); ?></span>
        </a>
    </li> 
<?php endif; ?>
<!--<?php if(config('settings.smart_editor_feature_user') == 'allow'): ?>-->
<!--    <li class="slide">-->
<!--        <a class="side-menu__item" href="<?php echo e(route('user.smart.editor')); ?>">-->
<!--            <span class="side-menu__icon lead-3 fs-18 fa-solid fa-pen-nib"></span>-->
<!--            <span class="side-menu__label"><?php echo e(__('Smart Editor')); ?></span><span class="text-primary remove-new fs-9 side-menu__new"><?php echo e(__('New')); ?></span>-->
<!--        </a>-->
<!--    </li> -->
<!--<?php endif; ?>-->
<?php if(config('settings.chat_feature_user') == 'allow'): ?>
    <li class="slide">
        <a class="side-menu__item" href="<?php echo e(route('user.chat')); ?>">
            <span class="side-menu__icon lead-3 fa-solid fa-comments"></span>
            <span class="side-menu__label"><?php echo e(__('Your AI Chefs')); ?></span>
        </a>
    </li> 
<?php endif; ?>
<?php if(config('settings.chat_file_feature_user') == 'allow'): ?>
    <li class="slide">
        <a class="side-menu__item" href="<?php echo e(route('user.chat.file')); ?>">
            <span class="side-menu__icon lead-3 fs-18 fa-solid  fa-kitchen-set"></span>
            <span class="side-menu__label"><?php echo e(__('Kitchen AI FAQ')); ?></span><span class="text-primary remove-new fs-9 side-menu__new"><?php echo e(__('New')); ?></span>
        </a>
    </li> 
<?php endif; ?>
        <?php if(App\Services\HelperService::checkBrandsFeature()): ?>
            <li class="slide">
                <a class="side-menu__item" href="<?php echo e(route('user.brand')); ?>">
                <span class="side-menu__icon fa-solid fa-signature"></span>
                <span class="side-menu__label"><?php echo e(__('Your Restaurants')); ?></span></a>
            </li> 
        <?php endif; ?> 
        <li class="slide mb-3">
            <a class="side-menu__item" data-toggle="slide" href="<?php echo e(url('#')); ?>">
                <span class="side-menu__icon fa-solid fa-folder-open"></span>
                <span class="side-menu__label"><?php echo e(__('Documents')); ?></span><i class="angle fa fa-angle-right"></i></a>
                <ul class="slide-menu">
                    <li><a href="<?php echo e(route('user.documents')); ?>" class="slide-item"><?php echo e(__('All Documents')); ?></a></li>
                    <?php if(config('settings.image_feature_user') == 'allow'): ?>
                        <li><a href="<?php echo e(route('user.documents.images')); ?>" class="slide-item"><?php echo e(__('All Images')); ?></a></li> 
                    <?php endif; ?> 
                    <?php if(config('settings.voiceover_feature_user') == 'allow'): ?>
                        <li><a href="<?php echo e(route('user.documents.voiceovers')); ?>" class="slide-item"><?php echo e(__('All Voiceovers')); ?></a></li> 
                    <?php endif; ?> 
                    <?php if(config('settings.whisper_feature_user') == 'allow'): ?>
                        <li><a href="<?php echo e(route('user.documents.transcripts')); ?>" class="slide-item"><?php echo e(__('All Transcripts')); ?></a></li> 
                    <?php endif; ?> 
                    <?php if(config('settings.code_feature_user') == 'allow'): ?>
                        <li><a href="<?php echo e(route('user.documents.codes')); ?>" class="slide-item"><?php echo e(__('All Codes')); ?></a></li> 
                    <?php endif; ?> 
                    <li><a href="<?php echo e(route('user.workbooks')); ?>" class="slide-item"><?php echo e(__('Workbooks')); ?></a></li>                    
                </ul>
        </li>       
        <hr class="w-90 text-center m-auto">
        <li class="side-item side-item-category mt-4 mb-3"><?php echo e(__('Account')); ?></li>
        <li class="slide">
            <a class="side-menu__item" href="<?php echo e(route('user.plans')); ?>">
            <span class="side-menu__icon lead-3 fa-solid fa-euro-sign"></span>
            <span class="side-menu__label"><?php echo e(__('Payment Plans')); ?></span></a>
        </li>
        <?php if(config('settings.team_members_feature') == 'allow'): ?>
            <li class="slide">
                <a class="side-menu__item" href="<?php echo e(route('user.team')); ?>">
                <span class="side-menu__icon lead-3 fa-solid fa-people-arrows"></span>
                <span class="side-menu__label"><?php echo e(__('Team Members')); ?></span></a>
            </li>
        <?php endif; ?> 
        <li class="slide">
            <a class="side-menu__item" href="<?php echo e(route('user.profile')); ?>">
            <span class="side-menu__icon lead-3 fa-solid fa-id-badge"></span>
            <span class="side-menu__label"><?php echo e(__('My Account')); ?></span></a>
        </li>
        <?php if(config('payment.referral.enabled') == 'on'): ?>
            <li class="slide mb-3">
                <a class="side-menu__item" href="<?php echo e(route('user.referral')); ?>">
                <span class="side-menu__icon lead-3 fa-solid fa-badge-dollar"></span>
                <span class="side-menu__label"><?php echo e(__('Affiliate Program')); ?></span></a>
            </li>
        <?php endif; ?> 
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'admin')): ?>
            <hr class="w-90 text-center m-auto">
            <li class="side-item side-item-category mt-4 mb-3"><?php echo e(__('Admin Panel')); ?></li>
            <li class="slide">
                <a class="side-menu__item"  href="<?php echo e(route('admin.dashboard')); ?>">
                    <span class="side-menu__icon fa-solid fa-chart-tree-map"></span>
                    <span class="side-menu__label"><?php echo e(__('Dashboard')); ?></span>
                </a>
            </li>
            <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="<?php echo e(url('#')); ?>">
                        <span class="side-menu__icon fa-solid fa-microchip-ai fs-18"></span>
                        <span class="side-menu__label"><?php echo e(__('Davinci Management')); ?></span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li><a href="<?php echo e(route('admin.davinci.dashboard')); ?>" class="slide-item"><?php echo e(__('Davinci Dashboard')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.davinci.templates')); ?>" class="slide-item"><?php echo e(__('Davinci Templates')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.davinci.custom')); ?>" class="slide-item"><?php echo e(__('Custom Templates')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.davinci.chats')); ?>" class="slide-item"><?php echo e(__('AI Chats Customization')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.davinci.custom.category')); ?>" class="slide-item"><?php echo e(__('Template Categories')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.davinci.chat.category')); ?>" class="slide-item"><?php echo e(__('Chat Categories')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.davinci.chat.prompt')); ?>" class="slide-item"><?php echo e(__('Chat Prompts')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.davinci.voices')); ?>" class="slide-item"><?php echo e(__('Voices Customization')); ?></a></li>                        
                        <li><a href="<?php echo e(route('admin.davinci.configs')); ?>" class="slide-item"><?php echo e(__('Davinci Settings')); ?></a></li>
                    </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="<?php echo e(url('#')); ?>">
                    <span class="side-menu__icon fa-solid fa-id-badge"></span>
                    <span class="side-menu__label"><?php echo e(__('User Management')); ?></span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a href="<?php echo e(route('admin.user.dashboard')); ?>" class="slide-item"><?php echo e(__('User Dashboard')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.user.list')); ?>" class="slide-item"><?php echo e(__('User List')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.user.activity')); ?>" class="slide-item"><?php echo e(__('Activity Monitoring')); ?></a></li>
                    </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="<?php echo e(url('#')); ?>">
                    <span class="side-menu__icon fa-solid fa-sack-dollar"></span>
                    <span class="side-menu__label">Payment plans</span>
                    <?php if(auth()->user()->unreadNotifications->where('type', 'App\Notifications\PayoutRequestNotification')->count()): ?>
                        <span class="badge badge-warning"><?php echo e(auth()->user()->unreadNotifications->where('type', 'App\Notifications\PayoutRequestNotification')->count()); ?></span>
                    <?php else: ?>
                        <i class="angle fa fa-angle-right"></i>
                    <?php endif; ?>
                </a>
                    <ul class="slide-menu">
                        <li><a href="<?php echo e(route('admin.finance.dashboard')); ?>" class="slide-item"><?php echo e(__('Finance Dashboard')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.finance.transactions')); ?>" class="slide-item"><?php echo e(__('Transactions')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.finance.plans')); ?>" class="slide-item"><?php echo e(__('Subscription Plans')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.finance.prepaid')); ?>" class="slide-item"><?php echo e(__('Prepaid Plans')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.finance.subscriptions')); ?>" class="slide-item"><?php echo e(__('Subscribers')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.finance.promocodes')); ?>" class="slide-item"><?php echo e(__('Promocodes')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.referral.settings')); ?>" class="slide-item"><?php echo e(__('Referral System')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.referral.payouts')); ?>" class="slide-item"><?php echo e(__('Referral Payouts')); ?>

                                <?php if((auth()->user()->unreadNotifications->where('type', 'App\Notifications\PayoutRequestNotification')->count())): ?>
                                    <span class="badge badge-warning ml-5"><?php echo e(auth()->user()->unreadNotifications->where('type', 'App\Notifications\PayoutRequestNotification')->count()); ?></span>
                                <?php endif; ?>
                            </a>
                        </li>
                        <li><a href="<?php echo e(route('admin.settings.invoice')); ?>" class="slide-item"><?php echo e(__('Invoice Settings')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.finance.settings')); ?>" class="slide-item"><?php echo e(__('Payment Settings')); ?></a></li>
                    </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item"  href="<?php echo e(route('admin.support')); ?>">
                    <span class="side-menu__icon fa-solid fa-message-question"></span>
                    <span class="side-menu__label"><?php echo e(__('Support Requests')); ?></span>
                    <?php if(App\Models\SupportTicket::where('status', 'Open')->count()): ?>
                        <span class="badge badge-warning"><?php echo e(App\Models\SupportTicket::where('status', 'Open')->count()); ?></span>
                    <?php endif; ?> 
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="<?php echo e(url('#')); ?>">
                    <span class="side-menu__icon fa-solid fa-message-exclamation"></span>
                    <span class="side-menu__label"><?php echo e(__('Notifications')); ?></span>
                        <?php if(auth()->user()->unreadNotifications->where('type', '<>', 'App\Notifications\GeneralNotification')->count()): ?>
                            <span class="badge badge-warning" id="total-notifications-a"></span>
                        <?php else: ?>
                            <i class="angle fa fa-angle-right"></i>
                        <?php endif; ?>
                    </a>                     
                    <ul class="slide-menu">
                        <li><a href="<?php echo e(route('admin.notifications')); ?>" class="slide-item"><?php echo e(__('Mass Notifications')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.notifications.system')); ?>" class="slide-item"><?php echo e(__('System Notifications')); ?> 
                                <?php if((auth()->user()->unreadNotifications->where('type', '<>', 'App\Notifications\GeneralNotification')->count())): ?>
                                    <span class="badge badge-warning ml-5" id="total-notifications-b"></span>
                                <?php endif; ?>
                            </a>
                        </li>
                    </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="<?php echo e(url('#')); ?>">
                    <span class="side-menu__icon fa-solid fa-earth-americas"></span>
                    <span class="side-menu__label"><?php echo e(__('Frontend Management')); ?></span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a href="<?php echo e(route('admin.settings.frontend')); ?>" class="slide-item"><?php echo e(__('Frontend Settings')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.settings.appearance')); ?>" class="slide-item"><?php echo e(__('SEO & Logos')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.settings.step')); ?>" class="slide-item"><?php echo e(__('How it Works Section')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.settings.tool')); ?>" class="slide-item"><?php echo e(__('AI Tools Section')); ?></a></li>                                           
                        <li><a href="<?php echo e(route('admin.settings.feature')); ?>" class="slide-item"><?php echo e(__('Features Section')); ?></a></li>                      
                        <li><a href="<?php echo e(route('admin.settings.review')); ?>" class="slide-item"><?php echo e(__('Reviews Manager')); ?></a></li>                      
                        <li><a href="<?php echo e(route('admin.settings.blog')); ?>" class="slide-item"><?php echo e(__('Blogs Manager')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.settings.faq')); ?>" class="slide-item"><?php echo e(__('FAQs Manager')); ?></a></li>                        
                        <li><a href="<?php echo e(route('admin.settings.about')); ?>" class="slide-item"><?php echo e(__('About Us Page')); ?></a></li>                           
                        <li><a href="<?php echo e(route('admin.settings.terms')); ?>" class="slide-item"><?php echo e(__('T&C Pages')); ?></a></li>                           
                        <li><a href="<?php echo e(route('admin.settings.adsense')); ?>" class="slide-item"><?php echo e(__('Google Adsense')); ?></a></li>                           
                    </ul>
            </li>
            <li class="slide mb-3">
                <a class="side-menu__item" data-toggle="slide" href="<?php echo e(url('#')); ?>">
                    <span class="side-menu__icon fa fa-sliders"></span>
                    <span class="side-menu__label"><?php echo e(__('General Settings')); ?></span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a href="<?php echo e(route('admin.settings.global')); ?>" class="slide-item"><?php echo e(__('Global Settings')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.settings.oauth')); ?>" class="slide-item"><?php echo e(__('Auth Settings')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.settings.registration')); ?>" class="slide-item"><?php echo e(__('Registration Settings')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.settings.smtp')); ?>" class="slide-item"><?php echo e(__('SMTP Settings')); ?></a></li>
                        <li><a href="<?php echo e(route('admin.settings.activation')); ?>" class="slide-item"><?php echo e(__('Activation')); ?></a></li>     
                        <li><a href="<?php echo e(route('admin.settings.upgrade')); ?>" class="slide-item"><?php echo e(__('Upgrade Software')); ?></a></li>                 
                        <li><a href="<?php echo e(route('admin.settings.clear')); ?>" class="slide-item"><?php echo e(__('Clear Cache')); ?></a></li>                 
                    </ul>
            </li>
        <?php endif; ?>
        <hr class="w-90 text-center m-auto">
        <li class="side-item side-item-category mt-4 mb-3"><?php echo e(__('AI Credits')); ?></li>
        <li class="side-item side-item-category mt-4 mb-2"><?php echo e(__('Plan')); ?>: <?php if(is_null(auth()->user()->plan_id)): ?><span class="text-primary"><?php echo e(__('Free Trial')); ?></span> <?php else: ?> <span class="text-primary"><?php echo e(__(App\Services\HelperService::getPlanName())); ?></span>  <?php endif; ?> <?php if(is_null(auth()->user()->plan_id)): ?> - <a href="<?php echo e(route('user.plans')); ?>" class="text-yellow upgrade-action-button"> <?php echo e(__('Upgrade Now')); ?></a> <?php endif; ?></li>
        <li class="side-item side-item-category mt-0 mb-2"><?php echo e(__('Next Renewal')); ?>: <?php if(is_null(auth()->user()->plan_id)): ?><?php echo e(__('No Renewal')); ?> <?php else: ?> <?php echo e(__(App\Services\HelperService::getRenewalDate())); ?>  <?php endif; ?></li>
        <div class="side-progress-position">
            <div class="inline-flex w-100">
                <div class="flex w-100">
                    <span class="fs-11 font-weight-600 side-word-notification"><i class="fa-solid fa-message-lines text-primary mr-2"></i><span class="text-muted"><?php echo e(__('Words')); ?></span> <span class="text-primary ml-1" id="available-words"><?php echo e(App\Services\HelperService::getTotalWords()); ?></span></span>
                </div> 
                <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'user|subscriber|admin')): ?>
                    <?php if(config('settings.image_feature_user') == 'allow'): ?>
                        <div class="flex w-100">
                            <span class="fs-11 font-weight-600 side-word-notification"><i class="fa-sharp fa-solid fa-message-image text-primary mr-2"></i><span class="text-muted"><?php echo e(__('DE/SD Images')); ?></span> <span class="text-primary ml-1" id="available-images"><?php echo e(App\Services\HelperService::getTotalImages()); ?></span></span>
                        </div> 
                    <?php endif; ?>
                <?php endif; ?>
                <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'user|subscriber|admin')): ?>
                    <?php if(config('settings.whisper_feature_user') == 'allow'): ?>
                        <div class="flex w-100">
                            <span class="fs-11 font-weight-600 side-word-notification"><i class="fa-sharp fa-solid fa-message-music text-primary mr-2"></i><span class="text-muted"><?php echo e(__('Minutes')); ?></span> <span class="text-primary ml-1" id="available-minutes"><?php echo e(App\Services\HelperService::getTotalMinutes()); ?></span></span>
                        </div> 
                    <?php endif; ?>
                <?php endif; ?>
                <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'user|subscriber|admin')): ?>
                    <?php if(config('settings.voiceover_feature_user') == 'allow'): ?>
                        <div class="flex w-100">
                            <span class="fs-11 font-weight-600 side-word-notification"><i class="fa-solid fa-message-captions text-primary mr-2"></i><span class="text-muted"><?php echo e(__('Characters')); ?></span> <span class="text-primary ml-1" id="available-characters"><?php echo e(App\Services\HelperService::getTotalCharacters()); ?></span></span>
                        </div>   
                    <?php endif; ?>
                <?php endif; ?>                  
            </div>
        </div>
    </ul>
     <p style="text-align: left; opacity: 0.4; margin:0 20px 40px 20px; font-size: 12px;">NextGenAI s.r.o. | 21477116 |
Osadní 869/32, Holešovice, 170 00 Prague 7</p>

</aside>
<!-- END SIDE MENU BAR --><?php /**PATH /home/u960948325/domains/feastly.co/public_html/resources/views/layouts/nav-aside.blade.php ENDPATH**/ ?>