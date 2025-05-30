<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Overviewtabcontroller;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\AutomationController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\InteractionController;
use App\Http\Controllers\MicropollController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\RecurringController;
use App\Http\Controllers\RevenueController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\UserController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home.home');
});

// Route::get('/', function () {
//     return view('campaigns.campaigns');
// });

// Route::get('/', function () {
//     return view('campaigns.index');
// })->name('campaigns.campaigns');

// Routes to fetch tab contents dynamically
Route::get('/home/tabs/overview', [Overviewtabcontroller::class, 'getOverviewContent'])->name('home.tabs.overview');
Route::get('/home/tabs/getstarted', [Overviewtabcontroller::class, 'getGetStartedContent'])->name('home.tabs.getstarted');
Route::get('/home/tabs/cockpit', [Overviewtabcontroller::class, 'getCockpitContent'])->name('home.tabs.cockpit');


Route::get('/campaigns/tabs/email_tab', [CampaignController::class, 'getEmailContent'])->name('campaigns.tabs.email_tab');
Route::get('/campaigns/tabs/interaction_tab', [CampaignController::class, 'getInteractionContent'])->name('campaigns.tabs.interaction_tab');
Route::get('/campaigns/tabs/webpush_tab', [CampaignController::class, 'getWebpushContent'])->name('campaigns.tabs.webpush_tab');
Route::get('/campaigns/tabs/suurvey_tab', [CampaignController::class, 'getSurveyContent'])->name('campaigns.tabs.survey_tab');


Route::get('/automation/tabs/mycampaign_tab', [AutomationController::class, 'getMycampaignContent'])->name('automation.tabs.mycampaign_tab');
Route::get('/automation/tabs/scenarios_tab', [AutomationController::class, 'getScenariosContent'])->name('automation.tabs.scenarios_tab');



// Route::get('/newsletter/tabs/email_tab', [NewsletterController::class, 'getEmailContent'])->name('newsletter.tabs.email_tab');
// Route::get('/newsletter/tabs/push_tab', [NewsletterController::class, 'getPushContent'])->name('newsletter.tabs.push_tab');
// Route::get('/newsletter/tabs/text_tab', [NewsletterController::class, 'getTextContent'])->name('newsletter.tabs.text_tab');
// Route::get('/newsletter/tabs/whatsapp_tab', [NewsletterController::class, 'getWhatsappContent'])->name('newsletter.tabs.whatsapp_tab');

Route::get('/newsletter/tabs/email_tab', [NewsletterController::class, 'getNewsEmailContent'])->name('newsletter.tabs.news_email_tab');
Route::get('/newsletter/tabs/push_tab', [NewsletterController::class, 'getPushContent'])->name('newsletter.tabs.push_tab');
Route::get('/newsletter/tabs/text_tab', [NewsletterController::class, 'getTextContent'])->name('newsletter.tabs.text_tab');
Route::get('/newsletter/tabs/whatsapp_tab', [NewsletterController::class, 'getWhatsappContent'])->name('newsletter.tabs.whatsapp_tab');


Route::get('/recurring/tabs/recurring_email_tab', [RecurringController::class, 'getRecurringEmailContent'])->name('recurring.tabs.recurring_email_tab');
Route::get('/recurring/tabs/recurring_push_tab', [RecurringController::class, 'getRecurringPushContent'])->name('recurring.tabs.recurring_push_tab');
Route::get('/recurring/tabs/recurring_text_tab', [RecurringController::class, 'getRecurringTextContent'])->name('recurring.tabs.recurring_text_tab');
Route::get('/recurring/tabs/recurring_whatsapp_tab', [RecurringController::class, 'getRecurringWhatsappContent'])->name('recurring.tabs.recurring_whatsapp_tab');
Route::get('/recurring/tabs/recurring_scenarios_tab', [RecurringController::class, 'getRecurringScenarioContent'])->name('recurring.tabs.recurring_scenarios_tab');

Route::get('/interaction/tabs/interaction_mycampaign_tab', [InteractionController::class, 'getInteractionMycampaignContent'])->name('interaction.tabs.interaction_mycampaign_tab');
Route::get('/interaction/tabs/interaction_scenarios_tab', [InteractionController::class, 'getInteractionScenariosContent'])->name('interaction.tabs.interaction_scenarios_tab');


Route::get('/content/tabs/content_mycampaign_tab', [ContentController::class, 'getContentMyCampaignContent'])->name('content.tabs.content_mycampaign_tab');
Route::get('/content/tabs/content_scenarios_tab', [ContentController::class, 'getContentScenariosContent'])->name('content.tabs.content_scenarios_tab');



Route::get('/micropoll/tabs/micropoll_mycampaign_tab', [MicropollController::class, 'getMicropollMyCampaignContent'])->name('micropoll.tabs.micropoll_mycampaign_tab');

Route::get('/micropoll/tabs/micropoll_scenarios_tab', [MicropollController::class, 'getMicropollScenariosContent'])->name('micropoll.tabs.micropoll_scenarios_tab');



Route::get('/survey/tabs/survey_mycampaign_tab', [SurveyController::class, 'getSurveyMyCampaignContent'])->name('survey.tabs.survey_mycampaign_tab');
Route::get('/survey/tabs/survey_scenarios_tab', [SurveyController::class, 'getSurveyScenariosContent'])->name('survey.tabs.survey_scenarios_tab');



Route::get('/user/tabs/user_overview_tab', [UserController::class, 'getUserOverviewContent'])->name('user.tabs.user_overview_tab');
Route::get('/user/tabs/user_visitor_tab', [UserController::class, 'getUserVisitorContent'])->name('user.tabs.user_visitor_tab');







// Route::get('/revenue/tabs/revenue_campaign_tab', [RevenueController::class, 'getRevenueCampaignConten'])->name('revenue.tabs.revenue_campaign_tab');
// Route::get('/user/tabs/revenue_report_tab', [RevenueController::class, 'getRevenueReportContent'])->name('revenue.tabs.revenue_report_tab');



// ...existing code...

Route::prefix('revenue/tabs')->name('revenue.tabs.')->group(function () {
    Route::get('/campaign', function () {
        return view('revenue.tabs.revenue_campaign_tab');
    })->name('revenue_campaign_tab');

    Route::get('/report', function () {
        return view('revenue.tabs.revenue_report_tab');
    })->name('revenue_report_tab');
});





Route::get('/campaigns', [CampaignController::class, 'campaigns'])->name('campaigns.campaigns');

Route::get('/automation', [AutomationController::class, 'automation'])->name('automation.automation');

Route::get('/newsletter', [NewsletterController::class, 'newsletter'])->name('newsletter.newsletter');

Route::get('/recurring', [RecurringController::class, 'recurring'])->name('recurring.recurring');

Route::get('/interaction', [InteractionController::class, 'interaction'])->name('interaction.interaction');

Route::get('/content', [ContentController::class, 'content'])->name('content.content');

Route::get('/micropoll', [MicropollController::class, 'micropoll'])->name('micropoll.micropoll');

Route::get('/survey', [SurveyController::class, 'survey'])->name('survey.survey'); 

Route::get('/user', [UserController::class, 'user'])->name('user.user'); 

Route::get('/revenue', [RevenueController::class, 'revenue'])->name('revenue.revenue');


