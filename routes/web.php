<?php

use App\Http\Controllers\AnalyticsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Overviewtabcontroller;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\AutomationController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\EmailactivityController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ImportuserController;
use App\Http\Controllers\InteractionController;
use App\Http\Controllers\MicropollController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\RecurringController;
use App\Http\Controllers\RevenueController;
use App\Http\Controllers\SegmentslistController;
use App\Http\Controllers\SiteactivityController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserprofileController;
  



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




Route::get('/siteactivity/tabs/stats_tab', [SiteactivityController::class, 'getSitestatsContent'])->name('siteactivity.tabs.stats_tab');
Route::get('/siteactivity/tabs/exports_tab', [SiteactivityController::class, 'getSiteexportContent'])->name('siteactivity.tabs.exports_tab');
Route::get('/siteacitivity/tabs/events_tab', [SiteactivityController::class, 'getSiteeventContent'])->name('siteactivity.tabs.events_tab');
Route::get('/siteactivity/tabs/activity_tab', [SiteactivityController::class, 'getSiteactivityContent'])->name('siteactivity.tabs.activity_tab');



Route::get('/emailactivity/tabs/events_tab', [EmailactivityController::class, 'getEmaileventContent'])->name('emailactivity.tabs.events_tab');
Route::get('/emailactivity/tabs/clicks_tab', [EmailactivityController::class, 'getEmailclickContent'])->name('emailactivity.tabs.clicks_tab');


Route::get('/ecommerce/tabs/overview_tab', [EcommerceController::class, 'getEcommerceoverviewContent'])->name('ecommerce.tabs.overview_tab');
Route::get('/ecommerce/tabs/conversions_tab', [EcommerceController::class, 'getEcommerceconversionsContent'])->name('ecommerce.tabs.conversions_tab');
Route::get('/ecommerce/tabs/charts_tab', [EcommerceController::class, 'getEcommercechartContent'])->name('ecommerce.tabs.charts_tab');

Route::get('/catalog/tabs/serach_terms_tab', [CatalogController::class, 'getCatalogsearchContent'])->name('catalog.tabs.search_terms_tab');
Route::get('/catalog/tabs/items_tab', [CatalogController::class, 'getCatalogcategoryContent'])->name('catalog.tabs.items_tab');
Route::get('/catalog/tabs/category', [CatalogController::class, 'getCatalogitemsContent'])->name('catalog.tabs.category_tab');

Route::get('/segmentslists/tabs/mysegment_tab', [SegmentslistController::class, 'getSegmentlistmysegmentsContent'])->name('segmentslists.tabs.mysegment_tab');
Route::get('/segmentslists/tabs/mylist_tab', [SegmentslistController::class, 'getSegmentlistmylistsContent'])->name('segmentslists.tabs.mylist_tab');
Route::get('/segmentslists/tabs/default_tab', [SegmentslistController::class, 'getSegmentlistdefaultContent'])->name('segmentslists.tabs.default_tab');

//userprofile tabs are present but not are not present
//analyitucs tabs are present but not are not present

Route::get('/importuser/tabs/manually_add_Email_tab', [ImportuserController::class, 'getImportuseremailContent'])->name('importuser.tabs.manually_add_email_tab');
Route::get('/importuser/tabs/upload_csv_tab', [ImportuserController::class, 'getImportuseruploadContent'])->name('importuser.tabs.upload_csv_tab');



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

Route::get('/siteactivity', [SiteactivityController::class, 'siteactivity'])->name('siteactivity.siteactivity');

Route::get('/emailactivity', [EmailactivityController::class, 'emailactivity'])->name('emailactivity.emailactivity');

Route::get('/ecommerce', [EcommerceController::class, 'ecommerce'])->name('ecommerce.ecommerce');

Route::get('/catalog', [CatalogController::class, 'catalog'])->name('catalog.catalog');

Route::get('/export', [ExportController::class, 'export'])->name('export.export');

Route::get('/segmentslists', [SegmentslistController::class, 'segmentslists'])->name('segmentslists.segmentslists');

Route::get('/userprofile', [UserprofileController::class, 'userprofile'])->name('userprofile.userprofile');

Route::get('/analytics', [AnalyticsController::class, 'analytics'])->name('analytics.analytics');

Route::get('/importuser', [ImportuserController::class, 'importuser'])->name('importuser.importuser');
