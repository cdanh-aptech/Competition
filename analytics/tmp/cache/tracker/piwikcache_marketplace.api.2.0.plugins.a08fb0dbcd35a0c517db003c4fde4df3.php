<?php return array (
  'lifetime' => 1569851686,
  'data' => 
  array (
    'plugins' => 
    array (
      0 => 
      array (
        'name' => 'LoginSaml',
        'displayName' => 'Login SAML',
        'owner' => 'innocraft',
        'description' => 'Provides SAML support for Matomo. Compatible with any Identity Provider such as OneLogin, Okta, Ping Identity, ADFS, Google, Salesforce, SharePoint.',
        'homepage' => 'https://plugins.matomo.org/LoginSaml',
        'createdDateTime' => '2017-08-01 04:14:17',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'authentication',
          1 => 'sso',
          2 => 'google',
          3 => 'saml',
          4 => 'ADFS',
          5 => 'OneLogin',
          6 => 'Okta',
          7 => 'Ping Identity',
          8 => 'Salesforce',
          9 => 'SharePoint',
          10 => 'Just-in-time provisioning',
        ),
        'basePrice' => 500,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'InnoCraft',
            'email' => 'contact@innocraft.com',
            'homepage' => 'https://www.innocraft.com',
          ),
        ),
        'repositoryUrl' => NULL,
        'lastUpdated' => '2019-09-25 22:06:03',
        'latestVersion' => '3.3.2',
        'numDownloads' => NULL,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/LoginSaml/images/3.3.2/LoginSaml_Admin_admin_page.png',
          1 => 'https://plugins.matomo.org/LoginSaml/images/3.3.2/LoginSaml_Admin_import_page.png',
          2 => 'https://plugins.matomo.org/LoginSaml/images/3.3.2/LoginSaml_Admin_metadata_page.png',
          3 => 'https://plugins.matomo.org/LoginSaml/images/3.3.2/LoginSaml_login_page.png',
          4 => 'https://plugins.matomo.org/LoginSaml/images/3.3.2/access_sp_metadata.png',
          5 => 'https://plugins.matomo.org/LoginSaml/images/3.3.2/advanced_settings.png',
          6 => 'https://plugins.matomo.org/LoginSaml/images/3.3.2/attribute_mapping_settings_form.png',
          7 => 'https://plugins.matomo.org/LoginSaml/images/3.3.2/attribute_sync_settings.png',
          8 => 'https://plugins.matomo.org/LoginSaml/images/3.3.2/enable_saml_saved.png',
          9 => 'https://plugins.matomo.org/LoginSaml/images/3.3.2/idenity_provider_settings.png',
          10 => 'https://plugins.matomo.org/LoginSaml/images/3.3.2/import_idp_metadata.png',
          11 => 'https://plugins.matomo.org/LoginSaml/images/3.3.2/login_saml_menu_item.png',
          12 => 'https://plugins.matomo.org/LoginSaml/images/3.3.2/saml_login_button.png',
          13 => 'https://plugins.matomo.org/LoginSaml/images/3.3.2/saml_status.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => NULL,
          'numContributors' => NULL,
          'lastCommitDate' => NULL,
        ),
        'featured' => false,
        'isFree' => false,
        'isPaid' => true,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => 
        array (
          'url' => 'https://plugins.matomo.org/LoginSaml',
          'variations' => 
          array (
            0 => 
            array (
              'price' => '499',
              'prettyPrice' => '499EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/LoginSaml?add-to-cart=l&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-loginsaml/?attribute_type=Unlimited+users&add-to-cart=4803&variation_id=4804&aelia_cs_currency=EUR',
            ),
            1 => 
            array (
              'price' => '579',
              'prettyPrice' => 'USD579',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/LoginSaml?add-to-cart=l&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-loginsaml/?attribute_type=Unlimited+users&add-to-cart=4803&variation_id=4804&aelia_cs_currency=USD',
              'cheapest' => true,
              'recommended' => false,
            ),
          ),
          'reviews' => 
          array (
            'embedUrl' => 'https://shop.matomo.org/product/plugin-loginsaml/?show_reviews=1&piwik_embed=1',
            'height' => 200,
            'averageRating' => '5.00',
            'ratingCount' => 1,
            'reviewCount' => 1,
          ),
        ),
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => 'SPECIAL OFFER! Get for FREE the Activity Log feature when you purchase this plugin (terms and conditions apply).',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.3.2',
            'release' => NULL,
            'requires' => 
            array (
              'php' => '>=5.5.9',
              'piwik' => '>=3.6.0',
            ),
            'numDownloads' => NULL,
            'license' => 
            array (
              'name' => 'InnoCraft EULA',
              'url' => 'https://plugins.matomo.org/LoginSaml/3.3.2/license',
            ),
            'repositoryChangelogUrl' => NULL,
            'readmeHtml' => 
            array (
              'description' => '

<p>This Matomo authentication plugin allows users to log in to Matomo using SAML Identity Provider (IdP).</p>

<p>If you have a federated environment with a SAML Identity Provider (OneLogin, Okta, Ping Identity, ADFS, Google, Salesforce, SharePoint...), you can use this plugin to interoperate with it, thereby enabling SSO for your Matomo users.</p>

<p>SSO with SAML for Matomo offers many benefits. It can ensure consistent access control across the enterprise and external providers, potentially reducing support costs related to authentication / accounts management.</p>

<h3>Requirements</h3>

<ol><li>PHP &gt;= 5.5.9</li>
<li>Matomo &gt;= 3.x</li>
</ol><h3>Features</h3>

<ul><li>SP-initiaited and IdP initiaited Single Sign On</li>
<li>SP-initiaited and IdP initiaited Single Log Out</li>
<li>Just-in-time provisioning</li>
<li>Support attribute mapping</li>
<li>Access synchronization based on data provided by Identity Provider</li>
<li>Interoperate with any SAML Identity Provider</li>
<li>Support SAML signature and encryption</li>
</ul><p>Learn more in the <a href="https://matomo.org/docs/login-saml/">LoginSaml user guide</a> and <a href="https://matomo.org/faq/login-saml/">FAQs</a>.</p>

<h3>Documentation &amp; Support</h3>

<p>There is a general guide that explain how to configure as well as some specific guides to integrate Matomo with the main identity provider vendors.</p>

<p>If you need help with your configuration, <a href="https://matomo.org/support/login-saml/">contact InnoCraft about SAML Configuration support</a> and we will agree the terms of the support service.</p>

<h3>Our promise</h3>

<p>With this plugin you will be able to connect your Matomo instance with any Identity Provider: Okta, Onelogin, ADFS, Azure, SimpleSAMLphp, and if you have doubts or experience any configuration issue, you can always contact us to help you in the SAML integration. The Plugin is flexible enough and cover many scenarios.</p>

<p>This is why we give you a <a href="https://shop.matomo.org/refund-policy/">100% unconditional, easy, fast, and hassle-free money back guarantee</a> for 30 days. There are no strings attached.</p>

<p>So try it now and let us know how you go, we are always happy to help.</p>

<h3>About InnoCraft</h3>

<p>We at <a href="https://www.innocraft.com">InnoCraft</a> are the creators of Matomo and know it best. We help our clients get started, configure, monitor and make the most of their Matomo analytics service. We also offer unique analytics products and services that help grow your business and meet the needs of small, medium and large businesses alike.</p>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => NULL,
          ),
        ),
        'isDownloadable' => false,
        'changelog' => 
        array (
          'url' => '',
        ),
        'consumer' => 
        array (
          'license' => NULL,
          'loginUrl' => 'https://shop.matomo.org/my-account',
        ),
      ),
      1 => 
      array (
        'name' => 'Funnels',
        'displayName' => 'Funnels',
        'owner' => 'innocraft',
        'description' => 'Identify and understand where your visitors drop off to increase your conversions, sales and revenue with your existing traffic.',
        'homepage' => 'https://plugins.matomo.org/Funnels',
        'createdDateTime' => '2016-12-02 05:26:56',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'piwik',
          1 => 'Marketing',
          2 => 'tracking',
          3 => 'optimization',
          4 => 'conversion',
          5 => 'funnel',
          6 => 'goal',
          7 => 'cro',
          8 => 'matomo',
        ),
        'basePrice' => 175,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'InnoCraft',
            'email' => 'contact@innocraft.com',
            'homepage' => 'https://www.innocraft.com',
          ),
        ),
        'repositoryUrl' => NULL,
        'lastUpdated' => '2019-09-19 21:29:49',
        'latestVersion' => '3.1.16',
        'numDownloads' => NULL,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/Funnels/images/3.1.16/1_Funnel_Evolution.png',
          1 => 'https://plugins.matomo.org/Funnels/images/3.1.16/2_Funnel_Steps.png',
          2 => 'https://plugins.matomo.org/Funnels/images/3.1.16/3_Funnel_Step_Referrers.png',
          3 => 'https://plugins.matomo.org/Funnels/images/3.1.16/4_Funnel_Step_Evolution.png',
          4 => 'https://plugins.matomo.org/Funnels/images/3.1.16/5_Funnel_Step_Visitor_Log.png',
          5 => 'https://plugins.matomo.org/Funnels/images/3.1.16/6_All_Funnels_Overview.png',
          6 => 'https://plugins.matomo.org/Funnels/images/3.1.16/7_Manage_Steps.png',
        ),
        'previews' => 
        array (
          0 => 
          array (
            'type' => 'demo',
            'provider' => 'link',
            'url' => 'https://demo.matomo.org/index.php?module=CoreHome&action=index&idSite=62&period=day&date=yesterday#?idSite=62&period=day&date=yesterday&category=Funnels_Funnels&subcategory=General_Overview',
          ),
          1 => 
          array (
            'type' => 'video',
            'provider' => 'youtube',
            'url' => 'https://www.youtube-nocookie.com/embed/Ljx7-QdcEQY',
          ),
        ),
        'activity' => 
        array (
          'numCommits' => NULL,
          'numContributors' => NULL,
          'lastCommitDate' => NULL,
        ),
        'featured' => false,
        'isFree' => false,
        'isPaid' => true,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => 
        array (
          'url' => 'https://plugins.matomo.org/Funnels',
          'variations' => 
          array (
            0 => 
            array (
              'price' => '179',
              'prettyPrice' => '179EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/Funnels?add-to-cart=s&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/funnels/?attribute_type=Up+to+4+users&add-to-cart=2584&variation_id=2585&aelia_cs_currency=EUR',
            ),
            1 => 
            array (
              'price' => '199',
              'prettyPrice' => 'USD199',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/Funnels?add-to-cart=s&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/funnels/?attribute_type=Up+to+4+users&add-to-cart=2584&variation_id=2585&aelia_cs_currency=USD',
              'cheapest' => true,
              'recommended' => true,
            ),
            2 => 
            array (
              'price' => '349',
              'prettyPrice' => '349EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/Funnels?add-to-cart=m&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/funnels/?attribute_type=5+to+15+users&add-to-cart=2584&variation_id=2586&aelia_cs_currency=EUR',
            ),
            3 => 
            array (
              'price' => '399',
              'prettyPrice' => 'USD399',
              'currency' => 'USD',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/Funnels?add-to-cart=m&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/funnels/?attribute_type=5+to+15+users&add-to-cart=2584&variation_id=2586&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
            4 => 
            array (
              'price' => '529',
              'prettyPrice' => '529EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/Funnels?add-to-cart=l&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/funnels/?attribute_type=Unlimited+users&add-to-cart=2584&variation_id=2587&aelia_cs_currency=EUR',
            ),
            5 => 
            array (
              'price' => '599',
              'prettyPrice' => 'USD599',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/Funnels?add-to-cart=l&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/funnels/?attribute_type=Unlimited+users&add-to-cart=2584&variation_id=2587&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
          ),
          'reviews' => 
          array (
            'embedUrl' => 'https://shop.matomo.org/product/funnels/?show_reviews=1&piwik_embed=1',
            'height' => 200,
            'averageRating' => '4.67',
            'ratingCount' => 3,
            'reviewCount' => 3,
          ),
        ),
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => 'SPECIAL OFFER! Get for FREE the Multi Channel Conversion Attribution feature when you purchase this plugin (terms and conditions apply).',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.1.16',
            'release' => NULL,
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b5,<4.0.0-b1',
            ),
            'numDownloads' => NULL,
            'license' => 
            array (
              'name' => 'InnoCraft EULA',
              'url' => 'https://plugins.matomo.org/Funnels/3.1.16/license',
            ),
            'repositoryChangelogUrl' => NULL,
            'readmeHtml' => 
            array (
              'description' => '

<blockquote>
  <p>"Now we are getting much more insights into our funnels and it is a lot easier to use. Funnels helps us to increase our conversation rates just perfectly and we even save money with it. Thank you."</p></blockquote>


<p>Hi, this is Tom from <a href="https://www.innocraft.com">InnoCraft</a>. The company of the makers of Matomo Analytics which is used by over 1 million websites and apps in over 150 countries.</p>

<p>No matter what type of website or app you have, whether you are trying to get your users to sign up for something or sell products, there is a certain number of steps your visitors have to go through. I bet the same applies to you.</p>

<p><a href="#preview"><img src="https://www.innocraft.com/innocraft/funnels.png" style="width:320px;float:right;margin-top:10px;margin-bottom:5px;" alt="usersFlow.png" /></a>Have you ever wondered if your visitors or users actually follow that path in your website or app? And wondered where you lose your visitors? Where they maybe get confused? Want to see when something is not working anymore? Maybe you have a multi step signup form or onboarding process? On every step you lose visitors and therefore potential revenue and conversions.</p>

<blockquote>
  <p>It’s critical to know how well your visitors go through these steps, where they originally came from and where they go to when they drop off.</p>
</blockquote>

<p>If you are wondering about such things like we do, or want to drive your conversions and sales, we have something for you. Funnels visualizes the steps your users take to complete a goal or purchase to instantly see how well they succeed or fail at each step. When you have it, you can evaluate your success and improve your website or app to boost your conversion rates (CRO) and sales based on the information it provides. In one of our funnels we once noticed users often left our website because of unimportant links that were shown too eye-catching and suddenly we increased conversion rates by 10%, simply by removing a few links.</p>

<h3>Funnels helps you to increase your conversions, sales and revenue with your existing traffic by</h3>

<ul><li>finding out where your visitors have problems</li>
<li>finding out where they don\'t understand the flow of your website</li>
<li>finding out where a bug on your website or app occurs</li>
<li>finding other problems that get in the way of converting your goals</li>
</ul><h3>Get ultimate insights into your funnels with these unique features</h3>

<ul><li>See at a glance how your funnels are converting in the funnels overview page</li>
<li>See how changes you make on your website is affecting user behavior and funnel conversions over time </li>
<li>View detailed visitor details and all the actions after entering a funnel or a specific step of your funnel</li>
<li>See how segments of your audience flow through your marketing funnel and optimise your flow for these specific segments of users</li>
</ul><h3>Our promise</h3>

<p><a href="https://shop.matomo.org/refund-policy/"><img src="https://shop.matomo.org/wp-content/uploads/2016/10/money_back-300x294.png" style="width:220px;float:right;margin-bottom:10px;" alt="Our promise to you" /></a>We have put a lot of love into Funnels to integrate it super nicely into Matomo. It is so simple to use and gives you all the insights you don’t get with other tools. Funnels is built on top of Matomo which means you get all those benefits and features from Matomo, such as data ownership, no data limits, being able to host it yourself on premise and to use it in the intranet etc. That’s why Matomo is so popular among businesses, corporations and governments. Hand-crafted by the makers of Matomo, we are sure you will be able to reduce the number of visitors you lose in your funnels once you start using it.</p>

<blockquote>
  <p>This is why we give you a <a href="https://shop.matomo.org/refund-policy/">100% unconditional, easy, fast, and hassle-free money back guarantee</a> for 30 days. There are no strings attached.</p>
</blockquote>

<p>So try Funnels now and let us know how you do. We are happy to help you get started and to hear how you grow your business.</p>

<h3>About InnoCraft</h3>

<p>We at <a href="https://www.innocraft.com">InnoCraft</a> are the creators of Matomo and know it better than anyone else. This means all plugins are perfectly integrated into Matomo and come with outstanding features and quality to grow your business. We help our clients get started, configure, monitor and make the most of their Matomo analytics service. We also offer unique analytics products and services that help grow your business and meet the needs of small, medium and large businesses alike.</p>

<h3>Manage Features</h3>

<p>A funnel is only as good as its configuration and getting the steps right is crucial for any funnel analysis. We focused
 on helping you along the way of defining your funnels and made it easy to configure and validate funnels.</p>

<ul><li>Create an unlimited number of goal funnels</li>
<li>Define unlimited funnel steps based on URL, URL path, search query, page title, event category, event name, and event action</li>
<li>Many different options to match your pages</li>
<li>Intuitive funnel configuration with several tools to validate your funnel configuration</li>
<li>Integrates nicely into Matomo Goals management</li>
</ul><h3>Reporting features</h3>

<ul><li>Get an overview and evolution of all of your funnels in just one page</li>
<li>View a funnel evolution to see how a funnel performs over time</li>
<li>View a funnel step row evolution to see how an individual funnel step performs over time</li>
<li>See where your visitors entered the funnel and where they exited your funnel</li>
<li>See from which pages your visitors entered the funnel or where they went after leaving the funnel</li>
<li>Get referrer details for visitors that have entered a step on their first page view</li>
<li>Check how your funnels are doing on the go with the Matomo Mobile app for iOS and Android</li>
<li>Add a funnels overview widget to your Matomo Dashboard to always keep an eye on it</li>
<li>Get an overview of how your funnel is doing directly in your existing goal reports</li>
</ul><h3>Segmenting features</h3>

<ul><li>Apply funnel segments to Matomo reports</li>
<li>Apply Matomo segments to funnel reports</li>
<li>See a log of each visitor who participated in a funnel or in an individual funnel step</li>
</ul><h3>Privacy features</h3>

<ul><li>Supports Matomo\'s <a href="https://matomo.org/docs/privacy/">privacy</a> and GDPR features like the right to erase data or the right to export data. GDPR stands for General Data Protection Regulation and is for example also known as RGPD in French, DS-GVO in German</li>
<li>The plugin does not track any additional data and therefore doesn\'t record any personal data.</li>
</ul><h3>Export &amp; API features</h3>

<ul><li>Get automatic Funnel <a href="https://matomo.org/docs/email-reports/">email and sms reports</a>, or send them to your colleagues or customers. </li>
<li>All reports are available via the <a href="https://developer.matomo.org/api-reference/reporting-api#Funnels">Funnels HTTP Reporting API</a>.</li>
<li>Configure your Funnels via the UI or the <a href="https://developer.matomo.org/api-reference/reporting-api#Funnels">Funnels HTTP Reporting API</a>.</li>
<li><a href="https://matomo.org/docs/embed-piwik-report/">Embed</a> the funnels overview directly in your app, dashboard, or even TV screen!. </li>
<li>Get email and SMS alerts when something significant changes with the <a href="https://plugins.matomo.org/CustomAlerts">Custom Alerts</a> plugin.</li>
</ul><h3>Other features:</h3>

<ul><li>Does not slow down tracking time</li>
<li>100% data ownership</li>
<li>No data limit</li>
</ul>',
              'faq' => '',
              'documentation' => '<p>The <a href="https://matomo.org/docs/funnels/">Funnels User Guide</a> and the <a href="https://matomo.org/faq/funnels/">Funnels FAQ</a> cover 
how to configure a funnel and how to get the most out of this plugin.</p>

<p>For any other question feel free to <a href="#support">contact us</a>.</p>',
              'changelog' => '',
            ),
            'download' => NULL,
          ),
        ),
        'isDownloadable' => false,
        'changelog' => 
        array (
          'url' => '',
        ),
        'consumer' => 
        array (
          'license' => NULL,
          'loginUrl' => 'https://shop.matomo.org/my-account',
        ),
      ),
      2 => 
      array (
        'name' => 'Cohorts',
        'displayName' => 'Cohorts',
        'owner' => 'innocraft',
        'description' => 'Track your retention efforts over time and keep your visitors engaged and coming back for more.',
        'homepage' => 'https://plugins.matomo.org/Cohorts',
        'createdDateTime' => '2019-06-05 23:47:08',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'cohorts',
          1 => 'retention',
          2 => 'user segments',
          3 => 'goals',
        ),
        'basePrice' => 85,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'InnoCraft',
            'email' => 'contact@innocraft.com',
            'homepage' => 'https://www.innocraft.com',
          ),
        ),
        'repositoryUrl' => NULL,
        'lastUpdated' => '2019-09-12 10:50:59',
        'latestVersion' => '3.0.8',
        'numDownloads' => NULL,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/Cohorts/images/3.0.8/cohorts.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => NULL,
          'numContributors' => NULL,
          'lastCommitDate' => NULL,
        ),
        'featured' => false,
        'isFree' => false,
        'isPaid' => true,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => 
        array (
          'url' => 'https://plugins.matomo.org/Cohorts',
          'variations' => 
          array (
            0 => 
            array (
              'price' => '89',
              'prettyPrice' => '89EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/Cohorts?add-to-cart=s&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-cohorts/?attribute_type=Up+to+4+users&add-to-cart=25946&variation_id=25947&aelia_cs_currency=EUR',
            ),
            1 => 
            array (
              'price' => '99',
              'prettyPrice' => 'USD99',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/Cohorts?add-to-cart=s&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-cohorts/?attribute_type=Up+to+4+users&add-to-cart=25946&variation_id=25947&aelia_cs_currency=USD',
              'cheapest' => true,
              'recommended' => true,
            ),
            2 => 
            array (
              'price' => '169',
              'prettyPrice' => '169EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/Cohorts?add-to-cart=m&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-cohorts/?attribute_type=5+to+15+users&add-to-cart=25946&variation_id=25948&aelia_cs_currency=EUR',
            ),
            3 => 
            array (
              'price' => '199',
              'prettyPrice' => 'USD199',
              'currency' => 'USD',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/Cohorts?add-to-cart=m&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-cohorts/?attribute_type=5+to+15+users&add-to-cart=25946&variation_id=25948&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
            4 => 
            array (
              'price' => '259',
              'prettyPrice' => '259EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/Cohorts?add-to-cart=l&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-cohorts/?attribute_type=Unlimited+users&add-to-cart=25946&variation_id=25949&aelia_cs_currency=EUR',
            ),
            5 => 
            array (
              'price' => '299',
              'prettyPrice' => 'USD299',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/Cohorts?add-to-cart=l&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-cohorts/?attribute_type=Unlimited+users&add-to-cart=25946&variation_id=25949&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
          ),
          'reviews' => 
          array (
            'embedUrl' => 'https://shop.matomo.org/product/plugin-cohorts/?show_reviews=1&piwik_embed=1',
            'height' => 200,
            'averageRating' => NULL,
            'ratingCount' => 0,
            'reviewCount' => 0,
          ),
        ),
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.8',
            'release' => NULL,
            'requires' => 
            array (
              'piwik' => '>=3.11.0,<4.0.0-b1',
            ),
            'numDownloads' => NULL,
            'license' => 
            array (
              'name' => 'InnoCraft EULA',
              'url' => '',
            ),
            'repositoryChangelogUrl' => NULL,
            'readmeHtml' => 
            array (
              'description' => '

<p>Hi, this is Tom from InnoCraft. The company of the makers of Matomo Analytics which is used by over 1 million websites and apps in over 150 countries.</p>

<blockquote>
  <p>No matter what type of website you run, you\'ll want your visitors coming back for more.</p>
</blockquote>

<p>What\'s the point of a news site that never gets its readers to read another article again? Or a store where average customer lifetime value can be measured in a single purchase? Or an app whose users quit a week after downloading it?</p>

<p>We want our readers, customers and users to stick around, because the longer they do that, the more money we\'ll make and the more impact we have.
No matter the business, success is directly tied to how long we can keep our visitors coming back for more.</p>

<blockquote>
  <p>So, it’s important to know how well you retain users over time</p>
</blockquote>

<p>Out of the box Matomo will display your overall returning visitors count and allows you to see each available report for returning visitors.
You can use these basic reports to answer questions like "What percent of my visitors come back?" or "What pages do my returning visitors view?".</p>

<p>Alone, this can be a useful tool to understand what keeps your visitors engaged, but it lacks the depth of understanding that Cohorts Analysis provides.</p>

<p>With the Cohorts plugin, you\'ll be able to answer questions like:</p>

<ul><li>How long do new readers stick around before dropping off? Is there a specific time period after joining our news site where engagement drops?</li>
<li>Some of the visitors to our ecommerce store visit many times, but never purchase. How are they different from those who visit many times, but ultimately make a purchase?</li>
<li>Many of our users appear to stop using our app after a couple of weeks, while some stop the day after downloading it. Are these segments different? Do they experience certain problems that some users simply put up with while others give up on immediately?</li>
<li>Last week, we added a tour of our app to help new users figure out what to do. Are our users sticking around longer now? If so, by how many days?</li>
</ul><p>Just by looking at these questions, I\'m sure you can see how actionable this type of analysis can be, and I\'m sure you\'ve thought of some questions of your own you\'d like answered.</p>

<blockquote>
  <p>Increasing your retention rates will have a direct effect on your bottom line and the Cohorts plugin provides you with a powerful tool to achieve that outcome.</p>
</blockquote>

<h3>Benefits</h3>

<ul><li>Zero setup required if you\'re using the JavaScript tracker.</li>
<li>See how your visitors behave on and after their acquisition date.</li>
<li>Compare behaviors of one cohort with other cohorts, by seeing metrics directly next to each other.</li>
<li>View all core session and conversion metrics in the Cohorts report, including your website\'s <strong>retention rate</strong>, <strong>overall revenue</strong> and <strong>revenue for individual goals</strong>.</li>
<li>Segment your reports by cohort and see how individual cohorts behave. Then compare this with other cohorts to get useful insights.</li>
</ul><h3>Our promise</h3>

<p><a href="https://shop.matomo.org/refund-policy/"><img src="https://shop.matomo.org/wp-content/uploads/2016/10/money_back-300x294.png" style="width:220px;float:right;margin-bottom:10px;" alt="Our promise to you" /></a> Cohorts is built on top of Matomo which means you get all the benefits and features from Matomo as well. Like data ownership, no data limits, being able to host it yourself on-premise and use it in the intranet etc. That’s why Matomo is so popular among businesses, corporations and governments. Hand-crafted by the makers of Matomo, we are convinced you will be surprised by its value once you start using Cohorts.</p>

<blockquote>
  <p>This is why we give you a <a href="https://shop.matomo.org/refund-policy/">100% unconditional, easy, fast, and hassle-free money back guarantee</a> for 30 days. There are no strings attached.</p>
</blockquote>

<p>So try it now and let us know how you do! We are happy to help you get started and are looking forward to hearing about your surprise discoveries</p>

<h3>About InnoCraft</h3>

<p>We at <a href="https://www.innocraft.com">InnoCraft</a> are the creators of Matomo and know it better than anyone else. This means all plugins are perfectly integrated into Matomo and come with outstanding features and quality to grow your business. We help our clients get started, configure, monitor and make the most of their Matomo analytics service. We also offer unique analytics products and services that help grow your business and meet the needs of small, medium and large businesses alike.</p>

<h3>Features</h3>

<ul><li>A special cohorts table that allows you to easily compare cohorts, accompanied by a time series.</li>
<li>Define cohorts by any period length, including weeks, months and years.</li>
<li>A new segment: visitor acquisition date.</li>
</ul><h3>Export and API features</h3>

<ul><li>HTTP API to fetch all Cohorts data.</li>
<li>No limit to how many Cohorts you can fetch at a time.</li>
</ul><h3>More information</h3>

<p>To learn more about the plugin have a look at the <a href="https://matomo.org/docs/cohorts/">Cohorts Analysis User Guide</a>.</p>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => NULL,
          ),
        ),
        'isDownloadable' => false,
        'changelog' => 
        array (
          'url' => '',
        ),
        'consumer' => 
        array (
          'license' => NULL,
          'loginUrl' => 'https://shop.matomo.org/my-account',
        ),
      ),
      3 => 
      array (
        'name' => 'FormAnalytics',
        'displayName' => 'Form Analytics',
        'owner' => 'innocraft',
        'description' => 'Increase conversions on your online forms and lose less visitors by learning everything about your users behavior and their pain points on your forms',
        'homepage' => 'https://plugins.matomo.org/FormAnalytics',
        'createdDateTime' => '2017-03-09 22:11:54',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'optimization',
          1 => 'analytics',
          2 => 'improve',
          3 => 'cro',
          4 => 'form',
          5 => 'web',
          6 => 'online',
        ),
        'basePrice' => 150,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'InnoCraft',
            'email' => 'contact@innocraft.com',
            'homepage' => 'https://www.innocraft.com',
          ),
        ),
        'repositoryUrl' => NULL,
        'lastUpdated' => '2019-09-11 22:54:54',
        'latestVersion' => '3.1.25',
        'numDownloads' => NULL,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/FormAnalytics/images/3.1.25/1_Overview.png',
          1 => 'https://plugins.matomo.org/FormAnalytics/images/3.1.25/2_Real_Time.png',
          2 => 'https://plugins.matomo.org/FormAnalytics/images/3.1.25/3_Form_Overview.png',
          3 => 'https://plugins.matomo.org/FormAnalytics/images/3.1.25/4_Form_By_Page_URL.png',
          4 => 'https://plugins.matomo.org/FormAnalytics/images/3.1.25/5_Drop_Off_Fields.png',
          5 => 'https://plugins.matomo.org/FormAnalytics/images/3.1.25/6_Entry_Fields.png',
          6 => 'https://plugins.matomo.org/FormAnalytics/images/3.1.25/7_Field_Timings.png',
          7 => 'https://plugins.matomo.org/FormAnalytics/images/3.1.25/8_Field_Size.png',
          8 => 'https://plugins.matomo.org/FormAnalytics/images/3.1.25/9_Most_Used_Fields.png',
          9 => 'https://plugins.matomo.org/FormAnalytics/images/3.1.25/10_Most_Corrected_Fields.png',
          10 => 'https://plugins.matomo.org/FormAnalytics/images/3.1.25/11_Unneeded_Fields.png',
          11 => 'https://plugins.matomo.org/FormAnalytics/images/3.1.25/12_Row_Evolution.png',
          12 => 'https://plugins.matomo.org/FormAnalytics/images/3.1.25/13_Row_Evolution_Page.png',
          13 => 'https://plugins.matomo.org/FormAnalytics/images/3.1.25/14_Map_Form_Field.png',
          14 => 'https://plugins.matomo.org/FormAnalytics/images/3.1.25/15_Visitor_Log.png',
        ),
        'previews' => 
        array (
          0 => 
          array (
            'type' => 'demo',
            'provider' => 'link',
            'url' => 'https://demo.matomo.org/index.php?module=CoreHome&action=index&idSite=62&period=day&date=yesterday#?idSite=62&period=day&date=yesterday&category=FormAnalytics_Forms&subcategory=General_Overview',
          ),
          1 => 
          array (
            'type' => 'video',
            'provider' => 'youtube',
            'url' => 'https://www.youtube-nocookie.com/embed/kjaO-EXk7wU',
          ),
        ),
        'activity' => 
        array (
          'numCommits' => NULL,
          'numContributors' => NULL,
          'lastCommitDate' => NULL,
        ),
        'featured' => false,
        'isFree' => false,
        'isPaid' => true,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => 
        array (
          'url' => 'https://plugins.matomo.org/FormAnalytics',
          'variations' => 
          array (
            0 => 
            array (
              'price' => '149',
              'prettyPrice' => '149EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/FormAnalytics?add-to-cart=s&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/formanalytics/?attribute_type=Up+to+4+users&add-to-cart=3196&variation_id=3197&aelia_cs_currency=EUR',
            ),
            1 => 
            array (
              'price' => '179',
              'prettyPrice' => 'USD179',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/FormAnalytics?add-to-cart=s&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/formanalytics/?attribute_type=Up+to+4+users&add-to-cart=3196&variation_id=3197&aelia_cs_currency=USD',
              'cheapest' => true,
              'recommended' => true,
            ),
            2 => 
            array (
              'price' => '299',
              'prettyPrice' => '299EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/FormAnalytics?add-to-cart=m&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/formanalytics/?attribute_type=5+to+15+users&add-to-cart=3196&variation_id=3198&aelia_cs_currency=EUR',
            ),
            3 => 
            array (
              'price' => '349',
              'prettyPrice' => 'USD349',
              'currency' => 'USD',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/FormAnalytics?add-to-cart=m&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/formanalytics/?attribute_type=5+to+15+users&add-to-cart=3196&variation_id=3198&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
            4 => 
            array (
              'price' => '449',
              'prettyPrice' => '449EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/FormAnalytics?add-to-cart=l&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/formanalytics/?attribute_type=Unlimited+users&add-to-cart=3196&variation_id=3199&aelia_cs_currency=EUR',
            ),
            5 => 
            array (
              'price' => '519',
              'prettyPrice' => 'USD519',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/FormAnalytics?add-to-cart=l&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/formanalytics/?attribute_type=Unlimited+users&add-to-cart=3196&variation_id=3199&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
          ),
          'reviews' => 
          array (
            'embedUrl' => 'https://shop.matomo.org/product/formanalytics/?show_reviews=1&piwik_embed=1',
            'height' => 200,
            'averageRating' => '4.67',
            'ratingCount' => 3,
            'reviewCount' => 3,
          ),
        ),
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => 'SPECIAL OFFER! Get for FREE the Multi Channel Conversion Attribution feature when you purchase this plugin (terms and conditions apply).',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.1.25',
            'release' => NULL,
            'requires' => 
            array (
              'piwik' => '>=3.0.2-b3,<4.0.0-b1',
            ),
            'numDownloads' => NULL,
            'license' => 
            array (
              'name' => 'InnoCraft EULA',
              'url' => 'https://plugins.matomo.org/FormAnalytics/3.1.25/license',
            ),
            'repositoryChangelogUrl' => NULL,
            'readmeHtml' => 
            array (
              'description' => '

<p>Hi, this is Tom from <a href="https://www.innocraft.com">InnoCraft</a>, the company of the makers of Matomo Analytics which is used 
by over 1 million websites and apps in over 150 countries.</p>

<p>Let me ask you two questions. Do you have forms on your website, intranet, or web application? Do you hate losing your 
visitors on your forms and leaving revenue on the table? If you feel like us, we have got you covered.</p>

<blockquote>
  <p><a href="https://www.form-analytics.net">Form Analytics</a> gives you all the insights you need to increase your form conversion rates with 100% data ownership.</p>
</blockquote>

<p>Whether it is a sign-up form, squeeze page, landing page, newsletter form, checkout, cart, feedback form, job application form or a survey. Online forms have become super critical to all kind of businesses. The problem is, you can only improve what you measure. Otherwise, you never really know what to change on your forms, and whether you make things worse or better.</p>

<blockquote>
  <p>When you have Form Analytics, you will make decisions based on the facts it provides and optimize your forms.</p>
</blockquote>

<p>Simply activate the plugin in Matomo and it will start measuring how your visitors interact with your forms and give you all the important insights. It lets you know how often a form was viewed, started, submitted, re-submitted, and converted. Find out how much time your users spent on your forms or fields, how long they hesitated, and discover which fields are unneeded, which fields cause problems, pain, or confusion, and much more.</p>

<h3>Benefits</h3>

<ul><li>Make better, reliable decisions for your organization or business</li>
<li>Lose less visitors on your forms and as a result increase your conversions &amp; revenue</li>
<li>Find all the pain points on your forms so you can increase the number of users that start interacting with your forms, and the number of users that complete your forms</li>
<li>Keep an eye on what is happening right now and make faster decisions with real-time reports</li>
<li>Tracks your forms out of the box, in most cases no setup and no developer needed</li>
<li>Works with traditional forms, ajax forms, and dynamically created forms</li>
<li>Lets you apply new form segments to all of your existing Matomo reports, and existing Matomo segments to your form reports so you can segment your market and optimize yor forms for different personas and user groups</li>
<li>Measures form and field times accurately, and takes features like auto-focus and auto-fill into consideration</li>
<li>View the form reports from anywhere while you are on the go with our Matomo Mobile app</li>
<li>Perfectly integrated into Matomo</li>
<li>100% data ownership</li>
</ul><h3>Our promise</h3>

<p><a href="https://shop.matomo.org/refund-policy/"><img src="https://shop.matomo.org/wp-content/uploads/2016/10/money_back-300x294.png" style="width:220px;float:right;margin-bottom:10px;" alt="Our promise to you" /></a>Since we have started using Form Analytics, we are much more confident about our forms. Now we know every detail about them and are able to consistently increase our conversions and make our users life easier. We are sure it can do the same thing for you. Hand-crafted by the makers of Matomo, we are certain once you start using it, you will be amazed.</p>

<blockquote>
  <p>This is why we give you a <a href="https://shop.matomo.org/refund-policy/">100% unconditional, easy, fast, and hassle-free money back guarantee</a> for 30 days. There are no strings attached.</p>
</blockquote>

<p>So start improving your forms now and let us know how you improved your forms. We are happy to help you get started and are looking forward to hearing your story.</p>

<h3>About InnoCraft</h3>

<p>We, at <a href="https://www.innocraft.com">InnoCraft</a>, are the creators of Matomo and know it better than anyone else. This means all plugins are perfectly integrated into Matomo and come with outstanding features and quality to grow your business. We help our clients get started, configure, monitor and make the most of their Matomo analytics service. We also offer unique analytics products and services that help grow your business and meet the needs of small, medium and large businesses alike</p>

<h3>Reporting features</h3>

<ul><li>Have a look at the <a href="https://matomo.org/faq/form-analytics/faq_23738/">Form Analytics Reports FAQ</a> and <a href="https://matomo.org/faq/form-analytics/faq_23737/">Metrics FAQ</a> to see a list of some reports and metrics it includes (adds over 50 new metrics and over 15 new reports!)</li>
<li>Adds several Real-time reports and widgets so you can instantly see how changes affect your forms</li>
<li>When a form is embedded on several of your pages, automatically generates a report for each of your page so you can compare how the behaviour is different on each page</li>
<li>We understand that static numbers are hard to read. That\'s why we added heaps of evolution and sparklines reports so you can see how your forms evolve over time</li>
</ul><h3>Integrates with Matomo Analytics platform</h3>

<ul><li>Lists all form interactions in the visitor log and the visitor profile. See exactly how each user interacts with your forms.</li>
<li>View the evolution of any metric or row with the <a href="https://matomo.org/docs/row-evolution/">Row Evolution</a> feature</li>
<li>Adds new form <a href="https://matomo.org/docs/segmentation/">Segments</a> to your Matomo so you can drill down deeper your Matomo reports </li>
<li>View your Form Analytics reports on the go with the <a href="https://matomo.org/mobile/">Matomo Mobile App</a></li>
<li>Create <a href="https://plugins.matomo.org/CustomAlerts">custom alerts</a> and be notified when specific forms become popular, or when your overall form usage changes.</li>
<li>Track unlimited number of forms and form fields. <a href="https://matomo.org/docs/data-limits/">No data limit</a>.</li>
<li>Supports <a href="https://plugins.matomo.org/CustomReports">Custom Reports</a>.</li>
</ul><h3>Segmenting features</h3>

<p>Segments really multiply the value you get with Form Analytics as you can drill down your visitors even deeper and gain
new insights that weren\'t possible before.</p>

<ul><li>Adds many new segments like "Viewed a form", "Started a form", "Submitted a form", "Converted a form" or "Spent X time on a form".</li>
<li>Lets you apply over 100 <a href="https://matomo.org/docs/segmentation/">Matomo segments</a> to your form reports</li>
<li>Apply any new form segment to your existing Matomo reports</li>
</ul><h3>Manage Forms</h3>

<ul><li>Matomo automatically creates new forms for you when it discovers a new form on your website or app</li>
<li>Users with admin access can create and manage unlimited forms</li>
<li>Easy to use with lots of inline help</li>
<li>Define custom form and field names to get readable reports </li>
<li>Optionally, lets you configure to track several of your forms into one form in Matomo</li>
<li>Optionally, lets you restrict the tracking of a form to only some pages</li>
<li>Lets you configure when a form is converted without having to code</li>
</ul><h3>Privacy features</h3>

<ul><li>Supports Matomo\'s <a href="https://matomo.org/docs/privacy/">privacy</a> and GDPR features like the right to erase data or the right to export data. GDPR stands for General Data Protection Regulation and is for example also known as RGPD in French, DS-GVO in German</li>
<li>The plugin does not store personal data, for example it does not store the content that users actually enter into form fields</li>
</ul><h3>Export and API features</h3>

<ul><li>Get automatic <a href="https://matomo.org/docs/email-reports/">email and sms reports</a>, or send them to your colleagues or customers</li>
<li><a href="https://matomo.org/docs/embed-piwik-report/">Embed</a> the form real-time widgets directly in your app, dashboard, or even TV screen!</li>
<li>HTTP API to manage your forms </li>
<li>HTTP API to fetch and export all <a href="https://developer.matomo.org/api-reference/reporting-api#FormAnalytics">Form Analytics reports</a></li>
<li>Get access to all the raw data via MySQL for 100% data ownership</li>
</ul><h3>More information</h3>

<p>To learn more about the plugin, have a look at the <a href="https://www.form-analytics.net">Form Analytics website</a>, <a href="https://matomo.org/docs/form-analytics">Form Analytics User Guide</a>, <a href="https://matomo.org/faq/form-analytics">Form Analytics FAQ</a> and the <a href="https://developer.matomo.org/guides/form-analytics">developer documentation</a>.</p>',
              'faq' => '',
              'documentation' => '<p>The <a href="https://matomo.org/docs/form-analytics/">Form Analytics User Guide</a> and the <a href="https://matomo.org/faq/form-analytics/">Form Analytics FAQ</a> cover how to get the most out of this plugin. The <a href="https://developer.matomo.org/guides/form-analytics">Form Analytics developer guides</a> help you setting up the tracking of your online forms.</p>',
              'changelog' => '',
            ),
            'download' => NULL,
          ),
        ),
        'isDownloadable' => false,
        'changelog' => 
        array (
          'url' => '',
        ),
        'consumer' => 
        array (
          'license' => NULL,
          'loginUrl' => 'https://shop.matomo.org/my-account',
        ),
      ),
      4 => 
      array (
        'name' => 'CustomReports',
        'displayName' => 'Custom Reports',
        'owner' => 'innocraft',
        'description' => 'Pull out the information you need in order to be successful. Develop your custom strategy to meet your individualized goals while saving money & time.',
        'homepage' => 'https://www.innocraft.com',
        'createdDateTime' => '2017-10-12 03:42:12',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'segment',
          1 => 'custom',
          2 => 'reports',
          3 => 'filter',
        ),
        'basePrice' => 200,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'InnoCraft',
            'email' => 'contact@innocraft.com',
            'homepage' => 'https://www.innocraft.com',
          ),
        ),
        'repositoryUrl' => NULL,
        'lastUpdated' => '2019-09-11 21:04:49',
        'latestVersion' => '3.1.18',
        'numDownloads' => NULL,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/CustomReports/images/3.1.18/0_Report_Content_Definition.png',
          1 => 'https://plugins.matomo.org/CustomReports/images/3.1.18/1_Report_Filter_Definition.png',
          2 => 'https://plugins.matomo.org/CustomReports/images/3.1.18/2_Example_Report_By_Minute.png',
          3 => 'https://plugins.matomo.org/CustomReports/images/3.1.18/3_Example_Report_Events.png',
          4 => 'https://plugins.matomo.org/CustomReports/images/3.1.18/4_Example_Report_Revenue_Per_Country.png',
          5 => 'https://plugins.matomo.org/CustomReports/images/3.1.18/5_Example_Report_By_User.png',
        ),
        'previews' => 
        array (
          0 => 
          array (
            'type' => 'demo',
            'provider' => 'link',
            'url' => 'https://demo.matomo.org/',
          ),
          1 => 
          array (
            'type' => 'video',
            'provider' => 'youtube',
            'url' => 'https://www.youtube-nocookie.com/embed/Ss0jtGLaeDM',
          ),
        ),
        'activity' => 
        array (
          'numCommits' => NULL,
          'numContributors' => NULL,
          'lastCommitDate' => NULL,
        ),
        'featured' => false,
        'isFree' => false,
        'isPaid' => true,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => 
        array (
          'url' => 'https://plugins.matomo.org/CustomReports',
          'variations' => 
          array (
            0 => 
            array (
              'price' => '199',
              'prettyPrice' => '199EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/CustomReports?add-to-cart=s&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-customreports/?attribute_type=Up+to+4+users&add-to-cart=5900&variation_id=5901&aelia_cs_currency=EUR',
            ),
            1 => 
            array (
              'price' => '229',
              'prettyPrice' => 'USD229',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/CustomReports?add-to-cart=s&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-customreports/?attribute_type=Up+to+4+users&add-to-cart=5900&variation_id=5901&aelia_cs_currency=USD',
              'cheapest' => true,
              'recommended' => true,
            ),
            2 => 
            array (
              'price' => '399',
              'prettyPrice' => '399EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/CustomReports?add-to-cart=m&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-customreports/?attribute_type=5+to+15+users&add-to-cart=5900&variation_id=5902&aelia_cs_currency=EUR',
            ),
            3 => 
            array (
              'price' => '459',
              'prettyPrice' => 'USD459',
              'currency' => 'USD',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/CustomReports?add-to-cart=m&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-customreports/?attribute_type=5+to+15+users&add-to-cart=5900&variation_id=5902&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
            4 => 
            array (
              'price' => '599',
              'prettyPrice' => '599EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/CustomReports?add-to-cart=l&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-customreports/?attribute_type=Unlimited+users&add-to-cart=5900&variation_id=5903&aelia_cs_currency=EUR',
            ),
            5 => 
            array (
              'price' => '689',
              'prettyPrice' => 'USD689',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/CustomReports?add-to-cart=l&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-customreports/?attribute_type=Unlimited+users&add-to-cart=5900&variation_id=5903&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
          ),
          'reviews' => 
          array (
            'embedUrl' => 'https://shop.matomo.org/product/plugin-customreports/?show_reviews=1&piwik_embed=1',
            'height' => 200,
            'averageRating' => '4.67',
            'ratingCount' => 3,
            'reviewCount' => 3,
          ),
        ),
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => 'SPECIAL OFFER! Get for FREE the Multi Channel Conversion Attribution feature when you purchase this plugin (terms and conditions apply).',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.1.18',
            'release' => NULL,
            'requires' => 
            array (
              'piwik' => '>=3.2.0-rc1,<4.0.0-b1',
            ),
            'numDownloads' => NULL,
            'license' => 
            array (
              'name' => 'InnoCraft EULA',
              'url' => 'https://plugins.matomo.org/CustomReports/3.1.18/license',
            ),
            'repositoryChangelogUrl' => NULL,
            'readmeHtml' => 
            array (
              'description' => '

<p>Hi, this is David from <a href="https://www.innocraft.com">InnoCraft</a>, the company of the makers of Matomo Analytics which is used 
by over 1 million websites and apps in over 150 countries.</p>

<p>At InnoCraft, we know that all businesses and organizations have different goals and needs. It is therefore important to
get the insights you need in order to achieve your goals and improve your websites and apps. While Matomo comes with a great set of standard reports, you can often not get all the information you need.</p>

<blockquote>
  <p>In the past, this meant you could either not get the information you wanted, or you had to create the report manually in a spreadsheet which takes hours and is error-prone.</p>
</blockquote>

<p>This is where Custom Reports rocks. It takes this cumbersome work away by allowing you to create a new report in only seconds. You can choose from over 200 different dimensions and metrics to get the insights
 you need. You can further customize the report by choosing between different
 visualizations, and even define report filters (view a report only for a subset of your visitors, like a segment).</p>

<p>Wondering what some examples could be? For example, you could drill down any dimension by hour or even minute. Wondering at which minute of the day your pages are generated the slowest? You are only a few clicks away from finding it out. Because you can select multiple dimensions, you can also build new reports over three levels such as "Events Category, Event Name, and Event Action" where Matomo only supports two levels. You can also get lots of valuable information by drilling down reports by user (for example see which Page URLs each user has viewed), by country, by device type, and much more.</p>

<blockquote>
  <p>Custom Reports supports even some dimensions and metrics that are not available in Matomo yet! And if you are missing some dimensions or metrics, we are likely able to add them for you.</p>
</blockquote>

<h3>Benefits</h3>

<ul><li>Gain amazing new insights that weren\'t possible before directly in your Matomo</li>
<li>Be able to deliver the information you need on time with ease</li>
<li>Save time and reduce the risk of human error by automating report generation and avoiding manual reporting processing (for example in Excel) </li>
<li>Make decisions faster and more reliable</li>
<li>See all reports you need at a glance and compare reports more easily without having to click around</li>
<li>Supports <a href="https://plugins.matomo.org/RollUpReporting">Roll-Up Reporting</a> which lets you create custom reports across several or all of your websites</li>
<li>100% data ownership</li>
</ul><h3>Our promise</h3>

<p><a href="https://shop.matomo.org/refund-policy/"><img src="https://shop.matomo.org/wp-content/uploads/2016/10/money_back-300x294.png" style="width:220px;float:right;margin-bottom:10px;" alt="Our promise to you" /></a>It is hard to explain all the possible new insights and benefits you can get out of Custom Reports as there are so many! Matomo tracks a lot of data and it is simply amazing to see which new conclusions you can suddenly draw when you look at all this data in a new, much more advanced way. There are literally millions of report combinations possible and only the sky will be your limit when you have Custom Reports. Another benefit of Custom Reports is that it supports even more features than most of the standard reports in Matomo. For example, you can pivot any custom report. Hand-crafted by the makers of Matomo, we are certain once you start using it, you will be thrilled by the power of Custom Reports.</p>

<blockquote>
  <p>This is why we give you a <a href="https://shop.matomo.org/refund-policy/">100% unconditional, easy, fast, and hassle-free money back guarantee</a> for 30 days. There are no strings attached.</p>
</blockquote>

<p>So now that you know that you have nothing to lose, start getting a new sight on your tracked data now and let us know how you go. We are happy to help you get started and are looking forward to hearing your story.</p>

<h3>About InnoCraft</h3>

<p>We at <a href="https://www.innocraft.com">InnoCraft</a> are the creators of Matomo and know it better than anyone else. This means all plugins are perfectly integrated into Matomo and come with outstanding features and quality to grow your business. We help our clients get started, configure, monitor and make the most of their Matomo analytics service. We also offer unique analytics products and services that help grow your business and meet the needs of medium and large businesses alike.</p>

<h3>Managing features</h3>

<ul><li>Create compelling custom reports tailored to your needs without any developer knowledge in just seconds</li>
<li>Choose from over 200 dimensions and metrics</li>
<li>Supports several visualizations including evolution over time graphs, data tables, bar graph, pie chart, cloud chart, and others</li>
<li>Combine up to 3 dimensions and unlimited metrics</li>
<li>Define a report filter which is applied on the raw data to show the data only for a subset of your visitors and users</li>
<li>Put your custom report on any existing reporting page or on its own reporting page</li>
<li>Super Users can make reports available for all websites </li>
</ul><h3>Integrates with Matomo Analytics platform</h3>

<ul><li>Enjoy features that are not supported by most standard Matomo reports such as pivoting.</li>
<li>Drill down deeper and filter custom reports <a href="https://matomo.org/docs/segmentation/">with Segments</a>.</li>
<li>View the evolution over time of any dimension value with <a href="https://matomo.org/docs/row-evolution/">Row Evolution</a>.</li>
<li>View the segmented <a href="https://matomo.org/docs/real-time/#visitor-log">Visitor Log</a> with just one click.</li>
<li>Supports other typical Matomo features like flatten, search, and more.</li>
<li>View your custom reports on the go with the <a href="https://matomo.org/mobile/">Matomo Mobile App</a>.</li>
<li>Create unlimited number of reports <a href="https://matomo.org/docs/data-limits/">No data limit</a>.</li>
<li>Supports other premium features like <a href="https://plugins.matomo.org/MediaAnalytics">Media Analytics</a>, <a href="https://plugins.matomo.org/FormAnalytics">Form Analytics</a> and <a href="https://plugins.matomo.org/ActivityLog">Activity Log</a>.</li>
</ul><h3>Export and API features</h3>

<ul><li>Get automatic <a href="https://matomo.org/docs/email-reports/">email and sms reports</a> for your custom reports, or send them to your colleagues or customers</li>
<li><a href="https://matomo.org/docs/embed-piwik-report/">Embed</a> the custom report widgets directly in your app, dashboard, or even TV screen!</li>
<li>HTTP API to manage your custom reports </li>
<li>HTTP API to fetch and export all <a href="https://developer.matomo.org/api-reference/reporting-api#CustomReports">Custom Reports</a></li>
<li>Get access to all the raw data via MySQL for 100% data ownership</li>
</ul><h3>More information</h3>

<p>To learn more about the plugin have a look at the <a href="https://matomo.org/docs/custom-reports/">Custom Reports User Guide</a> 
and <a href="https://matomo.org/faq/custom-reports/">Custom Reports FAQ</a>.</p>

<p>This plugin is built and maintained by the creators of Matomo.</p>',
              'faq' => '',
              'documentation' => '<p>The <a href="https://matomo.org/docs/custom-reports/">Custom Reports User Guide</a> and the <a href="https://matomo.org/faq/custom-reports/">Custom Reports FAQ</a> cover how to get the most out of this plugin.</p>',
              'changelog' => '',
            ),
            'download' => NULL,
          ),
        ),
        'isDownloadable' => false,
        'changelog' => 
        array (
          'url' => '',
        ),
        'consumer' => 
        array (
          'license' => NULL,
          'loginUrl' => 'https://shop.matomo.org/my-account',
        ),
      ),
      5 => 
      array (
        'name' => 'DevelopmentToogle',
        'displayName' => 'Development Toogle',
        'owner' => 'Findus23',
        'description' => 'Quickly enable and disable the development mode',
        'homepage' => 'https://lw1.at',
        'createdDateTime' => '2019-09-09 21:04:03',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Forum',
            'key' => 'forum',
            'value' => 'https://forum.matomo.org',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'lukas@matomo.org',
            'type' => 'email',
          ),
          2 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/Findus23/plugin-DevelopmentToogle/issues',
            'type' => 'url',
          ),
          3 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/Findus23/plugin-DevelopmentToogle',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'development',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Lukas Winkler',
            'email' => 'lukas@matomo.org',
            'homepage' => 'https://lw1.at',
          ),
        ),
        'repositoryUrl' => 'https://github.com/Findus23/plugin-DevelopmentToogle',
        'lastUpdated' => '2019-09-09 21:08:02',
        'latestVersion' => '0.1.1',
        'numDownloads' => 109,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/DevelopmentToogle/images/0.1.1/screenshot.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '2',
          'numContributors' => '1',
          'lastCommitDate' => '2019-09-09 21:06:35',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '0.1.0',
            'release' => '2019-09-09 21:04:03',
            'requires' => 
            array (
              'piwik' => '>=3.11.0,<4.0.0-b1',
            ),
            'numDownloads' => 0,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Findus23/plugin-DevelopmentToogle/commits/0.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/DevelopmentToogle/download/0.1.0',
          ),
          1 => 
          array (
            'name' => '0.1.1',
            'release' => '2019-09-09 21:08:02',
            'requires' => 
            array (
              'piwik' => '>=3.11.0,<4.0.0-b1',
            ),
            'numDownloads' => 109,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Findus23/plugin-DevelopmentToogle/commits/0.1.1',
            'readmeHtml' => 
            array (
              'description' => '

<p>This plugin adds a new icon to the main navbar for admins that quickly toogles the development features.</p>

<p>Disabling the development mode makes Matomo far quicker as caches aren\'t disabled.</p>

<pre><code>[Development]
enabled = 0
disable_merged_assets = 0
</code></pre>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<h3>0.1.1</h3>

<p>fix description</p>

<h3>0.1.0</h3>

<p>initial version</p>',
            ),
            'download' => '/api/2.0/plugins/DevelopmentToogle/download/0.1.1',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/DevelopmentToogle/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      6 => 
      array (
        'name' => 'SearchEngineKeywordsPerformance',
        'displayName' => 'Search Engine Keywords Performance',
        'owner' => 'innocraft',
        'description' => 'All keywords searched by your users on search engines are now visible into your Referrers reports! The ultimate solution to \'Keyword not defined\'.',
        'homepage' => 'https://plugins.matomo.org/SearchEngineKeywordsPerformance',
        'createdDateTime' => '2017-03-14 11:24:34',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'search',
          1 => 'google',
          2 => 'Bing',
          3 => 'Keyword',
          4 => 'SEO',
          5 => 'Yahoo',
          6 => 'Crawling',
        ),
        'basePrice' => 125,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'InnoCraft',
            'email' => 'contact@innocraft.com',
            'homepage' => 'https://www.innocraft.com',
          ),
        ),
        'repositoryUrl' => NULL,
        'lastUpdated' => '2019-09-05 09:37:54',
        'latestVersion' => '3.4.1',
        'numDownloads' => NULL,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/SearchEngineKeywordsPerformance/images/3.4.1/0_Search_Keywords_combined_across_Search_Engines.png',
          1 => 'https://plugins.matomo.org/SearchEngineKeywordsPerformance/images/3.4.1/1_Keywords_on_Google_Search_Clicks_-_Impressions_-_Clickthrough_-_Position_in_results_page.png',
          2 => 'https://plugins.matomo.org/SearchEngineKeywordsPerformance/images/3.4.1/2_Keywords_on_Bing_and_Yahoo_Search.png',
          3 => 'https://plugins.matomo.org/SearchEngineKeywordsPerformance/images/3.4.1/3_Google_Images_Keywords.png',
          4 => 'https://plugins.matomo.org/SearchEngineKeywordsPerformance/images/3.4.1/4_Keywords_used_on_Google_Videos.png',
          5 => 'https://plugins.matomo.org/SearchEngineKeywordsPerformance/images/3.4.1/5_Crawling_Errors.png',
          6 => 'https://plugins.matomo.org/SearchEngineKeywordsPerformance/images/3.4.1/6_Crawl_Overview.png',
          7 => 'https://plugins.matomo.org/SearchEngineKeywordsPerformance/images/3.4.1/7_Keyword_ranking_position_in_search_results_evolution_over_time.png',
          8 => 'https://plugins.matomo.org/SearchEngineKeywordsPerformance/images/3.4.1/8_Page_crawling_issues_on_Google.png',
          9 => 'https://plugins.matomo.org/SearchEngineKeywordsPerformance/images/3.4.1/9_Page_crawling_issues_on_Bing.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => NULL,
          'numContributors' => NULL,
          'lastCommitDate' => NULL,
        ),
        'featured' => false,
        'isFree' => false,
        'isPaid' => true,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => 
        array (
          'url' => 'https://plugins.matomo.org/SearchEngineKeywordsPerformance',
          'variations' => 
          array (
            0 => 
            array (
              'price' => '129',
              'prettyPrice' => '129EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/SearchEngineKeywordsPerformance?add-to-cart=s&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/searchenginekeywordsperformance/?attribute_type=Up+to+4+users&add-to-cart=3221&variation_id=3222&aelia_cs_currency=EUR',
            ),
            1 => 
            array (
              'price' => '149',
              'prettyPrice' => 'USD149',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/SearchEngineKeywordsPerformance?add-to-cart=s&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/searchenginekeywordsperformance/?attribute_type=Up+to+4+users&add-to-cart=3221&variation_id=3222&aelia_cs_currency=USD',
              'cheapest' => true,
              'recommended' => true,
            ),
            2 => 
            array (
              'price' => '249',
              'prettyPrice' => '249EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/SearchEngineKeywordsPerformance?add-to-cart=m&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/searchenginekeywordsperformance/?attribute_type=5+to+15+users&add-to-cart=3221&variation_id=3223&aelia_cs_currency=EUR',
            ),
            3 => 
            array (
              'price' => '289',
              'prettyPrice' => 'USD289',
              'currency' => 'USD',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/SearchEngineKeywordsPerformance?add-to-cart=m&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/searchenginekeywordsperformance/?attribute_type=5+to+15+users&add-to-cart=3221&variation_id=3223&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
            4 => 
            array (
              'price' => '379',
              'prettyPrice' => '379EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/SearchEngineKeywordsPerformance?add-to-cart=l&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/searchenginekeywordsperformance/?attribute_type=Unlimited+users&add-to-cart=3221&variation_id=3224&aelia_cs_currency=EUR',
            ),
            5 => 
            array (
              'price' => '439',
              'prettyPrice' => 'USD439',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/SearchEngineKeywordsPerformance?add-to-cart=l&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/searchenginekeywordsperformance/?attribute_type=Unlimited+users&add-to-cart=3221&variation_id=3224&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
          ),
          'reviews' => 
          array (
            'embedUrl' => 'https://shop.matomo.org/product/searchenginekeywordsperformance/?show_reviews=1&piwik_embed=1',
            'height' => 200,
            'averageRating' => '5.00',
            'ratingCount' => 6,
            'reviewCount' => 6,
          ),
        ),
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => 'SPECIAL OFFER! Get for FREE the Multi Channel Conversion Attribution feature when you purchase this plugin (terms and conditions apply).',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.4.1',
            'release' => NULL,
            'requires' => 
            array (
              'piwik' => '>=3.1.0,<4.0.0-b1',
              'php' => '>=5.6',
            ),
            'numDownloads' => NULL,
            'license' => 
            array (
              'name' => 'InnoCraft EULA',
              'url' => 'https://plugins.matomo.org/SearchEngineKeywordsPerformance/3.4.1/license',
            ),
            'repositoryChangelogUrl' => NULL,
            'readmeHtml' => 
            array (
              'description' => '

<p><em>Hi, this is Stefan from <a href="https://www.innocraft.com">InnoCraft</a>. The company of the makers of Matomo Analytics which is used by over 1 million websites and apps in over 150 countries.</em></p>

<p><em>Some years ago most search engines decided to hide keywords from the referrer urls, which made it impossible for web analytics tools to report reliable keyword statistics. Tools like Matomo started reporting keyword searches as "Keyword not defined" or "Keyword not provided".</em></p>

<blockquote>
  <p>Ever wondered how to get better insights on those hidden keywords?</p>
</blockquote>

<p><em>With our Search Engine Keywords Performance plugin, you will get back deep insights about all the keywords that people are searching for when clicking on your websites. All of your keywords directly into your familiar Matomo Analytics reports. The biggest search engines are providing tools and APIs that allow us, website owners, to get the list of our keywords along with the critical metrics Impressions, Clicks, ClickThrough ratio and Average position in the Search results page. This plugin makes it easy for you to connect to the APIs and will automatically import your valuable keyword data into Matomo Referrers reports.</em></p>

<blockquote>
  <p>Stop being in the dark about this incredible keyword searches information and know what your users and customers are searching for.</p>
</blockquote>

<p><em>Which queries caused your website to appear in search results? Stop wasting time by looking up keyword statistics in serveral Webmaster Tools and start getting combined results across all supported search engines within Matomo. Which queries result in more traffic to your website than others? Improve your SEO efforts and monitor your position and performance for each Keyword directly in your Matomo reports.</em></p>

<blockquote>
  <p>As a bonus you will also get a new "Crawling overview" report which reports all the most important information about how Search Engines robots crawl your websites.</p>
</blockquote>

<p><em>Was there any server errors or connection timeout? How many pages of my websites were crawled and indexed? How many page not found errors? How many total inbound links were found pointing to my website? Keep an eye on these search crawling metrics metrics directly within Matomo. Do not miss important errors and maximise your SEO power to get more traffic!</em></p>

<blockquote>
  <p>Eliminate "not found" pages that give your visitors a bad experience and lose less visitors on your website</p>
</blockquote>

<p><em>Have you ever been stuck on a so called "404 not found" page? What are the chances that you continue browsing on this website or the chance that you find the page you were looking for afterwards? The page crawling errors reports gives you a list of all pages that could not be crawled by a search engine with a detailed reason. This helps you to take the right actions to improve the experience on your website.</em></p>

<h3>Our promise</h3>

<p><a href="https://shop.matomo.org/refund-policy/"><img src="https://shop.matomo.org/wp-content/uploads/2016/10/money_back-300x294.png" style="width:220px;float:right;margin-bottom:10px;" alt="Our promise to you" /></a>Search Engine Keywords Performance is hand-crafted by the makers of Matomo with top quality and we are convinced once you start using it, you will never want to miss it again.</p>

<blockquote>
  <p>This is why we give you a <a href="https://shop.matomo.org/refund-policy/">100% unconditional, easy, fast, and hassle-free money back guarantee</a> for 30 days. There are no strings attached.</p>
</blockquote>

<p>So try it now and let us know how you do.</p>

<h3>How Search Keywords Performance monitor works</h3>

<p>Google and other bigger search engines provide webmaster tools that allow website owners to access various statistics about their websites.</p>

<p>In Matomo you will be guided to set up access to these APIs - it just takes a few minutes. Matomo will then automatically start importing your keyword statistics every day.</p>

<p>In most webmaster tools you will even get some access to your historical keyword data. For example Google lets you view keyword statistics for the past three months. And when you use Search Engine Keywords Performance, the beauty is that you will keep a full copy of your valuable keyword data within Matomo and this data will be stored there forever. So you will be able to view the evolution of your keywords metrics and KPIs over many months and years and over time compare how your search analytics keywords evolve. Monitoring SEO has never been so easy! Matomo lets you once again keep full control of your data and gain more insights.</p>

<h3>About InnoCraft</h3>

<p>We at <a href="https://www.innocraft.com">InnoCraft</a> are the creators of Matomo and know it best. We help our clients get started, configure, monitor and make the most of their Matomo analytics service. We also offer unique analytics products and services that help grow your business and meet the needs of small, medium and large businesses alike.</p>

<h3>Features</h3>

<ul><li>New Search Keywords report in Matomo Referrers section.</li>
<li>View Keywords analytics by search type (web VS image VS video).</li>
<li>View combined Keywords across all search engines (Google + Bing + Yahoo).</li>
<li>Monitor Keyword rankings and Search Engine Optimisation performance for each keyword with <a href="https://matomo.org/docs/row-evolution/">Row Evolution</a>.</li>
<li>New Crawling overview report show how Search engines bots crawl your websites (Bing + Yahoo).</li>
<li>View crawling overview key metrics (for Bing + Yahoo): crawled pages, total pages in index, total inboud links, robots.txt exclusion page count, crawl errors, DNS failures, connection timeouts, page redirects (301, 302 http status), error pages (4xx http status), internet error pages (5xx http status).</li>
<li>Import the detailed list of search keywords for Google search, Google images and Google Videos directly from Google Search Console.</li>
<li>Import the detailed list of search keywords from Bing and Yahoo! search directly from Bing Webmaster Tools.</li>
<li>Lists all page crawling errors.</li>
<li>View all crawling errors with detailed reasons like server errors, robots.txt exclusions, not found pages, ... (Bing + Yahoo)</li>
<li>Possibility to add support for Yandex (contact us).</li>
<li>Get your Keyword analytics SEO reports by <a href="https://matomo.org/docs/email-reports/">email</a> to you, your colleagues or customers. </li>
<li>Export your Keyword analytics report using the <a href="http://developer.matomo.org/api-reference/reporting-api#SearchEngineKeywordsPerformance">Search Keywords Performance Monitor API</a>. </li>
</ul><p>Learn more in the <a href="https://matomo.org/docs/search-engine-keywords-performance/">Search Keywords Performance Monitor user guide</a> and <a href="https://matomo.org/faq/search-engine-keywords-performance/">FAQs</a>.</p>',
              'faq' => '',
              'documentation' => '<p>The <a href="https://matomo.org/docs/search-engine-keywords-performance/">Search Engine Keywords Performance User Guide</a> and the <a href="https://matomo.org/faq/search-engine-keywords-performance/">Search Engine Keywords Performance FAQ</a> cover how to get the most out of this plugin.</p>',
              'changelog' => '',
            ),
            'download' => NULL,
          ),
        ),
        'isDownloadable' => false,
        'changelog' => 
        array (
          'url' => '',
        ),
        'consumer' => 
        array (
          'license' => NULL,
          'loginUrl' => 'https://shop.matomo.org/my-account',
        ),
      ),
      7 => 
      array (
        'name' => 'TwitterFeedWidgetByAmperage',
        'displayName' => 'Twitter Feed Widget By Amperage',
        'owner' => 'AMPERAGE-Marketing',
        'description' => 'Show Twitter Feed as a configurable widget.',
        'homepage' => 'https://www.amperagemarketing.com',
        'createdDateTime' => '2019-08-27 21:50:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Wiki',
            'key' => 'wiki',
            'value' => 'https://github.com/AMPERAGE-Marketing/Matomo-Twitter-Feed-Widget/wiki',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'kzeni1@gmail.com',
            'type' => 'email',
          ),
          2 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/AMPERAGE-Marketing/Matomo-Twitter-Feed-Widget/issues',
            'type' => 'url',
          ),
          3 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/AMPERAGE-Marketing/Matomo-Twitter-Feed-Widget',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'widget',
          1 => 'social',
          2 => 'dashboard',
          3 => 'amperage',
          4 => 'twitter',
          5 => 'twitter feed',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Amperage Marketing & Fundraising',
            'email' => 'digital@amperagemarketing.com',
            'homepage' => 'http://www.amperagemarketing.com',
          ),
          1 => 
          array (
            'name' => 'Kurt Zenisek',
            'email' => 'kzeni1@gmail.com',
            'homepage' => 'http://kzeni.com',
          ),
        ),
        'repositoryUrl' => 'https://github.com/AMPERAGE-Marketing/Matomo-Twitter-Feed-Widget',
        'lastUpdated' => '2019-08-27 22:06:05',
        'latestVersion' => '1.0.2',
        'numDownloads' => 146,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/TwitterFeedWidgetByAmperage/images/1.0.2/setting.png',
          1 => 'https://plugins.matomo.org/TwitterFeedWidgetByAmperage/images/1.0.2/twitter-feed-widget.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '4',
          'numContributors' => '1',
          'lastCommitDate' => '2019-08-27 22:05:09',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '1.0.0',
            'release' => '2019-08-27 21:50:04',
            'requires' => 
            array (
              'piwik' => '>=3.3.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 0,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/TwitterFeedWidgetByAmperage/1.0.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/AMPERAGE-Marketing/Matomo-Twitter-Feed-Widget/commits/1.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/TwitterFeedWidgetByAmperage/download/1.0.0',
          ),
          1 => 
          array (
            'name' => '1.0.1',
            'release' => '2019-08-27 22:04:03',
            'requires' => 
            array (
              'piwik' => '>=3.3.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 0,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/TwitterFeedWidgetByAmperage/1.0.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/AMPERAGE-Marketing/Matomo-Twitter-Feed-Widget/commits/1.0.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/TwitterFeedWidgetByAmperage/download/1.0.1',
          ),
          2 => 
          array (
            'name' => '1.0.2',
            'release' => '2019-08-27 22:06:05',
            'requires' => 
            array (
              'piwik' => '>=3.3.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 146,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/TwitterFeedWidgetByAmperage/1.0.2/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/AMPERAGE-Marketing/Matomo-Twitter-Feed-Widget/commits/1.0.2',
            'readmeHtml' => 
            array (
              'description' => '

<p>A widget for Matomo (formerly Piwik) that allows you to specify your Twitter Username and it then displays your Twitter Feed on your dashboard.</p>

',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<h2>1.0.2</h2>

<ul><li>Matomo plugin marketplace update.</li>
</ul><h2>1.0.1</h2>

<ul><li>Minor maintenance.</li>
</ul><h2>1.0</h2>

<ul><li>Initial Release.</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/TwitterFeedWidgetByAmperage/download/1.0.2',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/TwitterFeedWidgetByAmperage/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      8 => 
      array (
        'name' => 'FacebookPageWidgetByAmperage',
        'displayName' => 'Facebook Page Widget',
        'owner' => 'AMPERAGE-Marketing',
        'description' => 'Show Facebook Page plugin as a configurable widget.',
        'homepage' => 'https://www.amperagemarketing.com',
        'createdDateTime' => '2018-02-01 03:00:05',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Wiki',
            'key' => 'wiki',
            'value' => 'https://github.com/AMPERAGE-Marketing/Matomo-Facebook-Page-Widget/wiki',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'kzeni1@gmail.com',
            'type' => 'email',
          ),
          2 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/AMPERAGE-Marketing/Matomo-Facebook-Page-Widget/issues',
            'type' => 'url',
          ),
          3 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/AMPERAGE-Marketing/Matomo-Facebook-Page-Widget',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'widget',
          1 => 'social',
          2 => 'dashboard',
          3 => 'Facebook',
          4 => 'amperage',
          5 => 'facebook page',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Amperage Marketing & Fundraising',
            'email' => 'digital@amperagemarketing.com',
            'homepage' => 'http://www.amperagemarketing.com',
          ),
          1 => 
          array (
            'name' => 'Kurt Zenisek',
            'email' => 'kzeni1@gmail.com',
            'homepage' => 'http://kzeni.com',
          ),
        ),
        'repositoryUrl' => 'https://github.com/AMPERAGE-Marketing/Matomo-Facebook-Page-Widget',
        'lastUpdated' => '2019-08-27 22:06:03',
        'latestVersion' => '1.0.3',
        'numDownloads' => 10314,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/FacebookPageWidgetByAmperage/images/1.0.3/facebook-page-widget.png',
          1 => 'https://plugins.matomo.org/FacebookPageWidgetByAmperage/images/1.0.3/setting.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '8',
          'numContributors' => '1',
          'lastCommitDate' => '2019-08-27 22:05:08',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '1.0.0',
            'release' => '2018-02-01 03:00:05',
            'requires' => 
            array (
              'piwik' => '>=3.3.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 1382,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/FacebookPageWidgetByAmperage/1.0.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/AMPERAGE-Marketing/Matomo-Facebook-Page-Widget/commits/1.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/FacebookPageWidgetByAmperage/download/1.0.0',
          ),
          1 => 
          array (
            'name' => '1.0.1',
            'release' => '2018-05-11 14:44:03',
            'requires' => 
            array (
              'piwik' => '>=3.3.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 8748,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/FacebookPageWidgetByAmperage/1.0.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/AMPERAGE-Marketing/Matomo-Facebook-Page-Widget/commits/1.0.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/FacebookPageWidgetByAmperage/download/1.0.1',
          ),
          2 => 
          array (
            'name' => '1.0.2',
            'release' => '2019-08-27 22:04:06',
            'requires' => 
            array (
              'piwik' => '>=3.3.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 0,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/FacebookPageWidgetByAmperage/1.0.2/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/AMPERAGE-Marketing/Matomo-Facebook-Page-Widget/commits/1.0.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/FacebookPageWidgetByAmperage/download/1.0.2',
          ),
          3 => 
          array (
            'name' => '1.0.3',
            'release' => '2019-08-27 22:06:03',
            'requires' => 
            array (
              'piwik' => '>=3.3.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 184,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/FacebookPageWidgetByAmperage/1.0.3/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/AMPERAGE-Marketing/Matomo-Facebook-Page-Widget/commits/1.0.3',
            'readmeHtml' => 
            array (
              'description' => '

<p>A widget for Matomo (formerly Piwik) that allows you to specify your Facebook Page and it then displays your Facebook Page stats on your dashboard.</p>

',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<h2>1.0.3</h2>

<ul><li>Matomo plugin marketplace update.</li>
</ul><h2>1.0.2</h2>

<ul><li>Typo correction.</li>
</ul><h2>1.0.1</h2>

<ul><li>Updated text that’s shown when the widget’s loading.</li>
</ul><h2>1.0</h2>

<ul><li>Initial Release.</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/FacebookPageWidgetByAmperage/download/1.0.3',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/FacebookPageWidgetByAmperage/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      9 => 
      array (
        'name' => 'BotTracker',
        'displayName' => 'Bot Tracker',
        'owner' => 'Thomas--F',
        'description' => 'Detection of bots & spiders and count their visits without tracking them in the visitor-log.',
        'homepage' => 'https://github.com/Thomas--F/BotTracker',
        'createdDateTime' => '2014-02-21 13:14:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/Thomas--F/BotTracker/issues',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/Thomas--F/BotTracker/',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'BotTracker',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Thomas Fasselt',
            'email' => 'Thomas.Fasselt@gmx.com',
            'homepage' => 'https://github.com/Thomas--F/BotTracker',
          ),
        ),
        'repositoryUrl' => 'https://github.com/Thomas--F/BotTracker',
        'lastUpdated' => '2019-08-27 20:00:06',
        'latestVersion' => '1.06',
        'numDownloads' => 65758,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '156',
          'numContributors' => '9',
          'lastCommitDate' => '2019-08-27 19:59:13',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '1.02',
            'release' => '2016-12-15 21:28:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-dev,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 13318,
            'license' => 
            array (
              'name' => 'GPL 3.0 / fair use',
              'url' => 'https://plugins.matomo.org/BotTracker/1.02/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Thomas--F/BotTracker/commits/1.02_a',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/BotTracker/download/1.02',
          ),
          1 => 
          array (
            'name' => '1.03',
            'release' => '2018-09-09 12:12:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-dev,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 8176,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/BotTracker/1.03/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Thomas--F/BotTracker/commits/1.04',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/BotTracker/download/1.03',
          ),
          2 => 
          array (
            'name' => '1.05',
            'release' => '2019-07-25 21:18:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-dev,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 2245,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/BotTracker/1.05/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Thomas--F/BotTracker/commits/1.05',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/BotTracker/download/1.05',
          ),
          3 => 
          array (
            'name' => '1.06',
            'release' => '2019-08-27 20:00:06',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-dev,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 1682,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/BotTracker/1.06/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Thomas--F/BotTracker/commits/1.06',
            'readmeHtml' => 
            array (
              'description' => '

<p>BotTracker ist a plugin to exclude and separately track the visits of bots, spiders and webcrawlers, that hit your page. Because Matomo (Piwik) doesn\'t store the user agent, BotTracker will only be able to track new bots from the moment you add them to its list forward (retroactive tracking isn\'t possible).</p>

<p>This plugin is still in BETA-status, but I have tested it for a while. It should be stable.</p>

<p>Before you install this plugin, here\'s something you should be aware of:
Many webcrawlers, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Matomo if you don\'t use the PHP-API. The BotTracker can only track those that were caught by Matomo itself.</p>

<p>Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will <em>not</em> activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.</p>

<h3>How it works</h3>

<p>The plugin scans the user agent of any incoming visit for specific keywords. If the keyword is found, the visit is excluded from the normal log and the corresponding counter in the bot-table (BOT_DB) is increased.
If you enable the "extra stats" for a bot entry, the visit will also be written into a second bot-table (BOT_DB_STAT). This second table logs the timestamp, the visited page and the user agent. The second table is currently not displayed in Matomo, but the more experienced users can select the data from the database. Some more detailed reports may come in the future.</p>

<p>You can add/delete/modify the keywords in the administration-menu. There are webpages that list the user-agents of known spiders and webcrawlers (e.g. http://www.useragentstring.com/pages/Crawlerlist/). The most common bots are already in the default list of the plugin.</p>

<h3>Installation / Update</h3>

<p>See http://piwik.org/faq/plugins/#faq_21</p>

<p>If you update form Matomo 1.x to Matomo 2.x or from an old version of BotTracker (before 0.45) please reinstall the plugin.</p>

<h1>License</h1>

<p>GPL v3 / fair use</p>

<h1>Support</h1>

<p>Please direct any feedback to:</p>

<ul><li><a href="https://github.com/Thomas--F/BotTracker/issues">https://github.com/Thomas--F/BotTracker/issues</a></li>
</ul>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<p>1.06
-  correct default for "botLastVisit" (issue #63)</p>

<p>1.05</p>

<ul><li>removed default on visit_timestamp (issue #53)</li>
<li>changed primary key and add aditional column for stats table (issue #53)</li>
<li>changed default for last_visit (issue #61)</li>
<li>corrected delimiter in botlist.txt (issue #62) </li>
</ul><p>1.04</p>

<ul><li>change license string (validator-fail)</li>
</ul><p>1.03</p>

<ul><li>replace depricated functions</li>
</ul><p>1.02</p>

<ul><li>change PHP-requirements for Piwik v3</li>
</ul><p>1.01</p>

<ul><li>changes at description and changelog for Piwik v3</li>
</ul><p>1.00</p>

<ul><li>upgrade to Piwik Version 3 (issue #50)</li>
<li>some parts were new coded, others are only migrated</li>
</ul><p>0.58</p>

<ul><li>new feature: BotTracker now works with the import_logs-script (issue #38)</li>
<li>add: some new translation-strings (issue #46)</li>
<li>bufgix: truncate the url to max 100 bytes (issue #49)</li>
</ul><p>0.57</p>

<ul><li>bugfix: change of order and position in the BotTracker-Visitor-View</li>
<li>deleting of the old update-scripts (from version 0.43 and 0.45)</li>
<li>bugfix: change of the default-value for botLastVisit \'0000-00-00\' to \'2000-01-01\'</li>
<li>new feature: file import for new bots (see online-help in the administration-dialog for more infos)</li>
</ul><p>0.56</p>

<ul><li>bugfix: botLastVisit-Date is not shown (pull request #35)</li>
<li>bugfix: Some characters are not quoted properly (issue #32)</li>
<li>a lot more languages. Thanks a lot to all transiflex-supporter</li>
</ul><p>0.55</p>

<ul><li>some minor bugfixes and typos</li>
<li>add some more languages</li>
</ul><p>0.54</p>

<ul><li>bugfix for Piwik 2.11</li>
</ul><p>0.53</p>

<ul><li>bugfix for cloud-view on "Top 10"</li>
<li>deactivating insights for "Top 10"</li>
<li>add more default bots (just use the "add default bots" button, only the new ones will be added)</li>
</ul><p>0.52</p>

<ul><li>bugfix for issue #10 (NOTICE in error-log for undeclared variables)</li>
</ul><p>0.51</p>

<ul><li>emergency-fix for v0.50</li>
</ul><p>0.50</p>

<ul><li>bugfix for issue #9 (wrong time zone for last visit)</li>
</ul><p>0.49</p>

<ul><li>fixed crash with a new and empty webpage</li>
</ul><p>0.48</p>

<ul><li>change requirements because 0.47 doesn\'t work with Piwik 2.3</li>
</ul><p>0.47</p>

<ul><li>bugfix: changes menu-creation for Piwik v2.4</li>
</ul><p>0.46</p>

<ul><li>bugfix: remove depricated method for Piwik v2.2</li>
</ul><p>0.45</p>

<ul><li>add column to primary key in extra-stats-table</li>
</ul><p>0.44</p>

<ul><li>more description for the marketplace</li>
</ul><p>0.43</p>

<ul><li>Compatible with Piwik 2.0</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/BotTracker/download/1.06',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/BotTracker/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      10 => 
      array (
        'name' => 'HeatmapSessionRecording',
        'displayName' => 'Heatmap & Session Recording',
        'owner' => 'innocraft',
        'description' => 'Truly understand your visitors by seeing where they click, hover, type and scroll. Replay their actions in a video and ultimately increase conversions',
        'homepage' => 'https://www.heatmap-analytics.com',
        'createdDateTime' => '2017-05-17 06:34:21',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'Visitor',
          1 => 'heatmap',
          2 => 'video',
          3 => 'click',
          4 => 'visit',
          5 => 'session recording',
          6 => 'session',
          7 => 'recording',
          8 => 'move',
          9 => 'scroll',
          10 => 'hover',
          11 => 'user',
        ),
        'basePrice' => 200,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'InnoCraft',
            'email' => 'contact@innocraft.com',
            'homepage' => 'https://www.innocraft.com',
          ),
        ),
        'repositoryUrl' => NULL,
        'lastUpdated' => '2019-08-22 03:59:48',
        'latestVersion' => '3.2.29',
        'numDownloads' => NULL,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/HeatmapSessionRecording/images/3.2.29/0_Click_Heatmap.jpg',
          1 => 'https://plugins.matomo.org/HeatmapSessionRecording/images/3.2.29/1_Move_Heatmap.png',
          2 => 'https://plugins.matomo.org/HeatmapSessionRecording/images/3.2.29/2_Scroll_Heatmap.jpg',
          3 => 'https://plugins.matomo.org/HeatmapSessionRecording/images/3.2.29/3_Above_Fold.png',
          4 => 'https://plugins.matomo.org/HeatmapSessionRecording/images/3.2.29/4_Session_Recordings.png',
          5 => 'https://plugins.matomo.org/HeatmapSessionRecording/images/3.2.29/5_Replay_Recorded_Session.png',
          6 => 'https://plugins.matomo.org/HeatmapSessionRecording/images/3.2.29/6_Replay_Move_And_Click_Path.jpg',
          7 => 'https://plugins.matomo.org/HeatmapSessionRecording/images/3.2.29/7_Visitor_Log.png',
          8 => 'https://plugins.matomo.org/HeatmapSessionRecording/images/3.2.29/8_Manage.png',
        ),
        'previews' => 
        array (
          0 => 
          array (
            'type' => 'video',
            'provider' => 'youtube',
            'url' => 'https://www.youtube-nocookie.com/embed/AUSXjH8U9fk',
          ),
        ),
        'activity' => 
        array (
          'numCommits' => NULL,
          'numContributors' => NULL,
          'lastCommitDate' => NULL,
        ),
        'featured' => false,
        'isFree' => false,
        'isPaid' => true,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => 
        array (
          'url' => 'https://plugins.matomo.org/HeatmapSessionRecording',
          'variations' => 
          array (
            0 => 
            array (
              'price' => '199',
              'prettyPrice' => '199EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/HeatmapSessionRecording?add-to-cart=s&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/heatmapsessionrecording/?attribute_type=Up+to+4+users&add-to-cart=3881&variation_id=3882&aelia_cs_currency=EUR',
            ),
            1 => 
            array (
              'price' => '229',
              'prettyPrice' => 'USD229',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/HeatmapSessionRecording?add-to-cart=s&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/heatmapsessionrecording/?attribute_type=Up+to+4+users&add-to-cart=3881&variation_id=3882&aelia_cs_currency=USD',
              'cheapest' => true,
              'recommended' => true,
            ),
            2 => 
            array (
              'price' => '399',
              'prettyPrice' => '399EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/HeatmapSessionRecording?add-to-cart=m&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/heatmapsessionrecording/?attribute_type=5+to+15+users&add-to-cart=3881&variation_id=3883&aelia_cs_currency=EUR',
            ),
            3 => 
            array (
              'price' => '459',
              'prettyPrice' => 'USD459',
              'currency' => 'USD',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/HeatmapSessionRecording?add-to-cart=m&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/heatmapsessionrecording/?attribute_type=5+to+15+users&add-to-cart=3881&variation_id=3883&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
            4 => 
            array (
              'price' => '599',
              'prettyPrice' => '599EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/HeatmapSessionRecording?add-to-cart=l&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/heatmapsessionrecording/?attribute_type=Unlimited+users&add-to-cart=3881&variation_id=3884&aelia_cs_currency=EUR',
            ),
            5 => 
            array (
              'price' => '689',
              'prettyPrice' => 'USD689',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/HeatmapSessionRecording?add-to-cart=l&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/heatmapsessionrecording/?attribute_type=Unlimited+users&add-to-cart=3881&variation_id=3884&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
          ),
          'reviews' => 
          array (
            'embedUrl' => 'https://shop.matomo.org/product/heatmapsessionrecording/?show_reviews=1&piwik_embed=1',
            'height' => 200,
            'averageRating' => '5.00',
            'ratingCount' => 3,
            'reviewCount' => 3,
          ),
        ),
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => 'SPECIAL OFFER! Get for FREE the Multi Channel Conversion Attribution feature when you purchase this plugin (terms and conditions apply).',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.2.29',
            'release' => NULL,
            'requires' => 
            array (
              'piwik' => '>=3.0.4-rc1,<4.0.0-b1',
            ),
            'numDownloads' => NULL,
            'license' => 
            array (
              'name' => 'InnoCraft EULA',
              'url' => 'https://plugins.matomo.org/HeatmapSessionRecording/3.2.29/license',
            ),
            'repositoryChangelogUrl' => NULL,
            'readmeHtml' => 
            array (
              'description' => '

<p>Hi, this is Mike from <a href="https://www.innocraft.com">InnoCraft</a>, the company of the makers of Matomo Analytics which is used 
by over 1 million websites and apps in over 150 countries.</p>

<p>I\'m very proud to introduce you to our Heatmap &amp; Session Recording feature which lets you analyze your visitors\' behaviour
on a whole new level that was not possible before.</p>

<blockquote>
  <p>This means it can increase your conversion rates and sales big times without much effort.</p>
</blockquote>

<p><strong>Heatmaps</strong> show you where on a page your visitors tried to click, where they moved the mouse and how far down they scrolled. This lets you find out to what your visitors really pay attention to, what they are looking for, how engaging your content is, whether
your content encourages users to scroll, whether key content is positioned correctly, whether they get distracted by something unimportant, whether your visitors think that something is clickable even though it is not, and much more. You can view heatmaps for different device types and compare how your content works across devices.</p>

<p><strong>Session Recordings</strong> lets you record activities such as clicks, mouse movements, scrolls, window resizes, form interactions, and changes in your page. You can then replay these activities in a video and see exactly what a visitor did on your website. It is like eye-tracking but much more cost effective, takes only seconds to setup, and you actually get insights into your real visitors instead of a test group. It is ideal to improve the usability of your website, to see how your visitors experience your website, where they have problems, and why they leave. A great use case is for example watching your visitors fill out forms and perfectly complements our <a href="https://www.form-analytics.net">Form Analytics</a>.</p>

<blockquote>
  <p>When you have Heatmap &amp; Session Recording, you will see what your visitors see and do when they visit your website and ultimately truly understand them. Based on the insights you get, you will identify problems, make changes, and see if these changes actually improve your website.</p>
</blockquote>

<h3>Benefits</h3>

<ul><li>100% data ownership</li>
<li>Replay videos of real visitors and see exactly how they interacted with your website</li>
<li>Discover where your users actually pay attention to and where they have problems</li>
<li>Identify which content is useless and with which content your visitors engage</li>
<li>Find out why your visitors leave and what they are really looking for</li>
<li>Learn if your page structure is good and whether your visitors are encouraged to scroll</li>
<li>Generates heatmaps and records sessions out of the box, no developer needed to make changes</li>
<li>Works with traditional websites, single-page websites and web-applications</li>
<li>Nicely integrated into Matomo</li>
<li>No limits! Records unlimited heatmaps and session recordings</li>
<li>Heatmaps and Session Recordings are stored very effeciently on your server</li>
</ul><h3>Our promise</h3>

<p><a href="https://shop.matomo.org/refund-policy/"><img src="https://shop.matomo.org/wp-content/uploads/2016/10/money_back-300x294.png" style="width:220px;float:right;margin-bottom:10px;" alt="Our promise to you" /></a>Since we have started using Heatmap &amp; Session Recording, we get a whole new level of insights into our 
website. Such insights are not possibe to get with any other traditional report and we are now able to understand our visitors much better, much faster. These insights help us to consistently increase our conversions and we are sure it will do the same thing for you. Hand-crafted by the makers of Matomo, we are certain once you start using it, you will absolutely love it.</p>

<blockquote>
  <p>This is why we give you a <a href="https://shop.matomo.org/refund-policy/">100% unconditional, easy, fast, and hassle-free money back guarantee</a> for 30 days. There are no strings attached.</p>
</blockquote>

<p>So now that you know that you have nothing to lose, start improving your website now and let us know how you go. We are happy to help you get started and are looking forward to hearing how it helps you.</p>

<h3>About InnoCraft</h3>

<p>We, at <a href="https://www.innocraft.com">InnoCraft</a>, are the creators of Matomo and know it better than anyone else. This means all plugins are perfectly integrated into Matomo and come with outstanding features and quality to grow your business. We help our clients get started, configure, monitor and make the most of their Matomo analytics service. We also offer unique analytics products and services that help grow your business and meet the needs of small, medium and large businesses alike</p>

<h3>Heatmap visualization features</h3>

<ul><li>View click, mouse move (hover) and scroll heatmaps </li>
<li>View the heatmaps for desktop, tablet and mobile devices</li>
<li>See how much of the content is visible on average when users open the website (above the fold)</li>
<li>See how far down your visitors scroll</li>
<li>Delete an already taken heatmap screenshot</li>
<li>Choose between different heatmap widths</li>
<li>Apply <a href="https://matomo.org/docs/segmentation/">segments</a> to drill down your visitors and gain insights into specific target groups</li>
</ul><h3>Recording features</h3>

<ul><li>Visitor summary shows used browser, operating system, location, viewport resolution, spent time on the page, and more.</li>
<li>Video controls like play, pause, replay and seek</li>
<li>Video timeline shows you when a certain event like a click, mouse move, or scroll will happen</li>
<li>Replays all clicks, mouse movements, scrolls, window resizes, form interactions, and page changes (eg when a popup appears)</li>
<li>Replay all recorded page views of a visitor within a session one after another</li>
<li>Delete individual recordings</li>
<li>Enable autoplay to replay all page views within a visit automatically</li>
<li>Change the replay speed</li>
<li>Optionally skip long pauses in a recording automatically</li>
<li>Use shortcuts when replaying a recorded session</li>
<li>View the <a href="https://matomo.org/docs/user-profile/">Visitor Profile</a> to get all information about a visitor</li>
<li>Replay a recorded session directly from the <a href="https://matomo.org/docs/real-time/#visitor-log">Visitor Log</a></li>
<li>Apply <a href="https://matomo.org/docs/segmentation/">segments</a> to find the recordings you are interested in</li>
</ul><h3>Manage Heatmap</h3>

<ul><li>Create unlimited heatmaps</li>
<li>Select how many page views you want to record</li>
<li>Define on which page a heatmap should be recorded by applying patterns like "starts with", "contains", "regular expressions" to URL, URL path and URL parameter</li>
<li>Optionally choose a sample rate</li>
<li>Optionally hide certain elements in the heatmap (for example a pop-up)</li>
<li>Optionally define on which URL a screenshot should be taken</li>
<li>Optionally define custom mobile and tablet breakpoints</li>
</ul><h3>Manage Session Recordings</h3>

<ul><li>Record unlimited sessions</li>
<li>Select how many page views you want to record</li>
<li>Optionally restrict on which pages a visitor should be recorded by using patterns like "starts with" based on URL, URL path and URL parameter</li>
<li>Optionally choose a sample rate</li>
<li>Optionally only record activities when a visitor spends at least a specific time on a page</li>
<li>Optionally only record activities when a user has clicked and scrolled at least once</li>
<li>Optionally define if keystrokes on text form fields should be captured or not</li>
<li>It will literally take you only a few seconds to create a new session recording</li>
</ul><h3>Privacy features</h3>

<ul><li>Anonymizing / Masking of personal or sensitive information that a user enters into a form field (keystrokes) to not record personal data</li>
<li>Possibility to record form fields in plain text except for form fields that may contain personal information</li>
<li>Lets you optionally mask any content within the website to avoid the recording of personal information.</li>
<li>Supports Matomo\'s <a href="https://matomo.org/docs/privacy/">privacy</a> and GDPR features like the right to erase data or the right to export data. GDPR stands for General Data Protection Regulation and is for example also known as RGPD in French, DS-GVO in German</li>
</ul><h3>Export and API features</h3>

<ul><li>HTTP API to manage your heatmaps and session recordings</li>
<li>HTTP API to fetch and export all <a href="https://developer.matomo.org/api-reference/reporting-api#HeatmapSessionRecording">Heatmap &amp; Session Recording reports</a></li>
<li>Get access to all the raw data via MySQL for 100% data ownership</li>
</ul><h3>More information</h3>

<p>To learn more about the plugin, have a look at the <a href="https://www.heatmap-analytics.com">Heatmap &amp; Session Recording website</a>, <a href="https://matomo.org/docs/heatmaps">Heatmap User Guide</a>, <a href="https://matomo.org/docs/session-recording/">Session Recording User Guide</a>, <a href="https://matomo.org/faq/heatmap-session-recording/">Heatmap &amp; Session Recording FAQ</a> and the <a href="https://developer.matomo.org/guides/heatmap-session-recording">developer documentation</a>.</p>',
              'faq' => '',
              'documentation' => '<p>The <a href="https://matomo.org/docs/heatmaps/">Heatmap User Guide</a>, <a href="https://matomo.org/docs/session-recording/">Session Recording User Guide</a> and the <a href="https://matomo.org/faq/heatmap-session-recording/">Heatmap &amp; Session Recording User FAQ</a> cover how to get the most out of this plugin. The <a href="https://developer.matomo.org/guides/heatmap-session-recording">Heatmap &amp; Session Recording developer guides</a> help you customizing the tracking of your heatmaps and session recordings.</p>',
              'changelog' => '',
            ),
            'download' => NULL,
          ),
        ),
        'isDownloadable' => false,
        'changelog' => 
        array (
          'url' => '',
        ),
        'consumer' => 
        array (
          'license' => NULL,
          'loginUrl' => 'https://shop.matomo.org/my-account',
        ),
      ),
      11 => 
      array (
        'name' => 'MultiChannelConversionAttribution',
        'displayName' => 'Multi Channel Conversion Attribution',
        'owner' => 'innocraft',
        'description' => 'Get a clear understanding of how much credit each of your marketing channel is actually responsible for to shift your marketing efforts wisely.',
        'homepage' => 'https://www.innocraft.com',
        'createdDateTime' => '2017-11-28 01:07:48',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'referrer',
          1 => 'traffic',
          2 => 'conversion',
          3 => 'Channels',
          4 => 'attribution',
          5 => 'models',
          6 => 'referer',
          7 => 'ads',
        ),
        'basePrice' => 75,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'InnoCraft',
            'email' => 'contact@innocraft.com',
            'homepage' => 'https://www.innocraft.com',
          ),
        ),
        'repositoryUrl' => NULL,
        'lastUpdated' => '2019-08-22 02:59:46',
        'latestVersion' => '3.0.6',
        'numDownloads' => NULL,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/MultiChannelConversionAttribution/images/3.0.6/0_Attribution_Report_1_Model.png',
          1 => 'https://plugins.matomo.org/MultiChannelConversionAttribution/images/3.0.6/1_Attribution_Report_2_Models.png',
          2 => 'https://plugins.matomo.org/MultiChannelConversionAttribution/images/3.0.6/2_Attribution_Report_3_Model.png',
          3 => 'https://plugins.matomo.org/MultiChannelConversionAttribution/images/3.0.6/3_Channel_Names.png',
          4 => 'https://plugins.matomo.org/MultiChannelConversionAttribution/images/3.0.6/4_Evolution.jpg',
        ),
        'previews' => 
        array (
          0 => 
          array (
            'type' => 'demo',
            'provider' => 'link',
            'url' => 'https://demo.matomo.org/index.php?module=CoreHome&action=index&idSite=62&period=day&date=yesterday#?idSite=62&period=day&date=yesterday&category=Goals_Goals&subcategory=MultiChannelConversionAttribution_MultiAttribution',
          ),
          1 => 
          array (
            'type' => 'video',
            'provider' => 'youtube',
            'url' => 'https://www.youtube-nocookie.com/embed/0_f_6sNQMSM',
          ),
        ),
        'activity' => 
        array (
          'numCommits' => NULL,
          'numContributors' => NULL,
          'lastCommitDate' => NULL,
        ),
        'featured' => false,
        'isFree' => false,
        'isPaid' => true,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => 
        array (
          'url' => 'https://plugins.matomo.org/MultiChannelConversionAttribution',
          'variations' => 
          array (
            0 => 
            array (
              'price' => '79',
              'prettyPrice' => '79EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/MultiChannelConversionAttribution?add-to-cart=s&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-multichannelconversionattribution/?attribute_type=Up+to+4+users&add-to-cart=6858&variation_id=6859&aelia_cs_currency=EUR',
            ),
            1 => 
            array (
              'price' => '89',
              'prettyPrice' => 'USD89',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/MultiChannelConversionAttribution?add-to-cart=s&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-multichannelconversionattribution/?attribute_type=Up+to+4+users&add-to-cart=6858&variation_id=6859&aelia_cs_currency=USD',
              'cheapest' => true,
              'recommended' => true,
            ),
            2 => 
            array (
              'price' => '149',
              'prettyPrice' => '149EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/MultiChannelConversionAttribution?add-to-cart=m&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-multichannelconversionattribution/?attribute_type=5+to+15+users&add-to-cart=6858&variation_id=6860&aelia_cs_currency=EUR',
            ),
            3 => 
            array (
              'price' => '179',
              'prettyPrice' => 'USD179',
              'currency' => 'USD',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/MultiChannelConversionAttribution?add-to-cart=m&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-multichannelconversionattribution/?attribute_type=5+to+15+users&add-to-cart=6858&variation_id=6860&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
            4 => 
            array (
              'price' => '229',
              'prettyPrice' => '229EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/MultiChannelConversionAttribution?add-to-cart=l&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-multichannelconversionattribution/?attribute_type=Unlimited+users&add-to-cart=6858&variation_id=6861&aelia_cs_currency=EUR',
            ),
            5 => 
            array (
              'price' => '269',
              'prettyPrice' => 'USD269',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/MultiChannelConversionAttribution?add-to-cart=l&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-multichannelconversionattribution/?attribute_type=Unlimited+users&add-to-cart=6858&variation_id=6861&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
          ),
          'reviews' => 
          array (
            'embedUrl' => 'https://shop.matomo.org/product/plugin-multichannelconversionattribution/?show_reviews=1&piwik_embed=1',
            'height' => 200,
            'averageRating' => NULL,
            'ratingCount' => 0,
            'reviewCount' => 0,
          ),
        ),
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.6',
            'release' => NULL,
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0-b1',
            ),
            'numDownloads' => NULL,
            'license' => 
            array (
              'name' => 'InnoCraft EULA',
              'url' => 'https://plugins.matomo.org/MultiChannelConversionAttribution/3.0.6/license',
            ),
            'repositoryChangelogUrl' => NULL,
            'readmeHtml' => 
            array (
              'description' => '

<p>Hi, this is Mike from <a href="https://www.innocraft.com">InnoCraft</a>, the company of the makers of Matomo Analytics which is used 
by over 1 million websites and apps in over 150 countries.</p>

<p>When you acquire visitors, one of the most challenging question is to know on which channels to spend your money
 and how much. One of the most important sources for this kind of information is to measure which channels or referrers
 are the most successful and lead the most to your goal conversions and Ecommerce sales compared to your spending.</p>

<p>The problem is that most analytics tools, including Matomo, only show you the channels for the last non-direct visits. However, in reality, multiple channels contribute to a conversion as a visitor often visits a website several times from different channels before they convert a goal. This means having only a look at the last visit doesn\'t give you an accurate representation of the most successful channels.</p>

<p>The Multi Channel Conversion Attribution gives you a better understanding of your media spending by letting you apply 
different attribution models to find out which channels really lead to a conversion or purchase. You can compare the 
different models next to each other and see how you need to shift your spending from one channel, ad, or campaign to another.</p>

<h3>Benefits</h3>

<ul><li>Identify valuable referrers that you did not see before</li>
<li>No longer falsely over-estimate any referrer or marketing channel</li>
<li>Make better decisions on how to shift your marketing spending to increase your profit</li>
<li>Gain more visitors by focussing on the channels that actually contribute the most to your conversions and revenue</li>
<li>Optimize your ad-spending and improve its efficiency</li>
<li>Better understand your visitors journey</li>
<li>Get a clearer view of the entire acquisition process from beginning to the end</li>
<li>100% data ownership</li>
</ul><h3>Our promise</h3>

<p><a href="https://shop.matomo.org/refund-policy/"><img src="https://shop.matomo.org/wp-content/uploads/2016/10/money_back-300x294.png" style="width:220px;float:right;margin-bottom:10px;" alt="Our promise to you" /></a>We are certain once you start using it, you will love getting a better understanding of your marketing spending and website content.</p>

<blockquote>
  <p>This is why we give you a <a href="https://shop.matomo.org/refund-policy/">100% unconditional, easy, fast, and hassle-free money back guarantee</a> for 30 days. There are no strings attached.</p>
</blockquote>

<p>So try it now and let us know how you go, we are always happy to help.</p>

<h3>About InnoCraft</h3>

<p>We, at <a href="https://www.innocraft.com">InnoCraft</a>, are the creators of Matomo and know it better than anyone else. This means all plugins are perfectly integrated into Matomo and come with outstanding features and quality to grow your business. We help our clients get started, configure, monitor and make the most of their Matomo analytics service. We also offer unique analytics products and services that help grow your business and meet the needs of small, medium and large businesses alike</p>

<h3>Features</h3>

<ul><li>Apply any of the following attribution models

<ul><li>Last Interaction</li>
<li>Last Non-Direct Interaction</li>
<li>First Interaction</li>
<li>Linear</li>
<li>Position Based</li>
<li>Time Decay</li>
</ul></li>
<li>Does not only show the channel category but also individual channel names (such as website URLs, search engines, campaign names, ...)</li>
<li>Select how many days prior to the conversion you want to include in the attribution</li>
<li>Compare the conversions and revenue between attribution models</li>
</ul><h3>Privacy features</h3>

<ul><li>The plugin doesn\'t track any additional data and therefore no personal or sensitive information is recorded. The reports are based on data that is tracked as part of the standard Matomo tracking.</li>
</ul><h3>Integrates with Matomo Analytics platform</h3>

<ul><li>View the evolution of any metric or row with the <a href="https://matomo.org/docs/row-evolution/">Row Evolution</a> feature</li>
<li>Lets you apply over 100 <a href="https://matomo.org/docs/segmentation/">Matomo segments</a> to your form reports</li>
<li>View the attribution report for an unlimited number of goals. <a href="https://matomo.org/docs/data-limits/">No data limit</a>.</li>
<li><a href="https://matomo.org/docs/embed-piwik-report/">Embed</a> the form attribution widget directly in your app, dashboard, or even TV screen!</li>
<li>HTTP API to fetch and export all <a href="https://developer.matomo.org/api-reference/reporting-api#MultiChannelConversionAttribution">Multi Channel Attribution reports</a></li>
<li>Get access to all the raw data via MySQL for 100% data ownership</li>
</ul><h3>More information</h3>

<p>To learn more about the plugin, have a look at the <a href="https://matomo.org/docs/multi-channel-conversion-attribution">Multi Attribution User Guide</a> and the <a href="https://matomo.org/faq/multi-channel-conversion-attribution">Multi Attribution FAQ</a>.</p>',
              'faq' => '',
              'documentation' => '<p>The <a href="https://matomo.org/docs/multi-channel-conversion-attribution/">Multi Channel Conversion Attribution User Guide</a> and the <a href="https://matomo.org/faq/multi-channel-conversion-attribution/">Multi Channel Conversion Attribution FAQ</a> cover how to get the most out of this plugin.</p>',
              'changelog' => '',
            ),
            'download' => NULL,
          ),
        ),
        'isDownloadable' => false,
        'changelog' => 
        array (
          'url' => '',
        ),
        'consumer' => 
        array (
          'license' => NULL,
          'loginUrl' => 'https://shop.matomo.org/my-account',
        ),
      ),
      12 => 
      array (
        'name' => 'WhiteLabel',
        'displayName' => 'White Label',
        'owner' => 'innocraft',
        'description' => 'Give your users and clients access to a more streamline analytics experience that is less confusing and lets your own branding shine.',
        'homepage' => 'https://plugins.matomo.org/WhiteLabel',
        'createdDateTime' => '2016-12-08 23:54:31',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'branding',
          1 => 'white label',
          2 => 'embedding reports',
          3 => 'customer access',
          4 => 'reselling',
        ),
        'basePrice' => 50,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'InnoCraft',
            'email' => 'contact@innocraft.com',
            'homepage' => 'https://www.innocraft.com',
          ),
        ),
        'repositoryUrl' => NULL,
        'lastUpdated' => '2019-08-20 22:35:59',
        'latestVersion' => '3.3.9',
        'numDownloads' => NULL,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => NULL,
          'numContributors' => NULL,
          'lastCommitDate' => NULL,
        ),
        'featured' => false,
        'isFree' => false,
        'isPaid' => true,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => 
        array (
          'url' => 'https://plugins.matomo.org/WhiteLabel',
          'variations' => 
          array (
            0 => 
            array (
              'price' => '49',
              'prettyPrice' => '49EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/WhiteLabel?add-to-cart=s&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/whitelabel/?attribute_type=Up+to+4+users&add-to-cart=2606&variation_id=2607&aelia_cs_currency=EUR',
            ),
            1 => 
            array (
              'price' => '59',
              'prettyPrice' => 'USD59',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/WhiteLabel?add-to-cart=s&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/whitelabel/?attribute_type=Up+to+4+users&add-to-cart=2606&variation_id=2607&aelia_cs_currency=USD',
              'cheapest' => true,
              'recommended' => true,
            ),
            2 => 
            array (
              'price' => '99',
              'prettyPrice' => '99EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/WhiteLabel?add-to-cart=m&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/whitelabel/?attribute_type=5+to+15+users&add-to-cart=2606&variation_id=2608&aelia_cs_currency=EUR',
            ),
            3 => 
            array (
              'price' => '119',
              'prettyPrice' => 'USD119',
              'currency' => 'USD',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/WhiteLabel?add-to-cart=m&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/whitelabel/?attribute_type=5+to+15+users&add-to-cart=2606&variation_id=2608&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
            4 => 
            array (
              'price' => '149',
              'prettyPrice' => '149EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/WhiteLabel?add-to-cart=l&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/whitelabel/?attribute_type=Unlimited+users&add-to-cart=2606&variation_id=2609&aelia_cs_currency=EUR',
            ),
            5 => 
            array (
              'price' => '179',
              'prettyPrice' => 'USD179',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/WhiteLabel?add-to-cart=l&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/whitelabel/?attribute_type=Unlimited+users&add-to-cart=2606&variation_id=2609&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
          ),
          'reviews' => 
          array (
            'embedUrl' => 'https://shop.matomo.org/product/whitelabel/?show_reviews=1&piwik_embed=1',
            'height' => 200,
            'averageRating' => '4.67',
            'ratingCount' => 3,
            'reviewCount' => 3,
          ),
        ),
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => 'SPECIAL OFFER! Get for FREE the Activity Log feature when you purchase this plugin (terms and conditions apply).',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.3.9',
            'release' => NULL,
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0-b1',
            ),
            'numDownloads' => NULL,
            'license' => 
            array (
              'name' => 'InnoCraft EULA',
              'url' => 'https://plugins.matomo.org/WhiteLabel/3.3.9/license',
            ),
            'repositoryChangelogUrl' => NULL,
            'readmeHtml' => 
            array (
              'description' => '

<p>The White Label plugin for Matomo offers a more streamline and less confusing experience to your clients by providing them a personalised, white labelled analytics dashboards and reports. White Label plugin will:</p>

<ul><li>boost the visibility of your own brand,</li>
<li>strengthen the loyalty of your clients and users,</li>
<li>change the Matomo header color to your own branding,</li>
<li>remove all the Matomo branded widgets from your users dashboards,</li>
<li>remove marketplace plugin teasers for example on the administration home page,</li>
<li>remove the help page which promotes Matomo,</li>
<li>remove several mentions of Matomo across the UI,</li>
<li>whitelabel the tracking endpoints (piwik.js and piwik.php),</li>
<li>optionally remove links that point to Matomo or Piwik,</li>
<li>and give you the possibility to change the product name from "Matomo" / "Piwik" to your chosen name.</li>
</ul><p>When you <a href="https://matomo.org/docs/embed-piwik-report/">embed custom dashboards</a> into your application and give your partners or customers access to their beautiful analytics reports, with this plugin you provide an even better and less confusing experience to your users.</p>

<p>Not only do you create a beautiful product experience for your users but you also give your company and product branding more opportunity to shine.</p>

<blockquote>
  <p>Ultimately with White Label you give back all of the power of Matomo Analytics to your users without the visible branding!</p>
</blockquote>

<p>Works for versions of Piwik and Matomo.</p>

<h3>Our promise</h3>

<p><a href="https://shop.matomo.org/refund-policy/"><img src="https://shop.matomo.org/wp-content/uploads/2016/10/money_back-300x294.png" style="width:220px;float:right;margin-bottom:10px;" alt="Our promise to you" /></a>We are convinced with White Label you will give your users and customers a better Matomo experience while making your brand shine more.</p>

<blockquote>
  <p>This is why we give you a <a href="https://shop.matomo.org/refund-policy/">100% unconditional, easy, fast, and hassle-free money back guarantee</a> for 30 days. There are no strings attached.</p>
</blockquote>

<p>So now that you know that you have nothing to lose, give White Label a try now and let us know how you go. We are always happy to help and interested in hearing your story.</p>

<h3>About InnoCraft</h3>

<p>We at <a href="https://www.innocraft.com">InnoCraft</a> are the creators of Matomo and know it better than anyone else. This means all plugins are perfectly integrated into Matomo and come with outstanding features and quality to grow your business. We help our clients get started, configure, monitor and make the most of their Matomo analytics service. We also offer unique analytics products and services that help grow your business and meet the needs of small, medium and large businesses alike.</p>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => NULL,
          ),
        ),
        'isDownloadable' => false,
        'changelog' => 
        array (
          'url' => '',
        ),
        'consumer' => 
        array (
          'license' => NULL,
          'loginUrl' => 'https://shop.matomo.org/my-account',
        ),
      ),
      13 => 
      array (
        'name' => 'AbTesting',
        'displayName' => 'A/B Testing',
        'owner' => 'innocraft',
        'description' => 'Increase revenue and conversions by comparing different versions of your websites or apps & detect the winning variation that will grow your business!',
        'homepage' => 'https://www.ab-tests.net',
        'createdDateTime' => '2016-10-25 21:08:10',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'Marketing',
          1 => 'a/b',
          2 => 'tests',
          3 => 'split',
          4 => 'abtests',
          5 => 'test',
          6 => 'experiments',
          7 => 'variation',
          8 => 'variant',
          9 => 'optimze',
          10 => 'improve',
          11 => 'cro',
        ),
        'basePrice' => 200,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'InnoCraft',
            'email' => 'contact@innocraft.com',
            'homepage' => 'https://www.innocraft.com',
          ),
        ),
        'repositoryUrl' => NULL,
        'lastUpdated' => '2019-08-16 04:42:57',
        'latestVersion' => '3.2.14',
        'numDownloads' => NULL,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/AbTesting/images/3.2.14/0_Report.png',
          1 => 'https://plugins.matomo.org/AbTesting/images/3.2.14/2_Manage_your_experiments_easily.png',
          2 => 'https://plugins.matomo.org/AbTesting/images/3.2.14/3_Configure_your_experiments.png',
          3 => 'https://plugins.matomo.org/AbTesting/images/3.2.14/4_Define_your_success_metrics.png',
        ),
        'previews' => 
        array (
          0 => 
          array (
            'type' => 'demo',
            'provider' => 'link',
            'url' => 'https://demo.matomo.org/index.php?module=CoreHome&action=index&idSite=62&period=day&date=yesterday#?idSite=62&period=day&date=yesterday&category=AbTesting_Experiments&subcategory=General_Overview',
          ),
          1 => 
          array (
            'type' => 'video',
            'provider' => 'youtube',
            'url' => 'https://www.youtube-nocookie.com/embed/jir37QyCctM',
          ),
        ),
        'activity' => 
        array (
          'numCommits' => NULL,
          'numContributors' => NULL,
          'lastCommitDate' => NULL,
        ),
        'featured' => false,
        'isFree' => false,
        'isPaid' => true,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => 
        array (
          'url' => 'https://plugins.matomo.org/AbTesting',
          'variations' => 
          array (
            0 => 
            array (
              'price' => '199',
              'prettyPrice' => '199EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/AbTesting?add-to-cart=s&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/abtesting/?attribute_type=Up+to+4+users&add-to-cart=2446&variation_id=2447&aelia_cs_currency=EUR',
            ),
            1 => 
            array (
              'price' => '229',
              'prettyPrice' => 'USD229',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/AbTesting?add-to-cart=s&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/abtesting/?attribute_type=Up+to+4+users&add-to-cart=2446&variation_id=2447&aelia_cs_currency=USD',
              'cheapest' => true,
              'recommended' => true,
            ),
            2 => 
            array (
              'price' => '399',
              'prettyPrice' => '399EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/AbTesting?add-to-cart=m&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/abtesting/?attribute_type=5+to+15+users&add-to-cart=2446&variation_id=2448&aelia_cs_currency=EUR',
            ),
            3 => 
            array (
              'price' => '459',
              'prettyPrice' => 'USD459',
              'currency' => 'USD',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/AbTesting?add-to-cart=m&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/abtesting/?attribute_type=5+to+15+users&add-to-cart=2446&variation_id=2448&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
            4 => 
            array (
              'price' => '599',
              'prettyPrice' => '599EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/AbTesting?add-to-cart=l&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/abtesting/?attribute_type=Unlimited+users&add-to-cart=2446&variation_id=2449&aelia_cs_currency=EUR',
            ),
            5 => 
            array (
              'price' => '689',
              'prettyPrice' => 'USD689',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/AbTesting?add-to-cart=l&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/abtesting/?attribute_type=Unlimited+users&add-to-cart=2446&variation_id=2449&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
          ),
          'reviews' => 
          array (
            'embedUrl' => 'https://shop.matomo.org/product/abtesting/?show_reviews=1&piwik_embed=1',
            'height' => 200,
            'averageRating' => '5.00',
            'ratingCount' => 3,
            'reviewCount' => 3,
          ),
        ),
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => 'SPECIAL OFFER! Get for FREE the Multi Channel Conversion Attribution feature when you purchase this plugin (terms and conditions apply).',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.2.14',
            'release' => NULL,
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b5,<4.0.0-b1',
            ),
            'numDownloads' => NULL,
            'license' => 
            array (
              'name' => 'InnoCraft EULA',
              'url' => 'https://plugins.matomo.org/AbTesting/3.2.14/license',
            ),
            'repositoryChangelogUrl' => NULL,
            'readmeHtml' => 
            array (
              'description' => '

<p>Hi, this is Tom from <a href="https://www.innocraft.com">InnoCraft</a>. The company of the makers of Matomo Analytics which is used by over 1 million websites and apps in over 150 countries.</p>

<p>For years we had those discussions within our team and with the bosses about which solution would convert better than another. Sometimes they would be on a Monday morning even before the first coffee or on a Friday afternoon just before the weekend: “Let’s go with a red color here”, “No, I’m sure blue will work much better” and a third person comes in “I’m sure a lighter blue color is better”.</p>

<blockquote>
  <p>Truth is, you never know what really works the best unless you test it.</p>
</blockquote>

<p>Have you had similar situations? Do you want to consistently increase your conversions and revenue? Then we have built just the right thing for you and we are sure it will end your discussions too and help you grow your business. When you create an A/B Test, you compare different wordings, looks, layouts or entirely different pages with each other and you get scientifically proven results which version works better. No longer any guessing when you build your app or website.</p>

<blockquote>
  <p>Take the guesswork out of your website optimization and reduce the risk in all your decision making.</p>
</blockquote>

<p>Unsurprisingly - <a href="https://www.ab-tests.net">A/B Testing</a> is one of the most requested feature for Matomo and since we built and started using it, it really made a difference and changed the way we work, think and make our decisions. Shall we use “Buy now” or “Subscribe now”? Which background or product image works better? Now we simply try different versions, test them and keep the best working solution that actually increases our conversions. We even review previously made decisions and we got some shocking results: we were sometimes very wrong about what converts best. Did you know that in some tests changing a button color from green to red increased clicks by over 20%? I’d be curious to hear about your remarkable changes once you start testing.</p>

<blockquote>
  <p>Start testing and improving everything from aesthetics like content and colors to back-end functionality. Even small changes can have a huge impact in your conversions and revenue.</p>
</blockquote>

<p>A/B Testing is built on top of Matomo which means you get all those benefits and features from Matomo on top. Like data ownership, no data limits, being able to host it yourself on premise and use it in the intranet etc. That’s why Matomo is so popular among businesses, corporations and governments. Matomo is used and trusted by over a million websites and apps.</p>

<h3>How it works</h3>

<p>When you have the <a href="https://www.ab-tests.net">A/B Testing plugin</a>, it lets you easily create experiments and compare different versions of your website or app and it will automatically detect which variation increases your revenue or conversions.</p>

<blockquote>
  <p>Experimenting and measuring the effect of each change you make with A/B testing gives you the confidence to always make changes which increase your revenue and conversions.</p>
</blockquote>

<p><img src="//www.ab-tests.net/innocraft/abcomparison.png" style="width:400px;float:right;margin-bottom:10px;margin-left:10px;margin-top:10px;" alt="abcomparison.png" />A/B tests are also known as experiments or split tests. In an A/B test you show two or more different variations to your 
users (visitors) and the variation that performs better wins. When a user enters the experiment, a variation will be 
randomly chosen and the user will see this variation for all subsequent visits. Matomo A/B testing uses 
advanced statistical analysis to detect which variation performs better for your conversion goals and success metrics.</p>

<blockquote>
  <p>Ultimately you can eliminate the guess work in your decision making and maximise your success!</p>
</blockquote>

<h3>Our promise</h3>

<p><a href="https://shop.matomo.org/refund-policy/"><img src="https://shop.matomo.org/wp-content/uploads/2016/10/money_back-300x294.png" style="width:220px;float:right;margin-bottom:10px;" alt="Our promise to you" /></a>A/B Testing is simple to use, even if you have never created an A/B test before. It is hand-crafted by the makers of Matomo with top quality and we are convinced once you start using it, you will never want to miss it again.</p>

<blockquote>
  <p>This is why we give you a <a href="https://shop.matomo.org/refund-policy/">100% unconditional, easy, fast, and hassle-free money back guarantee</a> for 30 days. There are no strings attached.</p>
</blockquote>

<p>We have had many delighted users that increased their revenue by more than the cost for this plugin with just one test. We have even had users that shared with us how they enjoy the moment when they tell their boss he or she was wrong because a test has proven his or her suggestion converts worse. So try it now and let us know how you do. We are happy to help you get started and to hear your story how it changes your life.</p>

<h3>About InnoCraft</h3>

<p>We at <a href="https://www.innocraft.com">InnoCraft</a> are the creators of Matomo and know it better than anyone else. This means all plugins are perfectly integrated into Matomo and come with outstanding features and quality to grow your business. We help our clients get started, configure, monitor and make the most of their Matomo analytics service. We also offer unique analytics products and services that help grow your business and meet the needs of small, medium and large businesses alike.</p>

<h3>Features</h3>

<ul><li>The user interface guides you through all stages from creating an experiment to interpreting the results.</li>
<li>Run an experiment in the browser or on a server using the JavaScript A/B testing framework.

<ul><li>All you need to do is to implement a method that defines what happens when a variation gets activated.</li>
<li>Possibility to test entirely different versions of your website by using redirects.</li>
</ul></li>
<li>Run an experiment on a server (PHP, C#, Python, Ruby, ...).</li>
<li>Run an experiment in applications, games and on mobile devices like Android or iOS in combination with pretty much any A/B testing framework.</li>
<li>Run an experiment to see how different search marketing campaigns, ad campaigns or email marketing campaigns influence the browsing behaviour on your website.</li>
<li>Force the activation of a specific variation via a URL parameter so you can test it easily and share the URL with colleagues when you need to get each variation approved before running a test.</li>
</ul><h3>Reporting features</h3>

<ul><li>Get an overview over all experiments in just one page.</li>
<li>Once an experiment is running:

<ul><li>Shows the description, hypothesis and goal of the experiment in the report of the experiment.</li>
<li>Shows an evolution of your success metrics for each variation.</li>
<li>Shows how the different variations compared between each other, for each of your success metrics.</li>
<li>Shows notifications for each success metric once a potential winner or loser is detected.</li>
<li>Makes sure the results are statistically significant and enough visitors or users have entered the experiment.</li>
</ul></li>
<li>Segment A/B testing reports by any existing Matomo segments.</li>
<li>Segment Matomo reports by experiments and variations.</li>
<li>Access raw data for advanced custom analysis</li>
</ul><h3>Manage A/B tests</h3>

<ul><li>Users with admin access can create unlimited A/B tests (experiments).</li>
<li>Assign as many variations to your experiment as you like.</li>
<li>Define success metrics like:

<ul><li>Goal conversions,</li>
<li>Goal revenue,</li>
<li>Ecommerce orders,</li>
<li>Ecommerce order revenue,</li>
<li>Total conversions,</li>
<li>Total revenue,</li>
<li>Page views,</li>
<li>Bounces,</li>
<li>Visit length (time).</li>
</ul></li>
<li>Define which improvement rate you expect from an experiment. </li>
<li>Define the Confidence Threshold you need to be statistically sure the change is not due to randomness.</li>
<li>Define on which pages an experiment should (or should not) be activated. </li>
<li>Define how much traffic the experiment should get in total.</li>
<li>Allocate a different amount of traffic to your variations.</li>
<li>Schedule your experiments to run from a start date and/or to finish on a given date.</li>
<li>Integrates with the <a href="https://plugins.matomo.org/ActivityLog">Activity log plugin</a> to let you monitor and audit changes to your A/B tests.</li>
</ul><h3>Export and API features</h3>

<ul><li>HTTP API to create, update, start and finish experiments.</li>
<li>HTTP API to fetch all A/B testing reports and metrics overall and for each variation.</li>
<li>Get access to all the raw data via MySQL for 100% data ownership.</li>
</ul><h3>More information</h3>

<p>To learn more about the plugin have a look at the <a href="https://www.ab-tests.net">A/B Testing website</a>, 
<a href="https://matomo.org/docs/ab-testing/">A/B Testing User Guide</a>, <a href="https://matomo.org/faq/ab-testing/">A/B Testing FAQ</a> and the <a href="https://developer.matomo.org/guides/ab-tests">developer documentation</a>.</p>',
              'faq' => '',
              'documentation' => '<p>The <a href="https://matomo.org/docs/ab-testing/">A/B Testing User Guide</a> and the <a href="https://matomo.org/faq/ab-testing/">A/B Testing FAQ</a> help you getting started in running A/B tests. 
The <a href="https://developer.matomo.org/guides/ab-tests">A/B Testing developer guides</a> help you embedding and implementing A/B tests into your project.</p>',
              'changelog' => '',
            ),
            'download' => NULL,
          ),
        ),
        'isDownloadable' => false,
        'changelog' => 
        array (
          'url' => '',
        ),
        'consumer' => 
        array (
          'license' => NULL,
          'loginUrl' => 'https://shop.matomo.org/my-account',
        ),
      ),
      14 => 
      array (
        'name' => 'MediaAnalytics',
        'displayName' => 'Media Analytics',
        'owner' => 'innocraft',
        'description' => 'Grow your business with advanced video & audio analytics. Get powerful insights into how your audience watches your videos and listens to your audio.',
        'homepage' => 'https://www.media-analytics.net',
        'createdDateTime' => '2016-10-25 21:07:56',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'Marketing',
          1 => 'conversion',
          2 => 'video',
          3 => 'audio',
          4 => 'media',
          5 => 'youtube',
          6 => 'vimeo',
          7 => 'html5',
          8 => 'analytics',
          9 => 'cro',
        ),
        'basePrice' => 150,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'InnoCraft',
            'email' => 'contact@innocraft.com',
            'homepage' => 'https://www.innocraft.com',
          ),
        ),
        'repositoryUrl' => NULL,
        'lastUpdated' => '2019-08-15 23:06:55',
        'latestVersion' => '3.4.4',
        'numDownloads' => NULL,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/MediaAnalytics/images/3.4.4/0_Media_Overview.png',
          1 => 'https://plugins.matomo.org/MediaAnalytics/images/3.4.4/1_Real-time_Reports.png',
          2 => 'https://plugins.matomo.org/MediaAnalytics/images/3.4.4/2_Real-time_Audience_Map.png',
          3 => 'https://plugins.matomo.org/MediaAnalytics/images/3.4.4/3_Audience_Log.png',
          4 => 'https://plugins.matomo.org/MediaAnalytics/images/3.4.4/4_Audience_Map.png',
          5 => 'https://plugins.matomo.org/MediaAnalytics/images/3.4.4/5_Media_Reports.png',
          6 => 'https://plugins.matomo.org/MediaAnalytics/images/3.4.4/6_Row_Evolution.png',
          7 => 'https://plugins.matomo.org/MediaAnalytics/images/3.4.4/7_Media_Details.png',
        ),
        'previews' => 
        array (
          0 => 
          array (
            'type' => 'demo',
            'provider' => 'link',
            'url' => 'https://demo.matomo.org/index.php?module=CoreHome&action=index&idSite=62&period=day&date=yesterday#?idSite=62&period=day&date=yesterday&category=MediaAnalytics_Media&subcategory=General_Overview',
          ),
          1 => 
          array (
            'type' => 'video',
            'provider' => 'youtube',
            'url' => 'https://www.youtube-nocookie.com/embed/q7SaiE3iBGA',
          ),
        ),
        'activity' => 
        array (
          'numCommits' => NULL,
          'numContributors' => NULL,
          'lastCommitDate' => NULL,
        ),
        'featured' => false,
        'isFree' => false,
        'isPaid' => true,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => 
        array (
          'url' => 'https://plugins.matomo.org/MediaAnalytics',
          'variations' => 
          array (
            0 => 
            array (
              'price' => '149',
              'prettyPrice' => '149EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/MediaAnalytics?add-to-cart=s&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/mediaanalytics/?attribute_type=Up+to+4+users&add-to-cart=2442&variation_id=2443&aelia_cs_currency=EUR',
            ),
            1 => 
            array (
              'price' => '179',
              'prettyPrice' => 'USD179',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/MediaAnalytics?add-to-cart=s&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/mediaanalytics/?attribute_type=Up+to+4+users&add-to-cart=2442&variation_id=2443&aelia_cs_currency=USD',
              'cheapest' => true,
              'recommended' => true,
            ),
            2 => 
            array (
              'price' => '299',
              'prettyPrice' => '299EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/MediaAnalytics?add-to-cart=m&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/mediaanalytics/?attribute_type=5+to+15+users&add-to-cart=2442&variation_id=2444&aelia_cs_currency=EUR',
            ),
            3 => 
            array (
              'price' => '349',
              'prettyPrice' => 'USD349',
              'currency' => 'USD',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/MediaAnalytics?add-to-cart=m&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/mediaanalytics/?attribute_type=5+to+15+users&add-to-cart=2442&variation_id=2444&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
            4 => 
            array (
              'price' => '449',
              'prettyPrice' => '449EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/MediaAnalytics?add-to-cart=l&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/mediaanalytics/?attribute_type=Unlimited+users&add-to-cart=2442&variation_id=2445&aelia_cs_currency=EUR',
            ),
            5 => 
            array (
              'price' => '519',
              'prettyPrice' => 'USD519',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/MediaAnalytics?add-to-cart=l&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/mediaanalytics/?attribute_type=Unlimited+users&add-to-cart=2442&variation_id=2445&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
          ),
          'reviews' => 
          array (
            'embedUrl' => 'https://shop.matomo.org/product/mediaanalytics/?show_reviews=1&piwik_embed=1',
            'height' => 200,
            'averageRating' => '4.80',
            'ratingCount' => 5,
            'reviewCount' => 5,
          ),
        ),
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => 'SPECIAL OFFER! Get for FREE the Multi Channel Conversion Attribution feature when you purchase this plugin (terms and conditions apply).',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.4.4',
            'release' => NULL,
            'requires' => 
            array (
              'piwik' => '>=3.0.0-rc3,<4.0.0-b1',
            ),
            'numDownloads' => NULL,
            'license' => 
            array (
              'name' => 'InnoCraft EULA',
              'url' => 'https://plugins.matomo.org/MediaAnalytics/3.4.4/license',
            ),
            'repositoryChangelogUrl' => NULL,
            'readmeHtml' => 
            array (
              'description' => '

<p>Hi, this is Tom from <a href="https://www.innocraft.com">InnoCraft</a>. The company of the makers of Matomo Analytics which is used by over 1 million websites and apps in over 150 countries.</p>

<p>Over the past years we have spent a fortune and lots of our time on producing video and audio content for our websites 
and apps. But are they being watched? For how long? By whom? From where are they watching it? How do they affect our 
conversion rates and sales? Is it better when we place that video somewhere else or replace it with another one? 
Would another video perform better? When we added subtitles, did it change something? How are our video marketing campaigns doing? Can we justify the cost and time for producing them? If you have similar questions and unknowns, then we have built just the right tool for you.</p>

<blockquote>
  <p><a href="https://www.media-analytics.net">Media Analytics</a> tracks your videos and audio and gives you ultimate insights into media usage and how that usage is connected to all your other metrics like conversions, sales, page views and more.</p>
</blockquote>

<p>We have put a lot of love in building Media Analytics and added so many advanced features it has really given us another view on our media content and we are sure it can do the same for you when you have it.</p>

<p>Media Analytics is super simple to install and works in most cases just like that out of the box. 
It is so well integrated into Matomo you will be surprised. It has all of those features like getting real time 
insights, filtering reports to a particular user segment, the audience log shows you every step your audience 
did and the audience map shows you from where your media is being watched either in real time or in the past.
On top there are so many other reports, widgets, APIs and more giving you all the information you need to know and you can 
share all of them with your colleagues and customers.</p>

<blockquote>
  <p>If you are spending money or time on your media like we do, we are sure it will give you plenty of insights and maybe change the way you think about your current media.</p>
</blockquote>

<h3>Benefits</h3>

<ul><li>Learn all about the performance of your videos &amp; audios to make better decisions for your business or organization.</li>
<li>Understand who has watched your media, how much of each media they have watched, which parts they have watched, and which medias are contributing the most value to your business or organization.</li>
<li>Discover which effect your media has on your overall traffic, revenue and conversions, and get a 360 degree view on your users.</li>
<li>Test different videos, audios, media players, ... and find out which ones are more successful.</li>
<li>Get answers to lots of questions like "Are my videos seen till the end?".</li>
<li>Share video and audio metrics with your colleagues and partners for greater transparency.</li>
<li>Get the pulse on your video and audio analytics and be able to make quick decisions with lots of real time media reports.</li>
<li>View individual viewers and how they watched and interacted with your videos and audios.</li>
<li>Gives you an overall media overview, but also detailed reports about how each media was watched.</li>
<li>Segment any Matomo report by your audience to gain new insights on different personas.</li>
<li>Simple to no <a href="https://developer.matomo.org/guides/media-analytics/setup">setup</a>.</li>
<li>Supports streams.</li>
<li>and many more!</li>
</ul><h3>Our promise</h3>

<p><a href="https://shop.matomo.org/refund-policy/"><img src="https://shop.matomo.org/wp-content/uploads/2016/10/money_back-300x294.png" style="width:220px;float:right;margin-bottom:10px;" alt="Our promise to you" /></a>Our Media Analytics is built on top of Matomo which means you get all those benefits and features from Matomo as well. Like data ownership, no data limits, being able to host it yourself on premise and use it in the intranet etc. That’s why Matomo is so popular among businesses, corporations and governments. Hand-crafted by the makers of Matomo, we are convinced once you start looking into your video &amp; audio insights, you will love it.</p>

<blockquote>
  <p>This is why we give you a <a href="https://shop.matomo.org/refund-policy/">100% unconditional, easy, fast, and hassle-free money back guarantee</a> for 30 days. There are no strings attached.</p>
</blockquote>

<p>So try it now and let us know how you do. We are happy to help you get started and to hear how it changes your view on your media.</p>

<h3>About InnoCraft</h3>

<p>We at <a href="https://www.innocraft.com">InnoCraft</a> are the creators of Matomo and know it better than anyone else. This means all plugins are perfectly integrated into Matomo and come with outstanding features and quality to grow your business. We help our clients get started, configure, monitor and make the most of their Matomo analytics service. We also offer unique analytics products and services that help grow your business and meet the needs of medium and large businesses alike.</p>

<h3>Reporting features</h3>

<p>Adds more than 15 new widgets and reports that all can be added to the dashboard or exported as widget. Some of the reports include:</p>

<ul><li>Media usage by media title.</li>
<li>Media usage by media resource URL and grouped resource URL.</li>
<li>Media usage by hour.</li>
<li>Video usage by video resolution.</li>
<li>Media usage by media player.</li>
<li>Drill down to get usage for any specific video or audio.</li>
<li>View a heatmap of which parts of a video or audio have been viewed.</li>
</ul><p>Some of the metrics displayed include</p>

<ul><li>Number of impressions (how often was a media shown but not played).</li>
<li>Number of plays (how often was a media actually played after it was shown).</li>
<li>Number of finishes (how often was a media finished).</li>
<li>Time spent watching or listening to a media.</li>
<li>Media duration / length.</li>
<li>Time to play (how long did visitors wait before they start playing a media).</li>
<li>Nunber of views in fullscreen.</li>
<li>And many more.</li>
</ul><p>Evolution graphs show how the media consumption on your website or app changes over time.</p>

<h3>Real-time features</h3>

<ul><li>View the <a href="https://matomo.org/docs/media-analytics/#audience-log">audience log</a> to learn how each individual visitor used your website before and after playing a media.</li>
<li>View the <a href="https://matomo.org/docs/media-analytics/#audience-map">audience map</a> to see at a glance where your visitors are from (lets you go down from continent to cities).</li>
</ul><h3>Segmenting features</h3>

<ul><li>Many new segments are provided. Segment your visitors by Media Title, Media URL, time spent playing media, the number of media plays and many more.</li>
<li>Combine these Media segments with any other Matomo segments to drill down and get deep insights into your audience.</li>
</ul><h3>Tracking features</h3>

<ul><li>Tracks events when you a user plays, pauses, resumes, seeks, or finishes a video and see at what position within the media they paused or resumed. They can be viewed in the <a href="https://matomo.org/docs/user-profile/">Visitor Log</a>.</li>
<li>Currently supports HTML5 Audio &amp; Video, SoundManager 2, JW Player (Flash and HTML5), Flowplayer, Video.js, MediaElement.js, SoundCloud, YouTube and Vimeo out of the box.</li>
<li>Possibility to track the usage of any player by defining a <a href="https://developer.matomo.org/guides/media-analytics/custom-player">custom player</a>.</li>
<li>Lets you exclude specific videos from being tracked.</li>
<li>Lets you optionally <a href="https://developer.matomo.org/guides/media-analytics/options">customize the tracked media title and resource URL</a>.</li>
<li>Works with multiple Matomo tracker instances</li>
<li>Small footprint. Only adds a very few kilobytes to your Matomo JavaScript tracker (<code>piwik.js</code>). </li>
</ul><h3>Privacy features</h3>

<ul><li>Supports Matomo\'s <a href="https://matomo.org/docs/privacy/">privacy</a> and GDPR features like the right to erase data or the right to export data. GDPR stands for General Data Protection Regulation and is for example also known as RGPD in French, DS-GVO in German</li>
<li>The plugin does not store personal data</li>
</ul><h3>Export &amp; API features</h3>

<ul><li>Get your Video and Audio analytics reports by <a href="https://matomo.org/docs/email-reports/">email</a> to you, your colleagues or customers. </li>
<li>Via the <a href="https://developer.matomo.org/api-reference/tracking-api">HTTP Tracking API</a>, media can be tracked on any platform or application (such as iOS or Android).</li>
<li>All reports including real time reports are available via the <a href="https://developer.matomo.org/api-reference/reporting-api#MediaAnalytics">Media Analytics HTTP Reporting API</a>, and support <a href="https://matomo.org/docs/segmentation/">Matomo segments</a>.</li>
<li>Export any video and audio analytics report directly in your app, dashboard, or even TV screen! Even your real time reports can be <a href="https://matomo.org/docs/embed-piwik-report/">embedded</a> anywhere. </li>
</ul><h3>Custom media players</h3>

<p>If you need help implementing Media Analytics for your custom media player please <a href="https://matomo.org/support">contact us</a>.
Alternatively we document how you can <a href="https://developer.matomo.org/guides/media-analytics/custom-player">track any custom media player</a>.</p>

<h3>Integrates with Matomo Analytics platform</h3>

<ul><li>See where your users are from: which countries, regions and cities are most interested in viewing your video content, or listening to your audio?</li>
<li>Create <a href="https://plugins.matomo.org/CustomAlerts">custom alerts</a> and be notified when specific videos become popular, or when your overall video usage changes.</li>
<li>Drill down deeper and filter viewers who have watched specific videos or audio content, who have spent more than N seconds watching videos, and much more, <a href="https://matomo.org/docs/segmentation/">with Segments</a>.</li>
<li>View the evolution over time of any of your video or audio, and for any of the media metrics with <a href="https://matomo.org/docs/row-evolution/">Row Evolution</a>.</li>
<li>View individual viewers and how they watched and interacted with your videos (in <a href="https://matomo.org/docs/real-time/">Real time!</a>) with the Audience log, the <a href="https://matomo.org/docs/user-profile/">User Profile</a> and the Visitor Log.</li>
<li>View your media analytics reports on the <a href="https://matomo.org/mobile/">Matomo Mobile App</a>.</li>
<li>Create Goals for specific videos or audio to measure in even more details how your viewers interact over time with a particular media.</li>
<li>Track unlimited number of videos, viewers, and interactions. <a href="https://matomo.org/docs/data-limits/">No data limit</a>.</li>
<li>Supports <a href="https://plugins.matomo.org/CustomReports">Custom Reports</a>.</li>
</ul><h3>More information</h3>

<p>To learn more about the plugin have a look at the <a href="https://www.media-analytics.net">Media Analytics website</a>, 
<a href="https://matomo.org/docs/media-analytics/">Media Analytics User Guide</a>, 
<a href="https://matomo.org/faq/media-analytics/">Media Analytics FAQ</a> and 
the <a href="https://developer.matomo.org/guides/media-analytics">Developer documentation</a>.</p>

<p>This plugin is built and maintained by the creators of Matomo.</p>',
              'faq' => '',
              'documentation' => '<p>The <a href="https://matomo.org/docs/media-analytics/">Media Analytics User Guide</a> and the <a href="https://matomo.org/faq/media-analytics/">Media Analytics FAQ</a> cover how to get the most out of this plugin. The <a href="https://developer.matomo.org/guides/media-analytics">Media Analytics developer guides</a> help you setting up  the tracking of your video and audio on your websites or apps.</p>',
              'changelog' => '',
            ),
            'download' => NULL,
          ),
        ),
        'isDownloadable' => false,
        'changelog' => 
        array (
          'url' => '',
        ),
        'consumer' => 
        array (
          'license' => NULL,
          'loginUrl' => 'https://shop.matomo.org/my-account',
        ),
      ),
      15 => 
      array (
        'name' => 'CustomDimensions',
        'displayName' => 'Custom Dimensions',
        'owner' => 'matomo-org',
        'description' => 'Extend Matomo to your needs by defining and tracking Custom Dimensions in scope Action or Visit',
        'homepage' => 'https://matomo.org',
        'createdDateTime' => '2015-11-25 03:26:03',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Wiki',
            'key' => 'wiki',
            'value' => 'https://github.com/matomo-org/plugin-CustomDimensions/wiki',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Forum',
            'key' => 'forum',
            'value' => 'https://forum.matomo.org',
            'type' => 'url',
          ),
          2 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/matomo-org/plugin-CustomDimensions/issues',
            'type' => 'url',
          ),
          3 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/matomo-org/plugin-CustomDimensions',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'custom dimensions',
          1 => 'track',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Matomo',
            'email' => 'hello@matomo.org',
            'homepage' => 'https://matomo.org',
          ),
        ),
        'repositoryUrl' => 'https://github.com/matomo-org/plugin-CustomDimensions',
        'lastUpdated' => '2019-08-13 08:54:05',
        'latestVersion' => '3.1.9',
        'numDownloads' => 41808,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/CustomDimensions/images/3.1.9/Action_Report.png',
          1 => 'https://plugins.matomo.org/CustomDimensions/images/3.1.9/Goal_Conversions.png',
          2 => 'https://plugins.matomo.org/CustomDimensions/images/3.1.9/Manage.png',
          3 => 'https://plugins.matomo.org/CustomDimensions/images/3.1.9/Visit_Report.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '277',
          'numContributors' => '6',
          'lastCommitDate' => '2019-08-29 02:56:20',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2016-09-13 22:00:05',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-dev,<4.0.0',
            ),
            'numDownloads' => 3132,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-CustomDimensions/commits/3.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/CustomDimensions/download/3.0.0',
          ),
          1 => 
          array (
            'name' => '3.0.1',
            'release' => '2017-04-03 22:00:07',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-dev,<4.0.0-b1',
            ),
            'numDownloads' => 1746,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-CustomDimensions/commits/3.0.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/CustomDimensions/download/3.0.1',
          ),
          2 => 
          array (
            'name' => '3.0.2',
            'release' => '2017-06-16 01:52:09',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-dev,<4.0.0-b1',
            ),
            'numDownloads' => 1580,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-CustomDimensions/commits/3.0.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/CustomDimensions/download/3.0.2',
          ),
          3 => 
          array (
            'name' => '3.1.0',
            'release' => '2017-09-05 16:36:05',
            'requires' => 
            array (
              'piwik' => '>=3.1.0-rc1,<4.0.0-b1',
            ),
            'numDownloads' => 1380,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-CustomDimensions/commits/3.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/CustomDimensions/download/3.1.0',
          ),
          4 => 
          array (
            'name' => '3.1.1',
            'release' => '2017-10-12 00:14:05',
            'requires' => 
            array (
              'piwik' => '>=3.2.0-b3,<4.0.0-b1',
            ),
            'numDownloads' => 1067,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-CustomDimensions/commits/3.1.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/CustomDimensions/download/3.1.1',
          ),
          5 => 
          array (
            'name' => '3.1.2',
            'release' => '2017-11-01 22:04:05',
            'requires' => 
            array (
              'piwik' => '>=3.2.0-b3,<4.0.0-b1',
            ),
            'numDownloads' => 5903,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-CustomDimensions/commits/3.1.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/CustomDimensions/download/3.1.2',
          ),
          6 => 
          array (
            'name' => '3.1.3',
            'release' => '2018-06-18 12:12:04',
            'requires' => 
            array (
              'piwik' => '>=3.2.0-b3,<4.0.0-b1',
            ),
            'numDownloads' => 7148,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-CustomDimensions/commits/3.1.3',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/CustomDimensions/download/3.1.3',
          ),
          7 => 
          array (
            'name' => '3.1.4',
            'release' => '2018-11-29 01:00:06',
            'requires' => 
            array (
              'piwik' => '>=3.6.0-b5,<4.0.0-b1',
            ),
            'numDownloads' => 300,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-CustomDimensions/commits/3.1.4',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/CustomDimensions/download/3.1.4',
          ),
          8 => 
          array (
            'name' => '3.1.5',
            'release' => '2018-12-03 18:38:05',
            'requires' => 
            array (
              'piwik' => '>=3.6.0-b5,<4.0.0-b1',
            ),
            'numDownloads' => 5645,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-CustomDimensions/commits/3.1.5',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/CustomDimensions/download/3.1.5',
          ),
          9 => 
          array (
            'name' => '3.1.6',
            'release' => '2019-01-28 19:48:06',
            'requires' => 
            array (
              'piwik' => '>=3.6.0-b5,<4.0.0-b1',
            ),
            'numDownloads' => 3047,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-CustomDimensions/commits/3.1.6.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/CustomDimensions/download/3.1.6',
          ),
          10 => 
          array (
            'name' => '3.1.7',
            'release' => '2019-04-28 21:10:05',
            'requires' => 
            array (
              'piwik' => '>=3.6.0-b5,<4.0.0-b1',
            ),
            'numDownloads' => 766,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/CustomDimensions/3.1.7/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-CustomDimensions/commits/3.1.7',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/CustomDimensions/download/3.1.7',
          ),
          11 => 
          array (
            'name' => '3.1.8',
            'release' => '2019-05-21 23:18:05',
            'requires' => 
            array (
              'piwik' => '>=3.6.0-b5,<4.0.0-b1',
            ),
            'numDownloads' => 2443,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/CustomDimensions/3.1.8/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-CustomDimensions/commits/3.1.8',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/CustomDimensions/download/3.1.8',
          ),
          12 => 
          array (
            'name' => '3.1.9',
            'release' => '2019-08-13 08:54:05',
            'requires' => 
            array (
              'piwik' => '>=3.10.0,<4.0.0-b1',
            ),
            'numDownloads' => 1437,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/CustomDimensions/3.1.9/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-CustomDimensions/commits/3.1.9',
            'readmeHtml' => 
            array (
              'description' => '

<p>This plugins allows you to configure and track any <a href="https://matomo.org/docs/custom-dimensions/">Custom Dimensions</a>. You can configure a Custom Dimension
by giving it a name and a scope (Action or Visit). Afterwards you will see a new menu item in the reporting area
for each configured dimension and be able to get its data. You can also export the report as a widget, segment by this
 dimenson, and more. For more information read the <a href="https://matomo.org/docs/custom-dimensions/">Custom Dimensions user guide</a> or have a look in the FAQ.</p>

<p><strong>Warning</strong>: Depending on the database size of your Matomo this plugin may take a long time to install.</p>',
              'faq' => '<p><strong>I have a large database, can I install the plugin on the command line?</strong></p>

<p>Yes, this is not only possible but even recommended as the installation may take hours. To do this follow these steps:</p>

<ul><li>Download the Plugin from <a href="https://plugins.piwik.org/CustomDimensions">https://plugins.piwik.org/CustomDimensions</a></li>
<li>Extract the files within the downloaded ZIP file</li>
<li>Copy the <code>CustomDimensions</code> directory into the <code>plugins</code> directory of your Matomo (Piwik)</li>
<li>Execute the command <code>./console plugin:activate CustomDimensions</code> within your Matomo directory</li>
</ul><p><strong>Where can I manage Custom Dimensions?</strong></p>

<p>Custom Dimensions can be managed by clicking on your username or user icon in the top right. There will be a menu
item "Custom Dimensions" within the "Manage" section of the left menu. By clicking on it you can manage Custom Dimensions.
Please note that the permission Admin is required in order to be able to manage them.</p>

<p><strong>Where can I find the Id for a Custom Dimension?</strong></p>

<p>You can find them by going to the "Manage Custom Dimensions" page in your personal area. For each dimension you will
find the Id in the table that lists all available Custom Dimensions.</p>

<p><strong>How do I set a value for a dimension in the JavaScript Tracker?</strong></p>

<p>Please have a look at the <a href="https://developer.piwik.org/guides/tracking-javascript-guide#custom-dimensions">JavaScript Tracker guide for Custom Dimensions</a>.</p>

<p><strong>How do I set a value for a dimension in the PHP Tracker?</strong></p>

<p><code>$tracker-&gt;setCustomTrackingParameter(\'dimension\' . $customDimensionId, $value);</code></p>

<p>Please note custom tracking parameters are cleared after each tracking request. If you want to keep the same
Custom Dimensions over all request make sure to call this method before each tracking call.</p>

<p><strong>I have configured all available Custom Dimension slots, can I add more?</strong></p>

<p>Yes, this is possible. To make a new Custom Dimension slot available execute the following command including the scope option:</p>

<pre><code>./console customdimensions:add-custom-dimension --scope=action
./console customdimensions:add-custom-dimension --scope=visit
</code></pre>

<p>Be aware that this can take a long time depending on the size of your database as it requires MySQL schema changes.
You can directly create multiple Custom Dimension slots. To do this add the option <code>--count=X</code>. Usually it doesn\'t take much
longer to create directly multiple new slots.</p>

<p><strong>Is it possible to delete a Custom Dimension and all of its data?</strong></p>

<p>In the UI it is only possible to deactivate a dimension. However, on the command line you can remove a Custom Dimension
and report it\'s log data by executing the following console command:</p>

<pre><code>./console customdimensions:remove-custom-dimension --scope=$scope --index=$index
</code></pre>

<p>Make sure to replace <code>$scope</code> and <code>$index</code> with the correct values. To get a list of all available indexes execute <code>./console customdimensions:info</code>.</p>

<p>Removing a Custom Dimension may take a long time as it requires MySQL schema changes. Currently, only log data is removed. Archived reports will be
not deleted currently.</p>',
              'documentation' => '',
              'changelog' => '<ul><li>3.1.9

<ul><li>Remove custom dimension configs for the correct scope </li>
<li>Improve speed of auto suggest for custom dimension for high traffic sites</li>
<li>Compability with <a href="https://matomo.org/docs/google-analytics-importer/">Google Analytics Importer</a></li>
</ul></li>
<li>3.1.8

<ul><li>Trim and truncate raw values from tracker</li>
</ul></li>
<li>3.1.7

<ul><li>Add primary key for better replication</li>
</ul></li>
<li>3.1.6

<ul><li>Fix custom dimensions in scheduled reports may be repeated</li>
</ul></li>
<li>3.1.5

<ul><li>Fix a permission check</li>
</ul></li>
<li>3.1.4

<ul><li>Fix flattened reports may define wrong segment selector</li>
<li>Internal changes</li>
</ul></li>
<li>3.1.1

<ul><li>Adds support for <a href="https://plugins.piwik.org/CustomReports">Custom Reports</a></li>
<li>Better sorting for auto suggestion in segments</li>
</ul></li>
<li>3.1.0

<ul><li>Makes plugin compatible with Piwik 3.1.0 (Adjustments to make custom dimensions visible in visitor log and profile)</li>
</ul></li>
<li>3.0.2

<ul><li>Make sure to unsanitize extraction patterns so HTML entities can be used</li>
</ul></li>
<li>3.0.1: 

<ul><li>Language updates</li>
<li>No longer show an empty entry as <code>Value not defined</code></li>
</ul></li>
<li>3.0.0: Compatibility with Piwik 3.0</li>
<li>0.1.5 

<ul><li>Fix some problems where a wrong whitespace might cause JavaScript errors and causes the UI to not work</li>
<li>Fix a typo in the UI in the JavaScript code which sets a custom dimension  </li>
</ul></li>
<li>0.1.4 Fix a possible JavaScript error if Transitions plugin is disabled</li>
<li>0.1.3 Fix UI of Custom Dimensions was not working properly when not using English as language</li>
<li>0.1.2

<ul><li>New feature: Mark an extraction as case sensitive</li>
<li>New feature : Show actions that had no value defined</li>
<li>New feature : Link to Page URLs in subtables</li>
</ul></li>
<li>0.1.1 Bugfixes</li>
<li>0.1.0 Initial release</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/CustomDimensions/download/3.1.9',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/CustomDimensions/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      16 => 
      array (
        'name' => 'WooCommerceAnalytics',
        'displayName' => 'WooCommerce Analytics',
        'owner' => 'innocraft',
        'description' => 'Drive more revenue, improve your sales funnel, and get accurate insights with our Matomo Analytics Ecommerce tracking integration for your WooCommerce',
        'homepage' => 'https://plugins.matomo.org/WooCommerceAnalytics',
        'createdDateTime' => '2017-06-26 08:01:33',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'piwik',
          1 => 'woocommerce',
          2 => 'wordpress',
          3 => 'shop',
          4 => 'ecommerce',
          5 => 'integration',
          6 => 'cart',
          7 => 'purchases',
          8 => 'order',
          9 => 'matomo',
        ),
        'basePrice' => 35,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'InnoCraft',
            'email' => 'contact@innocraft.com',
            'homepage' => 'https://www.innocraft.com',
          ),
        ),
        'repositoryUrl' => NULL,
        'lastUpdated' => '2019-08-08 02:38:26',
        'latestVersion' => '3.0.12',
        'numDownloads' => NULL,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/WooCommerceAnalytics/images/3.0.12/0_Integration.png',
          1 => 'https://plugins.matomo.org/WooCommerceAnalytics/images/3.0.12/1_EcommerceOverview.png',
          2 => 'https://plugins.matomo.org/WooCommerceAnalytics/images/3.0.12/2_EcommerceLog.png',
          3 => 'https://plugins.matomo.org/WooCommerceAnalytics/images/3.0.12/3_Products.png',
          4 => 'https://plugins.matomo.org/WooCommerceAnalytics/images/3.0.12/4_Sales.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => NULL,
          'numContributors' => NULL,
          'lastCommitDate' => NULL,
        ),
        'featured' => false,
        'isFree' => false,
        'isPaid' => true,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => 
        array (
          'url' => 'https://plugins.matomo.org/WooCommerceAnalytics',
          'variations' => 
          array (
            0 => 
            array (
              'price' => '39',
              'prettyPrice' => '39EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/WooCommerceAnalytics?add-to-cart=l&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-woocommerceanalytics/?attribute_type=Unlimited+users&add-to-cart=4332&variation_id=4333&aelia_cs_currency=EUR',
            ),
            1 => 
            array (
              'price' => '39',
              'prettyPrice' => 'USD39',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/WooCommerceAnalytics?add-to-cart=l&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-woocommerceanalytics/?attribute_type=Unlimited+users&add-to-cart=4332&variation_id=4333&aelia_cs_currency=USD',
              'cheapest' => true,
              'recommended' => false,
            ),
          ),
          'reviews' => 
          array (
            'embedUrl' => 'https://shop.matomo.org/product/plugin-woocommerceanalytics/?show_reviews=1&piwik_embed=1',
            'height' => 200,
            'averageRating' => '5.00',
            'ratingCount' => 1,
            'reviewCount' => 1,
          ),
        ),
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.12',
            'release' => NULL,
            'requires' => 
            array (
              'piwik' => '>=3.0.2-b4,<4.0.0-b1',
            ),
            'numDownloads' => NULL,
            'license' => 
            array (
              'name' => 'InnoCraft EULA',
              'url' => 'https://plugins.matomo.org/WooCommerceAnalytics/3.0.12/license',
            ),
            'repositoryChangelogUrl' => NULL,
            'readmeHtml' => 
            array (
              'description' => '

<p><img src="https://matomo.org/wp-content/uploads/2014/12/logo-woocommerce.png" style="width:260px;float:right;margin-bottom:10px;" alt="WooCommerce Analytics" />Turbocharge the integration between your WooCommerce store and your Matomo. Get detailed insights in your shop\'s eCommerce activites to drive more revenue and to improve your sales funnel:</p>

<ul><li>Find out which channels you should be spending more time and money on</li>
<li>Discover where you are losing potential money</li>
<li>Maximize your shop\'s profitability</li>
<li>Learn which products your customers are actually interested in and what they are looking for</li>
<li>Make data-driven decisions that make you more successful with ease</li>
<li>Get the insights you want faster and easily keep on top of your business performance</li>
</ul><p>Our official Matomo WooCommerce integration will track all your WooCommerce orders and cart updates. Using WooCommerce ourselves, we have worked on a solution that tracks Ecommerce purchases and cart updates very accurately:</p>

<ul><li>Tracks even when ad-blockers are enabled. </li>
<li>Compatible with most WooCommerce plugins (eg up-selling plugins).</li>
<li>Makes sure to only track cart updates when there are actually changes to the cart so you get more insights into abandoned carts and can actually identify why users did not complete the order. </li>
<li>Tracks only orders that actually complete and ignores for example failed orders (if the status changes later, the plugin will recognize this and correctly track it)</li>
<li>Fully compatible with <a href="https://wordpress.org/plugins/wp-piwik/">WP-Piwik/WP-Matomo</a> (recommended) or use WooCommerce Analytics on its own to get your Ecommerce Analytics</li>
</ul><p>Compared to other Piwik/Matomo-WooCommerce integrations, this plugin works 100%.</p>

<h3>Powerful Ecommerce Analytics</h3>

<p><img src="/WooCommerceAnalytics/images/3.0.0/1_EcommerceOverview.png?w=1024" style="width:420px;float:right;margin-bottom:10px;" alt="WooCommerce Analytics with Matomo" /></p>

<p>When you install and configure the WordPress plugin, you will get detailed <a href="https://matomo.org/docs/ecommerce-analytics/">Ecommerce reports and metrics</a>:</p>

<ul><li>Ecommerce activity overview</li>
<li>Best products &amp; best categories</li>
<li>Ecommerce activity log</li>
<li>Sales by marketing channel</li>
<li>Sales by country, city, region</li>
<li>Purchased products historical performance by name, SKU or product category</li>
<li>Ecommerce metrics included in standard reports: Total revenue, Orders, Average conversion rate, Average cart revenue, Purchased products, Revenue per visit.</li>
<li>Product metrics: Product revenue, Quantity, Unique Purchases, Visits, Average Price, Average Quantity, Product conversion rate.</li>
</ul><p>To learn more about the plugin have a look at the <a href="#faq">FAQ</a> and the <a href="https://matomo.org/docs/ecommerce-analytics/">Ecommerce User Guide</a>.</p>

<h3>Our Promise</h3>

<p><a href="https://shop.matomo.org/refund-policy/"><img src="https://shop.matomo.org/wp-content/uploads/2016/10/money_back-300x294.png" style="width:220px;float:right;margin-bottom:10px;" alt="Our promise to you" /></a>Hand-crafted by the makers of Matomo with top quality it is our mission to make you happy.</p>

<blockquote>
  <p>This is why we give you a <a href="https://shop.matomo.org/refund-policy/">100% unconditional, easy, fast, and hassle-free money back guarantee</a> for 30 days. There are no strings attached.</p>
</blockquote>

<p>So start taking advantage of Matomo\'s advanced ecommerce features now and let us know how you do. We are happy to help you get started.</p>

<h3>About InnoCraft</h3>

<p>We at <a href="https://www.innocraft.com">InnoCraft</a> are the creators of Matomo and know it better than anyone else. This means all plugins are perfectly integrated into Matomo and come with outstanding features and quality to grow your business. We help our clients get started, configure, monitor and make the most of their Matomo analytics service. We also offer unique analytics products and services that help grow your business and meet the needs of medium and large businesses alike.</p>

<h3>Features</h3>

<ul><li>Tracks orders and cart updates even when ad-blocker is enabled</li>
<li>Find out where your users really abandon your cart</li>
<li>Supports product variables / variations</li>
<li>Supports WooCommerce Subscriptions</li>
<li>Supports custom order numbers</li>
<li>Supports WPML</li>
<li>Works with most other WooCommerce plugins that provide for example up-selling and cross-selling features</li>
<li>Learn which channels (search, social, websites, ...) drives the most traffic to know on which channel you should spend more time and money</li>
<li>Understand which products and categories your customers are really interested in</li>
<li>Find out where you are losing money by analyzing the flow of users from the referrer to the product page, to cart, and to checkout</li>
<li>Figure out how your Ecommerce activities perform over time</li>
<li>Explore which devices your customers use the most, where they come from (down to cities), how long it took them to purchase, and much more. </li>
</ul><p>This plugin is built and maintained by the creators of Matomo.</p>',
              'faq' => '<p><strong>Which WooCommerce versions are supported?</strong></p>

<p>WooCommerce 2 and WooCommerce 3 are supported.</p>

<p><strong>Which WordPress versions are supported?</strong></p>

<p>The plugin has been tested with WordPress 4.5 and higher. It also supports WordPress 5.X.</p>

<p><strong>Does the plugin support product variations / variables?</strong></p>

<p>Yes, product variations are supported.</p>

<p><strong>Does the plugin support WooCommerce Subscriptions?</strong></p>

<p>Yes, the WooCommerce Subscription plugin is supported and renewals are tracked as well.</p>

<p><strong>How is this plugin different to other WooCommerce Matomo / Piwik plugins?</strong></p>

<p>Other plugins don\'t really work at all, and if they work they don\'t track the data correctly.</p>

<p>As we are using WooCommerce ourselves on the matomo.org Marketplace we can ensure it works very well, is stable and it doesn\'t have any known security issues.</p>

<p>This plugin tracks the data in a special way to ensure very accurate tracking of cart updates and orders that you won\'t get anywhere else. This allows you for example to much better find out where your users abandon your cart. As the creators of Matomo, we can also ensure that the data is tracked correctly.</p>

<p>Another benefit of our solution is, that it tracks orders and cart updates even if a user is using an ad-blocker. In this case you might not see any page views, but still be able to analyze all ecommerce related information.</p>

<p><strong>Do I still need a plugin to track regular page views, events, etc?</strong></p>

<p>Yes, you will still need a plugin do track regular pageviews, outlinks, downloads and more. We recommend to use our WooCommerce plugin in combination with <a href="https://wordpress.org/plugins/wp-piwik/">WP-Matomo/WP-Piwik</a>.</p>

<p><strong>How do I install and update the plugin on WooCommerce?</strong></p>

<p>Once you have installed this plugin on your Matomo, go to "Administration" and then "WooCommerce" in Matomo. There you will find straight forward installation instructions and the download of the WooCommerce plugin.</p>

<p>You will be able to update the WooCommerce plugin with just one click.</p>

<p><strong>Are there any known issues?</strong></p>

<p>It currently may create once a new visitor as soon as a cart is updated. If this is the case, all following pageviews and actions will be tracked into the newly created visitor. This happens only when for example a user visited your shop in the past, deletes all the cookies and then visits your shop again. It may also happen when opening the website in an "Igncognito window" in your browser. We will be solving this issue in Matomo itself.</p>

<p><strong>Are there any other requirements?</strong></p>

<p>The WooCommerce server needs to be able to ping (via HTTP/S) your Matomo installation in order to track orders and cart updates.</p>

<p>If you don\'t know what that means, you very likely don\'t need to worry about it and it will just work.</p>

<p><strong>Where do I find the logs of the WooCommerce plugin?</strong></p>

<p>If you enable the logging of all tracking requests to a file, you will find the logs under <code>wp-content/uploads/wc-logs/woo-piwik-tracking-yyyy-dd-mm-*.log</code>.</p>',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => NULL,
          ),
        ),
        'isDownloadable' => false,
        'changelog' => 
        array (
          'url' => '',
        ),
        'consumer' => 
        array (
          'license' => NULL,
          'loginUrl' => 'https://shop.matomo.org/my-account',
        ),
      ),
      17 => 
      array (
        'name' => 'Counter',
        'displayName' => 'Counter',
        'owner' => 'Globulopolis',
        'description' => 'Display Hits/Visits on image. Display Hits/Visits/from Countries stats as text via ajax requests.',
        'homepage' => 'http://xn--80aeqbhthr9b.com/en/others/piwik/10-piwik-graphical-counter.html',
        'createdDateTime' => '2014-01-29 15:50:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'piwik',
          1 => 'counter image',
          2 => 'image counter',
          3 => 'piwik visible counter',
          4 => 'show hits piwik',
          5 => 'show visits piwik',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Viper',
            'email' => NULL,
            'homepage' => NULL,
          ),
        ),
        'repositoryUrl' => 'https://github.com/Globulopolis/Counter',
        'lastUpdated' => '2019-07-30 19:56:04',
        'latestVersion' => '2.1.3',
        'numDownloads' => 20645,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '18',
          'numContributors' => '1',
          'lastCommitDate' => '2019-07-30 20:00:24',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '2.1.0',
            'release' => '2017-01-14 10:12:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0',
              'php' => '>=5.3.0',
            ),
            'numDownloads' => 310,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Globulopolis/Counter/commits/2.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/Counter/download/2.1.0',
          ),
          1 => 
          array (
            'name' => '2.1.1',
            'release' => '2017-01-24 09:28:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0',
              'php' => '>=5.3.0',
            ),
            'numDownloads' => 5912,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Globulopolis/Counter/commits/2.1.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/Counter/download/2.1.1',
          ),
          2 => 
          array (
            'name' => '2.1.2',
            'release' => '2019-07-30 19:40:03',
            'requires' => 
            array (
              'piwik' => '>=3.11.0',
              'php' => '>=5.3.0',
            ),
            'numDownloads' => 1,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Globulopolis/Counter/commits/2.1.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/Counter/download/2.1.2',
          ),
          3 => 
          array (
            'name' => '2.1.3',
            'release' => '2019-07-30 19:56:04',
            'requires' => 
            array (
              'piwik' => '>=3.11.0',
              'php' => '>=5.3.0',
            ),
            'numDownloads' => 536,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Globulopolis/Counter/commits/2.1.3',
            'readmeHtml' => 
            array (
              'description' => '

<p>Display Hits/Visits on image. Display Hits/Visits/from Countries stats as text via ajax requests.</p>

',
              'faq' => '<p>See http://xn--80aeqbhthr9b.com/en/others/piwik/10-piwik-graphical-counter.html</p>',
              'documentation' => '',
              'changelog' => '<p>2.1.3
* Minor fixes.</p>

<p>2.1.2
* Implement internal basic caching mechanism.
* Minor fixes.</p>

<p>2.1.1
* Add form token for some actions: publish/unpublish, save/apply, remove, clearCache.
* Remove publish/unpublish, save/apply, remove from API.
* Remove X-Powered-By header from image responce.
* Minor fixes.</p>

<p>2.1.0
* New plugin version for Piwik 3.</p>

<p>2.0.15
* Increase version number(wrong tagging).</p>

<p>2.0.14
* Fix code style.
* Code clean up.</p>

<p>2.0.13
* Remove initial value checks for visits.
* Fix extra space in counter code.
* Fix missing columns in UPDATE query on save()
* New option to format numbers into human readable format.</p>

<p>2.0.12
* Fixed error with access rights.</p>

<p>2.0.11
* User can now add initial values to numbers of visits/views.
* New template support Piwik 2.14. Non B/C.</p>

<p>2.0.10
* Fix for https://github.com/Globulopolis/Counter/issues/7
* Add "require" into plugin.json because new menu required at least Piwik 2.4.0
* Fixed icon in "Check for updates" modal.</p>

<p>2.0.9
* Fix for https://github.com/Globulopolis/Counter/issues/5</p>

<p>2.0.8
* Fix for https://github.com/Globulopolis/Counter/issues/4#issuecomment-59620132</p>

<p>2.0.7
* Add \'yesterday\' option for "Start date - period".</p>

<p>2.0.6
* Fixed an error when user select image with type different from png or gif. Now plugin support jpg image type.
* Update colorpicker to latest.</p>

<p>2.0.5
* Fixed a bug w/ undefined variable \'userMenu\' in \'@CoreHome/_topBarTopMenu.twig\' on new Piwik 2.4.0</p>

<p>2.0.4
* Added custom offsets for visits/views/countries for \'visitors by countries\' template.</p>

<p>2.0.3
* Added custom template for \'visitors by countries\'. NB! \'Live visitors counter\' works only if custom template field for \'Visitors by countries\' is empty.
* Fixed an error w/ undefined method Access::isSuperUser
* Fix for double slash in ajax url
* Added workaround for getallheaders() method if PHP running as CGI.
* Remove PIWIK_ENABLE_DISPATCH due to triggering an error while generating counter image.</p>

<p>2.0.2
* Fixed a bug where the URL with the image displayed via http, if you are using https(bug only in counters list).</p>

<p>2.0.1
* Fix for CORS (thanks for aureq for patch)
* Changing versioning according to requirements</p>

<p>2.0 Initial release</p>',
            ),
            'download' => '/api/2.0/plugins/Counter/download/2.1.3',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/Counter/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      18 => 
      array (
        'name' => 'ClassicCounter',
        'displayName' => 'Classic Counter',
        'owner' => 'Findus23',
        'description' => 'Embed a view counter in the style of classic CGI scripts into your website',
        'homepage' => 'https://lw1.at',
        'createdDateTime' => '2019-03-11 09:54:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Forum',
            'key' => 'forum',
            'value' => 'https://forum.matomo.org',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'lukas@matomo.org',
            'type' => 'email',
          ),
          2 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/Findus23/plugin-ClassicCounter/issues',
            'type' => 'url',
          ),
          3 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/Findus23/plugin-ClassicCounter',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'nostalgia',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Lukas Winkler',
            'email' => 'lukas@matomo.org',
            'homepage' => 'https://lw1.at',
          ),
        ),
        'repositoryUrl' => 'https://github.com/Findus23/plugin-ClassicCounter',
        'lastUpdated' => '2019-07-29 18:54:03',
        'latestVersion' => '0.2.2',
        'numDownloads' => 907,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/ClassicCounter/images/0.2.2/4909.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '8',
          'numContributors' => '1',
          'lastCommitDate' => '2019-07-29 18:52:51',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '0.1.0',
            'release' => '2019-03-11 09:54:04',
            'requires' => 
            array (
              'piwik' => '>=3.8.0,<4.0.0-b1',
            ),
            'numDownloads' => 628,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Findus23/plugin-ClassicCounter/commits/0.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/ClassicCounter/download/0.1.0',
          ),
          1 => 
          array (
            'name' => '0.2.2',
            'release' => '2019-07-29 18:54:03',
            'requires' => 
            array (
              'piwik' => '>=3.8.0,<4.0.0-b1',
            ),
            'numDownloads' => 279,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/ClassicCounter/0.2.2/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Findus23/plugin-ClassicCounter/commits/0.2.2',
            'readmeHtml' => 
            array (
              'description' => '

<p>No website is complete without a nostalgic view counter at the bottom!</p>

<p>This plugin allows you to add an image showing the total amount of visits per <code>idSite</code>.</p>

<p><strong>Important: Installing this plugin makes the output of the <code>VisitsSummary.get</code> API endpoint visible for everyone!</strong></p>

<pre><code>&lt;img src="https://yourmatomoinstance.example/index.php?module=ClassicCounter&amp;action=svg&amp;idSite=1&amp;period=day"&gt;
</code></pre>

<h3>Optional parameters:</h3>

<ul><li><code>&amp;mode=</code> one of <code>["nb_visits", "nb_actions", "nb_visits_converted", "bounce_count", "sum_visit_length", "max_actions", "bounce_rate", "nb_actions_per_visit", "avg_time_on_site"]</code> (responses from the <code>VisitsSummary.get</code> API)</li>
<li><code>backgroundColor</code>: A hex color without the <code>#</code> (e.g. <code>f00</code> or <code>fe1234</code>)</li>
<li><code>foregroundColor</code></li>
<li><code>lightColor</code></li>
</ul><p><img src="./screenshots/4909.png" alt="4909.png" /></p>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<h3>0.2.2</h3>

<p>another bugfix (increase version in plugin.json)</p>

<h3>0.2.1</h3>

<p>quick bugfix (task)</p>

<h3>0.2.0</h3>

<p>add support for changing colors and and more API responses</p>

<h3>0.1.0</h3>

<p>first version</p>',
            ),
            'download' => '/api/2.0/plugins/ClassicCounter/download/0.2.2',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/ClassicCounter/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      19 => 
      array (
        'name' => 'UsersFlow',
        'displayName' => 'Users Flow',
        'owner' => 'innocraft',
        'description' => 'Users Flow is a visual representation of the most popular paths your users take through your website & app which lets you understand your users needs',
        'homepage' => 'https://plugins.matomo.org/UsersFlow',
        'createdDateTime' => '2016-12-13 02:33:57',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'users',
          1 => 'Marketing',
          2 => 'optimization',
          3 => 'path',
          4 => 'conversion',
          5 => 'goal',
          6 => 'cro',
          7 => 'visitors',
          8 => 'flow',
          9 => 'sales',
          10 => 'click',
          11 => 'interaction',
        ),
        'basePrice' => 75,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'InnoCraft',
            'email' => 'contact@innocraft.com',
            'homepage' => 'https://www.innocraft.com',
          ),
        ),
        'repositoryUrl' => NULL,
        'lastUpdated' => '2019-07-23 02:43:58',
        'latestVersion' => '3.1.10',
        'numDownloads' => NULL,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/UsersFlow/images/3.1.10/1_Visualization.png',
          1 => 'https://plugins.matomo.org/UsersFlow/images/3.1.10/2_Interaction_Menu.png',
          2 => 'https://plugins.matomo.org/UsersFlow/images/3.1.10/3_Interaction_Details.png',
          3 => 'https://plugins.matomo.org/UsersFlow/images/3.1.10/4_Top_Paths.png',
          4 => 'https://plugins.matomo.org/UsersFlow/images/3.1.10/5_Overview.png',
          5 => 'https://plugins.matomo.org/UsersFlow/images/3.1.10/6_Page_Titles.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => NULL,
          'numContributors' => NULL,
          'lastCommitDate' => NULL,
        ),
        'featured' => false,
        'isFree' => false,
        'isPaid' => true,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => 
        array (
          'url' => 'https://plugins.matomo.org/UsersFlow',
          'variations' => 
          array (
            0 => 
            array (
              'price' => '79',
              'prettyPrice' => '79EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/UsersFlow?add-to-cart=s&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/usersflow/?attribute_type=Up+to+4+users&add-to-cart=2633&variation_id=2634&aelia_cs_currency=EUR',
            ),
            1 => 
            array (
              'price' => '89',
              'prettyPrice' => 'USD89',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/UsersFlow?add-to-cart=s&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/usersflow/?attribute_type=Up+to+4+users&add-to-cart=2633&variation_id=2634&aelia_cs_currency=USD',
              'cheapest' => true,
              'recommended' => true,
            ),
            2 => 
            array (
              'price' => '149',
              'prettyPrice' => '149EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/UsersFlow?add-to-cart=m&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/usersflow/?attribute_type=5+to+15+users&add-to-cart=2633&variation_id=2635&aelia_cs_currency=EUR',
            ),
            3 => 
            array (
              'price' => '179',
              'prettyPrice' => 'USD179',
              'currency' => 'USD',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/UsersFlow?add-to-cart=m&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/usersflow/?attribute_type=5+to+15+users&add-to-cart=2633&variation_id=2635&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
            4 => 
            array (
              'price' => '229',
              'prettyPrice' => '229EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/UsersFlow?add-to-cart=l&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/usersflow/?attribute_type=Unlimited+users&add-to-cart=2633&variation_id=2636&aelia_cs_currency=EUR',
            ),
            5 => 
            array (
              'price' => '269',
              'prettyPrice' => 'USD269',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/UsersFlow?add-to-cart=l&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/usersflow/?attribute_type=Unlimited+users&add-to-cart=2633&variation_id=2636&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
          ),
          'reviews' => 
          array (
            'embedUrl' => 'https://shop.matomo.org/product/usersflow/?show_reviews=1&piwik_embed=1',
            'height' => 200,
            'averageRating' => '4.33',
            'ratingCount' => 3,
            'reviewCount' => 3,
          ),
        ),
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => 'SPECIAL OFFER! Get for FREE the Multi Channel Conversion Attribution feature when you purchase this plugin (terms and conditions apply).',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.1.10',
            'release' => NULL,
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b5,<4.0.0-b1',
            ),
            'numDownloads' => NULL,
            'license' => 
            array (
              'name' => 'InnoCraft EULA',
              'url' => 'https://plugins.matomo.org/UsersFlow/3.1.10/license',
            ),
            'repositoryChangelogUrl' => NULL,
            'readmeHtml' => 
            array (
              'description' => '

<p>Hi, this is Tom from <a href="https://www.innocraft.com">InnoCraft</a>. The company of the makers of Matomo Analytics which is used by over 1 million websites and apps in over 150 countries.</p>

<p><a href="#preview"><img src="https://www.innocraft.com/innocraft/usersFlow.png" style="width:320px;float:right;margin-top:10px;margin-bottom:5px;" alt="usersFlow.png" /></a>Do you know how your visitors navigate through your website or app? Do you understand your users needs? Do you know what they are trying to accomplish and what is important to them? Do you know how to improve your user flow? Well, we thought we did, but it turned out we didn\'t until
we actually were able to visualize those paths over several steps in an easy to understand graph. We were really surprised by some paths our users took every day. We discovered new popular pages where we totally under-estimated the importance of them, 
we found that many users actually had a problem on our home page so they had to reload it and we improved some popular 
paths we didn\'t expect users were going. Now these paths are much more straight-forward for our users.</p>

<blockquote>
  <p>The Users Flow visualization is a representation of the most popular paths your users took through your website or app. At a glance, you see how your users navigate through your website over several steps, where they exit and it lets you dig into this data by exploring all traffic that went through a certain page and more. Users Flow also provides some additional reports to get the information you need even quicker, for example with the Top Paths report showing you all the most popular paths in a simple to read table.</p>
</blockquote>

<p><strong>Multiplying the value of Users Flow with segments</strong> We looked very carefully into how different kind of visitors use our websites, especially visitors that enter our website for the first time, by applying segments. This allowed us, and it will allow you as well, to engineer the process that each potential customer or visitor goes through and optimize it to improve your conversion rates and revenue. Being able to filter the Users Flow reports to a particular user segment is so valuable for us (for example filtering by the visitors that converted a specific goal) and we are still fascinated how the flow evolves when we make changes to our website based on the Users Flow reports.</p>

<blockquote>
  <p>When you send traffic to your website, you need to know the first page your potential customers will hit, and the second page they hit and where they exit.</p>
</blockquote>

<h3>Benefits</h3>

<ul><li>Understand a customers path to conversion or purchase.</li>
<li>Learn all about your users needs, what they are trying to accomplish, and what is important to them</li>
<li>Apply segments to see for example the paths your users took when they converted a goal, or when they didn\'t. See how users navigate through your website for different referrers and more.</li>
<li>See if your call to actions work and whether users are actually following the path you had in mind. You may discover users 
are taking different paths which can indicate that visitors are not finding what they want.</li>
<li>Investigate whether a redesigned page might confuse your visitors or changes the path your visitors take.</li>
<li>Discover high drop-offs on pages.</li>
<li>Find bugs on your website by exploring unexpected high exits and unexpected paths. </li>
</ul><h3>Our promise</h3>

<p><a href="https://shop.matomo.org/refund-policy/"><img src="https://shop.matomo.org/wp-content/uploads/2016/10/money_back-300x294.png" style="width:220px;float:right;margin-bottom:10px;" alt="Our promise to you" /></a>Users Flow is built on top of Matomo which means you get all those benefits and features from Matomo on top. Like data ownership, no data limits, being able to host it yourself on premise and use it in the intranet etc. That’s why Matomo is so popular among businesses, corporations and governments. Hand-crafted by the makers of Matomo, we are convinced you will be surprised about its value once you start using Users Flow.</p>

<blockquote>
  <p>This is why we give you a <a href="https://shop.matomo.org/refund-policy/">100% unconditional, easy, fast, and hassle-free money back guarantee</a> for 30 days. There are no strings attached.</p>
</blockquote>

<p>So try it now and let us know how you do. We are happy to help you get started and are looking forward to hear about your discovered surprises.</p>

<h3>About InnoCraft</h3>

<p>We at <a href="https://www.innocraft.com">InnoCraft</a> are the creators of Matomo and know it better than anyone else. This means all plugins are perfectly integrated into Matomo and come with outstanding features and quality to grow your business. We help our clients get started, configure, monitor and make the most of their Matomo analytics service. We also offer unique analytics products and services that help grow your business and meet the needs of small, medium and large businesses alike.</p>

<h3>Features</h3>

<ul><li>Displays visitor engagement and lets you find out after how many pages your users exited your site</li>
<li>Shows navigation paths for up to 10 interaction steps and more steps can be added optionally</li>
<li>For each interaction step, get insights into over 100 pages and for each of those pages see where they went to from that page</li>
<li>The visualization lets you configure how many details and how many steps you want to see per interaction</li>
<li>Explore traffic through a certain page and get details how they got to that page and where they went afterwards</li>
<li>Discover the path for page URLs and page titles</li>
<li>Apply segments to dice your analytics reports exactly how you need it </li>
<li>Adds several new Users Flow widgets that you can add to your dashboards</li>
<li>Quickly see the top paths across all interactions with the "Top Paths" widget or get a quick overview with the "Overview" widget</li>
<li>View how your visitors navigate through your website on the go with the <a href="https://matomo.org/mobile">Matomo Mobile app</a> for iOS and Android</li>
</ul><h3>Privacy features</h3>

<ul><li>The plugin neither tracks nor stores any additional data and therefore no personal or sensitive information is recorded. </li>
</ul><h3>Export &amp; API features</h3>

<ul><li>Get automatic <a href="https://matomo.org/docs/email-reports/">email and sms reports</a> for the top paths in your Matomo, or share them with your colleagues or customers. </li>
<li><a href="https://matomo.org/docs/embed-piwik-report/">Embed</a> the UsersFlow widgets directly in your app, dashboard, or even TV screen!. </li>
<li>All reports are available via the <a href="https://developer.matomo.org/api-reference/reporting-api#UsersFlow">UsersFlow HTTP Reporting API</a>.</li>
</ul><h3>Other features</h3>

<ul><li>Does not slow down tracking time</li>
<li>100% data ownership</li>
<li>No data limit</li>
</ul>',
              'faq' => '',
              'documentation' => '<p>The <a href="https://matomo.org/docs/users-flow/">Users Flow User Guide</a> and the <a href="https://matomo.org/faq/users-flow/">Users Flow FAQ</a> 
cover how to get the most out of this plugin.</p>

<p>For any other question feel free to <a href="#support">contact us</a>.</p>',
              'changelog' => '',
            ),
            'download' => NULL,
          ),
        ),
        'isDownloadable' => false,
        'changelog' => 
        array (
          'url' => '',
        ),
        'consumer' => 
        array (
          'license' => NULL,
          'loginUrl' => 'https://shop.matomo.org/my-account',
        ),
      ),
      20 => 
      array (
        'name' => 'ActivityLog',
        'displayName' => 'Activity Log',
        'owner' => 'innocraft',
        'description' => 'Get a detailed audit log of all activities happening in your Matomo Analytics for increased security, risk management, and problem diagnostic.',
        'homepage' => 'https://plugins.matomo.org/ActivityLog',
        'createdDateTime' => '2016-10-25 21:06:10',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'security',
          1 => 'monitoring',
          2 => 'administration',
          3 => 'log',
          4 => 'activity',
          5 => 'audit',
        ),
        'basePrice' => 15,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'InnoCraft',
            'email' => 'contact@innocraft.com',
            'homepage' => 'https://www.innocraft.com',
          ),
        ),
        'repositoryUrl' => NULL,
        'lastUpdated' => '2019-07-09 18:33:12',
        'latestVersion' => '3.2.5',
        'numDownloads' => NULL,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/ActivityLog/images/3.2.5/activity_log.jpg',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => NULL,
          'numContributors' => NULL,
          'lastCommitDate' => NULL,
        ),
        'featured' => false,
        'isFree' => false,
        'isPaid' => true,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => 
        array (
          'url' => 'https://plugins.matomo.org/ActivityLog',
          'variations' => 
          array (
            0 => 
            array (
              'price' => '19',
              'prettyPrice' => '19EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/ActivityLog?add-to-cart=s&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/activitylog/?attribute_type=Up+to+4+users&add-to-cart=2478&variation_id=2479&aelia_cs_currency=EUR',
            ),
            1 => 
            array (
              'price' => '19',
              'prettyPrice' => 'USD19',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/ActivityLog?add-to-cart=s&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/activitylog/?attribute_type=Up+to+4+users&add-to-cart=2478&variation_id=2479&aelia_cs_currency=USD',
              'cheapest' => true,
              'recommended' => true,
            ),
            2 => 
            array (
              'price' => '29',
              'prettyPrice' => '29EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/ActivityLog?add-to-cart=m&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/activitylog/?attribute_type=5+to+15+users&add-to-cart=2478&variation_id=2480&aelia_cs_currency=EUR',
            ),
            3 => 
            array (
              'price' => '29',
              'prettyPrice' => 'USD29',
              'currency' => 'USD',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/ActivityLog?add-to-cart=m&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/activitylog/?attribute_type=5+to+15+users&add-to-cart=2478&variation_id=2480&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
            4 => 
            array (
              'price' => '49',
              'prettyPrice' => '49EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/ActivityLog?add-to-cart=l&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/activitylog/?attribute_type=Unlimited+users&add-to-cart=2478&variation_id=2481&aelia_cs_currency=EUR',
            ),
            5 => 
            array (
              'price' => '59',
              'prettyPrice' => 'USD59',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/ActivityLog?add-to-cart=l&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/activitylog/?attribute_type=Unlimited+users&add-to-cart=2478&variation_id=2481&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
          ),
          'reviews' => 
          array (
            'embedUrl' => 'https://shop.matomo.org/product/activitylog/?show_reviews=1&piwik_embed=1',
            'height' => 200,
            'averageRating' => '4.75',
            'ratingCount' => 4,
            'reviewCount' => 4,
          ),
        ),
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.2.5',
            'release' => NULL,
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0-b1',
              'php' => '>=5.5',
            ),
            'numDownloads' => NULL,
            'license' => 
            array (
              'name' => 'InnoCraft EULA',
              'url' => 'https://plugins.matomo.org/ActivityLog/3.2.5/license',
            ),
            'repositoryChangelogUrl' => NULL,
            'readmeHtml' => 
            array (
              'description' => '

<p>Are you having other users on your Matomo and care as much about security as we do? Ever had the problem that you were asked what happened to a website and you couldn\'t answer it? Does your customer or co-worker claim they have changed nothing but something was deleted? Wonder who created a specific goal or website? Being a little scared about giving a new user access to all your data? Want to see when someone is trying to log in to your Matomo? Or maybe your company is required to keep an audit trail? We hear you.</p>

<p>With Activity Log, also known as audit log or audit trail, you keep an eye on everything that is happening in your Matomo Analytics. It lets you easily identify problems, improves security, and risk management. The chronological log allows you to quickly review the actions performed by members of your organization or clients, and also lets every user review details of their own actions ensuring peace of mind.</p>

<h3>Benefits</h3>

<ul><li>Helps your business or organization to remain organized </li>
<li>Indispensable when dealing with unforeseen circumstances, for example security violations, system flaws, or performance problems</li>
<li>Lets you quickly identify problems and easily troubleshoot issues</li>
<li>See clearly who did what, and when </li>
<li>Find out when someone has overwritten someone elses change</li>
<li>At a glance, see who logged in or out, who created a new website or goal, when a new plugin was installed or updated, and much more</li>
</ul><h3>Our promise</h3>

<p><a href="https://shop.matomo.org/refund-policy/"><img src="https://shop.matomo.org/wp-content/uploads/2016/10/money_back-300x294.png" style="width:220px;float:right;margin-bottom:10px;" alt="Our promise to you" /></a>We are sure you will appreciate the added security and diagnostic feature, just like we and many other Matomo users do.</p>

<blockquote>
  <p>This is why we give you a <a href="https://shop.matomo.org/refund-policy/">100% unconditional, easy, fast, and hassle-free money back guarantee</a> for 30 days. There are no strings attached.</p>
</blockquote>

<p>So get Activity Log now and let us know how you do, we are always happy to help.</p>

<h3>About InnoCraft</h3>

<p><img src="https://www.innocraft.com/innocraft/logo-transparent-background.png" style="width:320px;float:right;margin-bottom:10px;" alt="InnoCraft logo" />We at <a href="https://www.innocraft.com">InnoCraft</a> are the creators of Matomo and know it better than anyone else. This means all plugins are perfectly integrated into Matomo and come with outstanding features and quality to grow your business. We help our clients get started, configure, monitor and make the most of their Matomo analytics service. We also offer unique analytics products and services that help grow your business and meet the needs of small, medium and large businesses alike.</p>

<h3>Features</h3>

<ul><li>Logs all important activities a Matomo user can perform.</li>
<li>Includes details such as who performed the action, what the action was, and when it was performed.</li>
<li>Super Users can view activities of all users and filter by user.</li>
<li>Users with view, write, or admin access can view their own activities.</li>
<li>An Activity Log widget can be added to your Matomo dashboard to always have an eye on it. </li>
<li>Export the Activity Log UI and embed it via an iframe to share it with others.</li>
<li>Simple HTTP API provide all activity log entries as JSON, XML, ... </li>
<li>Gravatar support can be enabled to see avatars next to your user\'s activities.</li>
</ul><h3>Supported activities</h3>

<p>So far this plugin supports over 80 different type of Matomo activities, for example:</p>

<ul><li>See when a user logged in, failed to log in, or logged out, </li>
<li>See when a user was created, updated or deleted by who,</li>
<li>See when a website was created, updated or deleted by who,</li>
<li>See when a Matomo setting, an <a href="https://www.ab-tests.net">A/B Test</a>, a <a href="https://matomo.org/docs/email-reports/">Scheduled Report</a>, or a <a href="https://matomo.org/docs/segmentation/">Segment</a> was changed and by who.</li>
</ul><p>For a full list of supported activities have a look in the <a href="#faq">FAQ</a>.</p>

<h3>More information</h3>

<p>To learn more about the plugin have a look at the <a href="#faq">Activity Log FAQ</a>.</p>

<p>This plugin is built and maintained by the creators of Matomo.</p>',
              'faq' => '<p><strong>What does Activity Log do?</strong></p>

<p>The Activity Log plugins keeps a record of all important activities performed by your Matomo users on your Matomo.
You can view all activities that happened in the past in a chronological order to see who did what and when.</p>

<p>The Activity Log allows Super Users to quickly review the actions performed in Matomo by members of your organization or clients. 
It also lets every one of these user also review details of their own actions.</p>

<p><strong>Why is it important to keep an eye on these activities?</strong></p>

<p>There are many reasons why it is important, for example:</p>

<ul><li>Accountability: It helps you to identify which users were associated with a certain activity or event.</li>
<li>Intrusion Detection: It helps you to monitor data for any potential security breach or misuse of information.</li>
<li>Problem Detection: It helps you to identify problems, why something happened and when.</li>
</ul><p><strong>Who develops &amp; maintains the Activity Log plugin?</strong></p>

<p>The plugin is developed and maintained by <a href="https://www.innocraft.com">InnoCraft</a>, the company of the makers of Matomo. 
At InnoCraft, talented and passionate developers build and maintain the free and open source project Matomo. 
This ensures that the plugin is well integrated, kept up to date and automatically tested whenever a change is made. 
By purchasing this plugin you also help the developers to being able to maintain the free and open source project Matomo itself.</p>

<p><strong>How do I access the activity log?</strong></p>

<p>First you need to log in to your Matomo.</p>

<p>If you are a <a href="https://matomo.org/faq/general/faq_35/">Super User</a>, go to "Administration" and click in the "Diagnostic" 
section on "Activity Log".</p>

<p>As a user with view, write, or admin access you can see your activity log entries by clicking on "Personal" in the top right corner followed
by clicking on "Activity Log" in the left menu.</p>

<p><strong>Who has access to the activity log?</strong></p>

<p><a href="https://matomo.org/faq/general/faq_35/">Super Users</a> are able to see all activities and can also filter activities by user.</p>

<p>All other users can view their own activities.</p>

<p><strong>Can the activity log data be exported?</strong></p>

<p>You can use the <a href="https://developer.matomo.org/api-reference/reporting-api#ActivityLog">Matomo HTTP API</a> to query activities.</p>

<p>The plugin currently adds the following API methods to your Matomo:</p>

<ul><li><code>ActivityLog.getEntries</code> Returns logged activity entries.</li>
<li><code>ActivityLog.getEntryCount</code> Returns the number of available activity entries.</li>
</ul><p>An export feature will be also available in the UI soon.</p>

<p><strong>How long will the activity data be stored?</strong></p>

<p>Activities are stored forever, there are no limits. If you are interested in a feature to setup an automatic purge
of activities after a certain time, <a href="https://matomo.org/support">let us know</a>.</p>

<p><strong>How do I enable Gravatar images in the activity log?</strong></p>

<p><a href="https://en.gravatar.com/">Gravar</a> means Globally Recognized Avatar. When enabled, it will try to find a matching
avatar image for your users so you can easily see which user has performed which activity. An avatar image may be 
shown next to an activity in the activity log. This feature is not enabled by default as our plugins 
do not send any of your data or metadata to external web services for <a href="https://matomo.org/privacy">privacy</a> compliance.</p>

<p>To enable Gravatar images, log in to Matomo as a <a href="https://matomo.org/faq/general/faq_35/">Super User</a> and go to 
"Administration =&gt; Plugin Settings", where you can enable the Gravatar setting.</p>

<p><strong>As a developer, how do I log activities done within my custom plugin?</strong></p>

<p>To log custom activities happening in your custom plugin, you can define Activity classes (extending <code>Piwik\\Plugins\\ActivityLog\\Activity\\Activity</code>). 
You need to place these classes in a directory named <code>Activity</code> within any plugin. The Audit log will then include all
 such activities recorded by your plugin.</p>

<p><strong>How can I export the Activity Log UI to embed it somewhere else?</strong></p>

<p>First you need to log in to your Matomo. Then click on "Personal" in the top right corner and click on "Widgets"
in the left menu. There you can find the widget "Activity Log" in the "Diagnostic" section. Below the widget the URL
to export it is shown. To learn more about this, read the <a href="https://matomo.org/docs/embed-piwik-report/">Embed Matomo Widget</a> user guide.</p>

<p><strong>Which events / activities are being tracked?</strong></p>

<p>The audit log reports all these activities:</p>

<ul><li>Annotation added</li>
<li>Annotation changed</li>
<li>Annotation deleted</li>
<li>Component updated (Matomo / Plugin)</li>
<li>Custom Alert added</li>
<li>Custom Alert changed</li>
<li>Custom Alert deleted</li>
<li>Custom Dimension configured</li>
<li>Custom Dimension changed</li>
<li>Geo location provider changed</li>
<li>Goal added</li>
<li>Goal changed</li>
<li>Goal deleted</li>
<li>Measurable created</li>
<li>Measurable changed</li>
<li>Measurable removed</li>
<li>Plugin installed</li>
<li>Plugin uninstalled</li>
<li>Plugin activated</li>
<li>Plugin deactivated</li>
<li>Privacy: Enable DNT support</li>
<li>Privacy: Disable DNT support</li>
<li>Privacy: Set IP Anonymise settings </li>
<li>Privacy: Set delete logs settings</li>
<li>Privacy: Set delete reports settings</li>
<li>Privacy: Set scheduled report deletion setting</li>
<li>Privacy: Raw data anonymization triggered</li>
<li>Scheduled report created</li>
<li>Scheduled report changed</li>
<li>Scheduled report deleted</li>
<li>Scheduled report sent</li>
<li>Scheduled report unsubscribed</li>
<li>Segment created</li>
<li>Segment updated</li>
<li>Segment deleted</li>
<li>Site access changed</li>
<li>Site settings updated</li>
<li>Super user access changed</li>
<li>System settings updated</li>
<li>Two Factor Authentication enabled</li>
<li>Two Factor Authentication disabled</li>
<li>User created</li>
<li>User removed</li>
<li>User changed</li>
<li>User logged in</li>
<li>User failed to log in</li>
<li>User logged out</li>
<li>User settings updated</li>
<li>User sets preference</li>
</ul><p>Other plugins\' activity log events:</p>

<ul><li>A/B testing

<ul><li>Experiment created</li>
<li>Experiment settings updated</li>
<li>Experiment status changed (Started, Finished, Archived)</li>
<li>Experiment deleted</li>
</ul></li>
<li>Custom Reports

<ul><li>Custom Report created</li>
<li>Custom Report updated</li>
<li>Custom Report deleted</li>
</ul></li>
<li>Form Analytics

<ul><li>Form created</li>
<li>Form updated</li>
<li>Form deleted</li>
<li>Form archived</li>
</ul></li>
<li>Heatmaps

<ul><li>Heatmap created</li>
<li>Heatmap updated</li>
<li>Heatmap deleted</li>
<li>Heatmap stopped</li>
</ul></li>
<li>Session Recording

<ul><li>Session Recording created</li>
<li>Session Recording updated</li>
<li>Session Recording deleted</li>
<li>Session Recording stopped</li>
</ul></li>
<li>Referrers Manager

<ul><li>Search engine added</li>
<li>Search engine removed</li>
<li>Social network added</li>
<li>Social network removed</li>
</ul></li>
</ul><p><strong>Do I get access to the raw data that was tracked?</strong></p>

<p>Yes, if you host Matomo yourself you get access to all data that is stored in your MySQL database. 
The data is stored in a table called <code>matomo_activity_log</code>. The data is also made easily available via the 
<a href="/api-reference/reporting-api#ActivityLog">Activity Log HTTP Reporting API</a>.</p>',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => NULL,
          ),
        ),
        'isDownloadable' => false,
        'changelog' => 
        array (
          'url' => '',
        ),
        'consumer' => 
        array (
          'license' => NULL,
          'loginUrl' => 'https://shop.matomo.org/my-account',
        ),
      ),
      21 => 
      array (
        'name' => 'ShortcodeTracker',
        'displayName' => 'Shortcode Tracker',
        'owner' => 'mgazdzik',
        'description' => 'Plugin allowing user to create shortcodes and track their usage within Matomo (Piwik). Also integrates with UI to deliver user-friendly interaction.',
        'homepage' => 'http://mgazdzik.pl/shortcodetracker',
        'createdDateTime' => '2015-11-11 12:46:02',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'shortcode',
          1 => 'shortener',
          2 => 'redirect',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Michał Gaździk',
            'email' => 'michal.gazdzik@gmail.com',
            'homepage' => 'http://mgazdzik.pl',
          ),
        ),
        'repositoryUrl' => 'https://github.com/mgazdzik/plugin-ShortcodeTracker',
        'lastUpdated' => '2019-06-21 13:14:04',
        'latestVersion' => '1.2.0',
        'numDownloads' => 7906,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/ShortcodeTracker/images/1.2.0/screenshot1.png',
          1 => 'https://plugins.matomo.org/ShortcodeTracker/images/1.2.0/screenshot2.png',
          2 => 'https://plugins.matomo.org/ShortcodeTracker/images/1.2.0/screenshot3.png',
          3 => 'https://plugins.matomo.org/ShortcodeTracker/images/1.2.0/screenshot4.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '1',
          'numContributors' => '1',
          'lastCommitDate' => '2019-06-21 13:12:38',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '1.1.2',
            'release' => '2019-06-18 17:32:03',
            'requires' => 
            array (
              'piwik' => '>=3.2.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 0,
            'license' => 
            array (
              'name' => 'GPL-3.0',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/mgazdzik/plugin-ShortcodeTracker/commits/1.1.3',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/ShortcodeTracker/download/1.1.2',
          ),
          1 => 
          array (
            'name' => '1.1.4',
            'release' => '2019-06-18 17:34:07',
            'requires' => 
            array (
              'piwik' => '>=3.2.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 12,
            'license' => 
            array (
              'name' => 'GPL-3.0',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/mgazdzik/plugin-ShortcodeTracker/commits/1.1.4',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/ShortcodeTracker/download/1.1.4',
          ),
          2 => 
          array (
            'name' => '1.1.5',
            'release' => '2019-06-19 05:56:04',
            'requires' => 
            array (
              'piwik' => '>=3.2.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 1,
            'license' => 
            array (
              'name' => 'GPL-3.0',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/mgazdzik/plugin-ShortcodeTracker/commits/1.1.5',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/ShortcodeTracker/download/1.1.5',
          ),
          3 => 
          array (
            'name' => '1.1.6',
            'release' => '2019-06-19 08:32:05',
            'requires' => 
            array (
              'piwik' => '>=3.2.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 6,
            'license' => 
            array (
              'name' => 'GPL-3.0',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/mgazdzik/plugin-ShortcodeTracker/commits/1.1.6',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/ShortcodeTracker/download/1.1.6',
          ),
          4 => 
          array (
            'name' => '1.1.7',
            'release' => '2019-06-19 12:30:04',
            'requires' => 
            array (
              'piwik' => '>=3.2.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 7,
            'license' => 
            array (
              'name' => 'GPL-3.0',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/mgazdzik/plugin-ShortcodeTracker/commits/1.1.7',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/ShortcodeTracker/download/1.1.7',
          ),
          5 => 
          array (
            'name' => '1.1.8',
            'release' => '2019-06-19 17:32:04',
            'requires' => 
            array (
              'piwik' => '>=3.2.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 18,
            'license' => 
            array (
              'name' => 'GPL-3.0',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/mgazdzik/plugin-ShortcodeTracker/commits/1.1.8',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/ShortcodeTracker/download/1.1.8',
          ),
          6 => 
          array (
            'name' => '1.2.0',
            'release' => '2019-06-21 13:14:04',
            'requires' => 
            array (
              'piwik' => '>=3.2.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 403,
            'license' => 
            array (
              'name' => 'GPL-3.0',
              'url' => 'https://plugins.matomo.org/ShortcodeTracker/1.2.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/mgazdzik/plugin-ShortcodeTracker/commits/1.2.0',
            'readmeHtml' => 
            array (
              'description' => '

<p>Plugin allows to turn Matomo (Piwik) instance into URL Shortener.</p>

<p>Basic features:</p>

<ul><li>easily create shortcode from any page you track in Matomo (integration with Actions report UI),</li>
<li>create shortcode for any custom URL you want,</li>
<li>perform redirects using your Matomo instance,</li>
<li>get usage statistics for shortcodes handled by your instance

<ul><li>get best performing URL\'s on websites you track,</li>
<li>external URLs redirect statistics,</li>
</ul></li>
<li>see which URLs are being shortened and visited most often - also for external URLs not tracked in your Matomo.</li>
</ul><p>Goodness coming:</p>

<ul><li>for redirect performance improvement, store your shortcodes in storage like Memcache or Redis,</li>
<li>attributing shortcode redirects with actual visits on your page,</li>
<li>more advanced reports,</li>
</ul><p>Before using, please read content in <a href="https://github.com/mgazdzik/plugin-ShortcodeTracker#setup"><code>Setup</code></a> section 
as it contains steps required to make plugin work with your Matomo instance!</p>

<h3>Usage</h3>

<p>After correctly setting up this plugin (please see section below), you are ready for shortening your Urls.</p>

<p>There is one new section in top reporting menu called "Shortcodes".</p>

<p>This view gives you possibility to shorten any URL you want and operate with shortcode retrieved.</p>

<p>Additionally this plugin integrates with Page URL\'s report - hover over URL you want to shorten and click scissors icon.</p>

<p>This will call popup with appropriate shortcode, so you don\'t need to manually shorten any URL you already track with your
Matomo instance.</p>

<p>Enjoy!</p>

<h3>Setup</h3>

<h4>Webserver</h4>

<p>Besides of functional Matomo instance with this plugin enabled you will also need special configuration for your webserver.</p>

<p>It\'s purpose is to redirect any short url hitting your server to proper API method doing the magic.</p>

<p>Below you can find example configurations</p>

<ul><li><a href="https://github.com/mgazdzik/plugin-ShortcodeTracker/blob/master/docs/nginx_config.txt">for NGINX webserver vhost</a></li>
<li><a href="https://github.com/mgazdzik/plugin-ShortcodeTracker/blob/master/docs/apache_config.txt">for Apache2 webserver .htaccess file</a></li>
</ul><p><strong>Please be aware that in your case this configuration may be different, so please contact your system/webserver
admin for advisory!</strong></p>

<h4>Plugin</h4>

<p>Before you can start shortening your URLs you need to perform following steps:</p>

<ul><li>go to Administration -&gt; Plugins,</li>
<li>find "ShortcodeTracker" plugin and click <code>enable</code>,</li>
</ul><p>After you confirm that plugin has been enabled:
* go to Administration -&gt; Plugin Settings,
* go to ShortcodeTracker section,
* fill in Shortener URL input,
* if you want to track external sites, you need to decide to which Matomo page those actions will be attributed (see
External redirects tracking section below),
* click \'save\',
* <strong>additionally you have to make Shortener URL a trusted host for Matomo by entering it in settings section</strong>,</p>

<p>This is necessary to perform, as otherwise you will not be able to generate shortened URLs or use them with Matomo.</p>

<h4>External redirects tracking</h4>

<p>It is possible to also track redirect actions for external URLs (i.e. which URL doesn\'t match any page tracked within
your Matomo instance). However, it is required to decide to which site this traffic will be attributed to.</p>

<p>It is recommended to create a separate Website in Matomo instance only dedicated to this traffic, so that other websites
reports won\'t be affected by redirect events.</p>

<p>To select which site should collect redirects:</p>

<ul><li>go to <code>Plugin Settings</code> section,</li>
<li>from dropdown you can select site for external redirects,</li>
<li>alternatively you can select not to track external redirects by setting <code>Do not collect external shortcode redirects</code>,</li>
<li>click save</li>
</ul><h3>Backlog</h3>

<ul><li>Add advanced report for each shortcode

<ul><li>stitch every redirect event with following action,</li>
<li>add new referrer type (shortcode),</li>
<li>aggregate statistics,</li>
<li>add segment for referrer,</li>
</ul></li>
<li>Refactor plugin so it\'s possible to cover Model.php with tests,</li>
<li>Add queue system for tracking redirect events to improve performance of redirect feature,</li>
<li>Add integration test for redirect tracking,</li>
<li>Add support for at least one caching system (redis/memcache),</li>
<li>Improve HTML elements designs/styles,</li>
<li>Throw exception/signal in UI in case Shortener URL is not changed,</li>
<li>Introduce Shortener base URL validation (in Settings section),</li>
<li>introduce value object to store Shortcode,</li>
<li>handle case when given idsite has multiple domains assigned (currently it\'s only for main domain URL),</li>
</ul><h3>Support</h3>

<p>Please direct any feedback regarding plugin to Github repository issue tracker available at
<a href="https://github.com/mgazdzik/plugin-ShortcodeTracker/issues">https://github.com/mgazdzik/plugin-ShortcodeTracker/issues</a>.</p>

<h3>Credits</h3>

<p>Scissors icon visible in Actions report is originating from
<a href="https://icons8.com/">https://icons8.com/</a>.</p>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => '/api/2.0/plugins/ShortcodeTracker/download/1.2.0',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/ShortcodeTracker/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      22 => 
      array (
        'name' => 'SecurityInfo',
        'displayName' => 'Security Info',
        'owner' => 'matomo-org',
        'description' => 'Provides security information about your PHP environment and offers suggestions based on PhpSecInfo from the PHP Security Consortium.',
        'homepage' => 'https://matomo.org',
        'createdDateTime' => '2013-10-31 22:12:08',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Forum',
            'key' => 'forum',
            'value' => 'https://forum.matomo.org',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/matomo-org/plugin-SecurityInfo/issues',
            'type' => 'url',
          ),
          2 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/matomo-org/plugin-SecurityInfo',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'security',
          1 => 'phpsec',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Matomo',
            'email' => 'hello@matomo.org',
            'homepage' => 'https://matomo.org',
          ),
        ),
        'repositoryUrl' => 'https://github.com/matomo-org/plugin-SecurityInfo',
        'lastUpdated' => '2019-06-19 07:06:05',
        'latestVersion' => '3.0.7',
        'numDownloads' => 71979,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/SecurityInfo/images/3.0.7/Security_Info.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '204',
          'numContributors' => '13',
          'lastCommitDate' => '2019-08-28 23:16:21',
        ),
        'featured' => true,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2016-09-13 22:04:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 319,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/SecurityInfo/3.0.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-SecurityInfo/commits/3.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SecurityInfo/download/3.0.0',
          ),
          1 => 
          array (
            'name' => '3.0.1',
            'release' => '2016-11-01 20:46:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 241,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/SecurityInfo/3.0.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-SecurityInfo/commits/3.0.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SecurityInfo/download/3.0.1',
          ),
          2 => 
          array (
            'name' => '3.0.2',
            'release' => '2016-11-13 23:50:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 2948,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/SecurityInfo/3.0.2/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-SecurityInfo/commits/3.0.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SecurityInfo/download/3.0.2',
          ),
          3 => 
          array (
            'name' => '3.0.3',
            'release' => '2016-12-27 05:46:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 4688,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/SecurityInfo/3.0.3/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-SecurityInfo/commits/3.0.3',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SecurityInfo/download/3.0.3',
          ),
          4 => 
          array (
            'name' => '3.0.4',
            'release' => '2017-02-22 20:32:05',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 7606,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/SecurityInfo/3.0.4/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-SecurityInfo/commits/3.0.4',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SecurityInfo/download/3.0.4',
          ),
          5 => 
          array (
            'name' => '3.0.5',
            'release' => '2017-11-01 21:58:05',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 7342,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/SecurityInfo/3.0.5/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-SecurityInfo/commits/3.0.5',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SecurityInfo/download/3.0.5',
          ),
          6 => 
          array (
            'name' => '3.0.6',
            'release' => '2018-06-18 10:12:05',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 8197,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/SecurityInfo/3.0.6/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-SecurityInfo/commits/3.0.6',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SecurityInfo/download/3.0.6',
          ),
          7 => 
          array (
            'name' => '3.0.7',
            'release' => '2019-06-19 07:06:05',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 4163,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/SecurityInfo/3.0.7/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-SecurityInfo/commits/3.0.7',
            'readmeHtml' => 
            array (
              'description' => '

<p>We highly recommend that all Matomo administrators enable the SecurityInfo plugin, and then view the Settings. The plugin is a tool in a multilayered security approach.</p>

<p>Performed checks include for instance usage of latest PHP version, usage of latest Piwik version, usage of PHP ini settings like magic_quotes_gpc and more.</p>',
              'faq' => '<p><strong>Does the plugin replace secure development practices or audit the code/application?</strong></p>

<p>No, it doesn\'t. It just gives you some information based on PhpSecInfo from the PHP Security Consortium.</p>',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => '/api/2.0/plugins/SecurityInfo/download/3.0.7',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/SecurityInfo/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      23 => 
      array (
        'name' => 'LoginOIDC',
        'displayName' => 'Login OIDC',
        'owner' => 'dominik-th',
        'description' => 'Adds support for integrating external authentication services',
        'homepage' => 'https://github.com/dominik-th/matomo-plugin-LoginOIDC',
        'createdDateTime' => '2019-03-30 20:08:04',
        'donate' => 
        array (
          'paypal' => 'matomo-loginoidc@dthiemermann.org',
          'bitcoin' => NULL,
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'matomo-loginoidc@dthiemermann.org',
            'type' => 'email',
          ),
          1 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/dominik-th/matomo-plugin-LoginOIDC/issues',
            'type' => 'url',
          ),
          2 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/dominik-th/matomo-plugin-LoginOIDC',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'login',
          1 => 'authentication',
          2 => 'sso',
          3 => 'oauth',
          4 => 'openid',
          5 => 'connect',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Dominik Thiemermann',
            'email' => 'hello@dthiemermann.org',
            'homepage' => 'https://www.dthiemermann.org',
          ),
        ),
        'repositoryUrl' => 'https://github.com/dominik-th/matomo-plugin-LoginOIDC',
        'lastUpdated' => '2019-06-18 16:48:05',
        'latestVersion' => '0.1.3',
        'numDownloads' => 676,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/LoginOIDC/images/0.1.3/LoginOIDC_Admin_Settings.png',
          1 => 'https://plugins.matomo.org/LoginOIDC/images/0.1.3/LoginOIDC_Github_Authorize_Consent.png',
          2 => 'https://plugins.matomo.org/LoginOIDC/images/0.1.3/LoginOIDC_Sign_In.png',
          3 => 'https://plugins.matomo.org/LoginOIDC/images/0.1.3/LoginOIDC_User_Settings_Link.png',
          4 => 'https://plugins.matomo.org/LoginOIDC/images/0.1.3/LoginOIDC_User_Settings_Unlink.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '42',
          'numContributors' => '1',
          'lastCommitDate' => '2019-06-18 16:47:28',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '0.1.0',
            'release' => '2019-03-30 20:08:04',
            'requires' => 
            array (
              'piwik' => '>=3.9.1-stable,<4.0.0-b1',
              'php' => '>=7.0.0',
            ),
            'numDownloads' => 13,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/LoginOIDC/0.1.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/dominik-th/matomo-plugin-LoginOIDC/commits/0.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/LoginOIDC/download/0.1.0',
          ),
          1 => 
          array (
            'name' => '0.1.1',
            'release' => '2019-03-31 12:40:04',
            'requires' => 
            array (
              'piwik' => '>=3.8.0-b4,<4.0.0-b1',
              'php' => '>=7.0.0',
            ),
            'numDownloads' => 34,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/LoginOIDC/0.1.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/dominik-th/matomo-plugin-LoginOIDC/commits/0.1.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/LoginOIDC/download/0.1.1',
          ),
          2 => 
          array (
            'name' => '0.1.2',
            'release' => '2019-04-03 12:58:04',
            'requires' => 
            array (
              'piwik' => '>=3.8.0-b4,<4.0.0-b1',
              'php' => '>=7.0.0',
            ),
            'numDownloads' => 287,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/LoginOIDC/0.1.2/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/dominik-th/matomo-plugin-LoginOIDC/commits/0.1.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/LoginOIDC/download/0.1.2',
          ),
          3 => 
          array (
            'name' => '0.1.3',
            'release' => '2019-06-18 16:48:05',
            'requires' => 
            array (
              'piwik' => '>=3.8.0-b4,<4.0.0-b1',
              'php' => '>=7.0.0',
            ),
            'numDownloads' => 342,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/LoginOIDC/0.1.3/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/dominik-th/matomo-plugin-LoginOIDC/commits/0.1.3',
            'readmeHtml' => 
            array (
              'description' => '

<p>Login via third party authentication services.</p>

<p>Easily add a "Login with Github" button your Matomo instance. You can also setup any other service to do the authentication for you.</p>

',
              'faq' => '<p><strong>What is the callback url?</strong></p>

<p>http(s):///index.php?module=LoginOIDC&amp;action=callback&amp;provider=oidc</p>

<p><strong>Which providers can I use?</strong></p>

<p>I tested the plugin with Auth0, Github and Keycloak, which work fine.
If your provider does not seem to work, leave an issue on Github.</p>

<p><strong>How can I unlink all users?</strong></p>

<p>The easiest way is to fully uninstall the plugin and reinstall afterwards.
Otherwise you can delete data from <code>matomo_loginoidc_provider</code> in your sql database.</p>

<p>If you change the OAuth provider and there could be user id collisions, you should make sure to unlink all users beforehand.</p>

<p><strong>Can I setup more than one provider?</strong></p>

<p>Currently that is <strong>not</strong> possible.
But you can use services like Auth0, which support multiple providers.</p>

<p><strong>I get a <code>Can\'t create table</code> error when installing the plugin</strong></p>

<p>Most likely you are using a very old Matomo (Piwik) installation, which still uses MyISAM tables.
Learn here on how to update the database engine:
https://matomo.org/faq/troubleshooting/faq_25610/</p>

<p><strong>What are the settings for ...?</strong></p>

<ul><li><p>Github:</p>

<ul><li>Authorize URL: <code>https://github.com/login/oauth/authorize</code></li>
<li>Token URL: <code>https://github.com/login/oauth/access_token</code></li>
<li>Userinfo URL: <code>https://api.github.com/user</code></li>
<li>Userinfo ID: <code>id</code></li>
<li>OAuth Scopes: <code>&lt;EMPTY&gt;</code></li>
</ul></li>
<li><p>Auth0:</p>

<ul><li>Authorize URL: <code>https://&lt;USERNAME&gt;.eu.auth0.com/authorize</code></li>
<li>Token URL: <code>https://&lt;USERNAME&gt;.eu.auth0.com/oauth/token</code></li>
<li>Userinfo URL: <code>https://&lt;USERNAME&gt;.eu.auth0.com/userinfo</code></li>
<li>Userinfo ID: <code>sub</code></li>
<li>OAuth Scopes: <code>openid</code></li>
</ul></li>
<li><p>Keycloak:</p>

<ul><li>Authorize URL: <code>http(s)://&lt;YOUR_KEYCLOAK_INSTALLATION&gt;/auth/realms/&lt;REALM&gt;/protocol/openid-connect/auth</code></li>
<li>Token URL: <code>http(s)://&lt;YOUR_KEYCLOAK_INSTALLATION&gt;/auth/realms/&lt;REALM&gt;/protocol/openid-connect/token</code></li>
<li>Userinfo URL: <code>http(s)://&lt;YOUR_KEYCLOAK_INSTALLATION&gt;/auth/realms/&lt;REALM&gt;/protocol/openid-connect/userinfo</code></li>
<li>Userinfo ID: <code>sub</code></li>
<li>OAuth Scopes: <code>openid</code></li>
</ul></li>
<li><p>Microsoft Azure AD</p>

<ul><li>Authorize URL: <code>https://login.microsoftonline.com/{tenant_id}/oauth2/authorize</code></li>
<li>Token URL: <code>https://login.microsoftonline.com/{tenant_id}/oauth2/token</code></li>
<li>Userinfo URL: <code>https://login.microsoftonline.com/{tenant_id}/openid/userinfo</code></li>
<li>Userinfo ID: <code>sub</code></li>
<li>OAuth Scopes: <code>openid</code></li>
<li>Redirect URI Override*: <code>http(s)://&lt;YOUR_MATOMO_INSTALLATION&gt;/oidc/callback</code></li>
</ul></li>
</ul><p>*because Microsoft Azure AD does not allow query parameters in the redirect URI we also have to edit our nginx configuration to work around this limitation:</p>

<pre><code>server {
    # ...
    rewrite ^/oidc/callback /index.php?module=LoginOIDC&amp;action=callback&amp;provider=oidc redirect;
    # ...
}
</code></pre>',
              'documentation' => '',
              'changelog' => '<h3>0.1.3</h3>

<ul><li>Add an option to override the redirect URI</li>
</ul><h3>0.1.2</h3>

<ul><li>Fix oauth flow for <a href="https://github.com/keycloak/keycloak">Keycloak</a></li>
<li>Improve FAQ</li>
</ul><h3>0.1.1</h3>

<ul><li>Lowered the required Matomo version for this plugin.</li>
</ul><h3>0.1.0</h3>

<ul><li>Initial version.</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/LoginOIDC/download/0.1.3',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/LoginOIDC/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      24 => 
      array (
        'name' => 'PremiumBundle',
        'displayName' => 'Premium Bundle',
        'owner' => 'innocraft',
        'description' => 'All premium features in one bundle, make the most out of your Matomo and enjoy discounts of up to 25%!',
        'homepage' => 'https://www.innocraft.com',
        'createdDateTime' => '2017-10-12 19:43:38',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'optimization',
          1 => 'conversion',
          2 => 'cro',
          3 => 'sales',
          4 => 'content',
          5 => 'bundle',
          6 => 'revenue',
          7 => 'premium',
        ),
        'basePrice' => 1300,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'InnoCraft',
            'email' => 'contact@innocraft.com',
            'homepage' => 'https://www.innocraft.com',
          ),
        ),
        'repositoryUrl' => NULL,
        'lastUpdated' => '2019-06-12 04:35:18',
        'latestVersion' => '3.0.7',
        'numDownloads' => NULL,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/PremiumBundle/images/3.0.7/0_Premium_Bundle.jpg',
          1 => 'https://plugins.matomo.org/PremiumBundle/images/3.0.7/1_Click_Heatmap.jpg',
          2 => 'https://plugins.matomo.org/PremiumBundle/images/3.0.7/2_Session_Recording_Player.png',
          3 => 'https://plugins.matomo.org/PremiumBundle/images/3.0.7/2_Session_Recording_Move_And_Click_Path.jpg',
          4 => 'https://plugins.matomo.org/PremiumBundle/images/3.0.7/3_Manage_A_B_Tests.png',
          5 => 'https://plugins.matomo.org/PremiumBundle/images/3.0.7/3_AB_Testing.png',
          6 => 'https://plugins.matomo.org/PremiumBundle/images/3.0.7/4_Funnels.png',
          7 => 'https://plugins.matomo.org/PremiumBundle/images/3.0.7/5_Custom_Reports.png',
          8 => 'https://plugins.matomo.org/PremiumBundle/images/3.0.7/5_Users_Flow.png',
          9 => 'https://plugins.matomo.org/PremiumBundle/images/3.0.7/5_Users_Flow_Interaction_Menu.png',
          10 => 'https://plugins.matomo.org/PremiumBundle/images/3.0.7/7_Crawling_Errors.png',
          11 => 'https://plugins.matomo.org/PremiumBundle/images/3.0.7/7_Keywords_on_Google_Search_Clicks_-_Impressions_-_Clickthrough_-_Position_in_results_page.png',
          12 => 'https://plugins.matomo.org/PremiumBundle/images/3.0.7/8_Form_Analytics_By_Page_URL.png',
          13 => 'https://plugins.matomo.org/PremiumBundle/images/3.0.7/8_Form_Analytics_Drop_Off_Fields.png',
          14 => 'https://plugins.matomo.org/PremiumBundle/images/3.0.7/8_Form_Analytics_Evolution.png',
          15 => 'https://plugins.matomo.org/PremiumBundle/images/3.0.7/9_Roll-Up_Reporting.jpg',
          16 => 'https://plugins.matomo.org/PremiumBundle/images/3.0.7/9_Media_Analytics_Overview.png',
          17 => 'https://plugins.matomo.org/PremiumBundle/images/3.0.7/9_Media_Analytics_Real-time_Reports.png',
          18 => 'https://plugins.matomo.org/PremiumBundle/images/3.0.7/10_Activity_Log.jpg',
          19 => 'https://plugins.matomo.org/PremiumBundle/images/3.0.7/11_WooCommerce_Log.png',
          20 => 'https://plugins.matomo.org/PremiumBundle/images/3.0.7/11_WooCommerce_Integration.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => NULL,
          'numContributors' => NULL,
          'lastCommitDate' => NULL,
        ),
        'featured' => false,
        'isFree' => false,
        'isPaid' => true,
        'isBundle' => true,
        'isCustomPlugin' => false,
        'shop' => 
        array (
          'url' => 'https://plugins.matomo.org/PremiumBundle',
          'variations' => 
          array (
            0 => 
            array (
              'price' => '1299',
              'prettyPrice' => '1299EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 846,
              'prettyDiscount' => '846€',
              'addToCartUrl' => 'https://plugins.matomo.org/PremiumBundle?add-to-cart=s&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-premiumbundle/?attribute_type=Up+to+4+users&add-to-cart=5922&variation_id=5923&aelia_cs_currency=EUR',
            ),
            1 => 
            array (
              'price' => '1499',
              'prettyPrice' => 'USD1499',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 966,
              'prettyDiscount' => '$966',
              'addToCartUrl' => 'https://plugins.matomo.org/PremiumBundle?add-to-cart=s&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-premiumbundle/?attribute_type=Up+to+4+users&add-to-cart=5922&variation_id=5923&aelia_cs_currency=USD',
              'cheapest' => true,
              'recommended' => true,
            ),
            2 => 
            array (
              'price' => '2599',
              'prettyPrice' => '2599EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 1096,
              'prettyDiscount' => '1096€',
              'addToCartUrl' => 'https://plugins.matomo.org/PremiumBundle?add-to-cart=m&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-premiumbundle/?attribute_type=5+to+15+users&add-to-cart=5922&variation_id=5924&aelia_cs_currency=EUR',
            ),
            3 => 
            array (
              'price' => '2989',
              'prettyPrice' => 'USD2989',
              'currency' => 'USD',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 1296,
              'prettyDiscount' => '$1296',
              'addToCartUrl' => 'https://plugins.matomo.org/PremiumBundle?add-to-cart=m&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-premiumbundle/?attribute_type=5+to+15+users&add-to-cart=5922&variation_id=5924&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
            4 => 
            array (
              'price' => '3899',
              'prettyPrice' => '3899EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 1416,
              'prettyDiscount' => '1416€',
              'addToCartUrl' => 'https://plugins.matomo.org/PremiumBundle?add-to-cart=l&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-premiumbundle/?attribute_type=Unlimited+users&add-to-cart=5922&variation_id=5925&aelia_cs_currency=EUR',
            ),
            5 => 
            array (
              'price' => '4489',
              'prettyPrice' => 'USD4489',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 1646,
              'prettyDiscount' => '$1646',
              'addToCartUrl' => 'https://plugins.matomo.org/PremiumBundle?add-to-cart=l&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-premiumbundle/?attribute_type=Unlimited+users&add-to-cart=5922&variation_id=5925&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
          ),
          'reviews' => 
          array (
            'embedUrl' => 'https://shop.matomo.org/product/plugin-premiumbundle/?show_reviews=1&piwik_embed=1',
            'height' => 200,
            'averageRating' => NULL,
            'ratingCount' => 0,
            'reviewCount' => 0,
          ),
        ),
        'bundle' => 
        array (
          'plugins' => 
          array (
            0 => 
            array (
              'name' => 'MediaAnalytics',
              'displayName' => 'Media Analytics',
            ),
            1 => 
            array (
              'name' => 'AbTesting',
              'displayName' => 'A/B Testing',
            ),
            2 => 
            array (
              'name' => 'ActivityLog',
              'displayName' => 'Activity Log',
            ),
            3 => 
            array (
              'name' => 'Funnels',
              'displayName' => 'Funnels',
            ),
            4 => 
            array (
              'name' => 'WhiteLabel',
              'displayName' => 'White Label',
            ),
            5 => 
            array (
              'name' => 'UsersFlow',
              'displayName' => 'Users Flow',
            ),
            6 => 
            array (
              'name' => 'RollUpReporting',
              'displayName' => 'Roll-Up Reporting',
            ),
            7 => 
            array (
              'name' => 'FormAnalytics',
              'displayName' => 'Form Analytics',
            ),
            8 => 
            array (
              'name' => 'SearchEngineKeywordsPerformance',
              'displayName' => 'Search Engine Keywords Performance',
            ),
            9 => 
            array (
              'name' => 'HeatmapSessionRecording',
              'displayName' => 'Heatmap & Session Recording',
            ),
            10 => 
            array (
              'name' => 'WooCommerceAnalytics',
              'displayName' => 'WooCommerce Analytics',
            ),
            11 => 
            array (
              'name' => 'LoginSaml',
              'displayName' => 'Login SAML',
            ),
            12 => 
            array (
              'name' => 'CustomReports',
              'displayName' => 'Custom Reports',
            ),
            13 => 
            array (
              'name' => 'MultiChannelConversionAttribution',
              'displayName' => 'Multi Channel Conversion Attribution',
            ),
            14 => 
            array (
              'name' => 'Cohorts',
              'displayName' => 'Cohorts',
            ),
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.7',
            'release' => NULL,
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0-b1',
            ),
            'numDownloads' => NULL,
            'license' => 
            array (
              'name' => 'InnoCraft EULA',
              'url' => '',
            ),
            'repositoryChangelogUrl' => NULL,
            'readmeHtml' => 
            array (
              'description' => '

<p>This bundle comes with all the premium features goodness and won\'t disappoint you. It turns your Matomo into a true content, marketing &amp; acquisition optimization platform that lets you tweak every aspect of your websites and apps. You will also be able to create custom reports, save heaps of time while staying on top of your business with Roll-Up Reporting, keep control over all of your users with Activity Log, and White Label will give your brand the opportunity to shine and improves your general analytics experience.</p>

<p>This bundles includes all our premium features:</p>

<ul><li><a href="https://plugins.matomo.org/AbTesting">A/B Testing</a></li>
<li><a href="https://plugins.matomo.org/ActivityLog">Activity Log</a></li>
<li><a href="https://plugins.matomo.org/Cohorts">Cohorts</a></li>
<li><a href="https://plugins.matomo.org/CustomReports">Custom Reports</a></li>
<li><a href="https://plugins.matomo.org/FormAnalytics">Form Analytics</a></li>
<li><a href="https://plugins.matomo.org/Funnels">Funnels</a></li>
<li><a href="https://plugins.matomo.org/HeatmapSessionRecording">Heatmap &amp; Session Recording</a></li>
<li><a href="https://plugins.matomo.org/LoginSaml">LoginSaml</a></li>
<li><a href="https://plugins.matomo.org/MediaAnalytics">Media Analytics</a></li>
<li><a href="https://plugins.matomo.org/RollUpReporting">Roll-Up Reporting</a></li>
<li><a href="https://plugins.matomo.org/SearchEngineKeywordsPerformance">Search Engine Keywords Performance</a></li>
<li><a href="https://plugins.matomo.org/MultiChannelConversionAttribution">Multi Channel Conversion Attribution</a></li>
<li><a href="https://plugins.matomo.org/UsersFlow">Users Flow</a></li>
<li><a href="https://plugins.matomo.org/WhiteLabel">White Label</a> </li>
<li><a href="https://plugins.matomo.org/WooCommerceAnalytics">WooCommerce Analytics</a> </li>
</ul><p>We also recommend having a look at the following free plugins which complement this bundle perfectly:</p>

<ul><li><a href="https://plugins.matomo.org/CustomDimensions">Custom Dimensions</a> (Track custom dimensions)</li>
<li><a href="https://plugins.matomo.org/CustomAlerts">Custom Alerts</a> (Get notified automatically when there are important changes)</li>
<li><a href="https://plugins.matomo.org/MarketingCampaignsReporting">Marketing Campaigns Reporting</a> (Measure the effectiveness of your marketing campaign with up to five channels)</li>
<li><a href="https://plugins.matomo.org/ForceSSL">Force SSL</a> (improves security by enforcing HTTPS)</li>
</ul><h3>Our promise</h3>

<p><a href="https://shop.matomo.org/refund-policy/"><img src="https://shop.matomo.org/wp-content/uploads/2016/10/money_back-300x294.png" style="width:220px;float:right;margin-bottom:10px;" alt="Our promise to you" /></a>All of our premium features are built on top of Matomo, which means you get all the benefits and features from Matomo on top. Like data ownership, no data limits, being able to host it yourself on premise and use it in the intranet etc. That’s why Matomo is so popular among businesses, corporations and governments. Matomo is used and trusted by over a million websites and apps. Hand-crafted with a lot of attention to detail directly by the makers of Matomo, we are sure you will love this bundle.</p>

<blockquote>
  <p>This is why we give you a <a href="https://shop.matomo.org/refund-policy/">100% unconditional, easy, fast, and hassle-free money back guarantee</a> for 30 days. There are no strings attached.</p>
</blockquote>

<p>So try it now and let us know how you do. We are happy to help you get started and to hear how it changes your business or organization.</p>

<h3>About InnoCraft</h3>

<p>We at <a href="https://www.innocraft.com">InnoCraft</a> are the creators of Matomo and know it better than anyone else. This means all plugins are perfectly integrated into Matomo and come with outstanding features and quality to grow your business. We help our clients get started, configure, monitor and make the most of their Matomo analytics service. We also offer unique analytics products and services that help grow your business and meet the needs of medium and large businesses alike.</p>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => NULL,
          ),
        ),
        'isDownloadable' => false,
        'changelog' => 
        array (
          'url' => '',
        ),
        'consumer' => 
        array (
          'license' => NULL,
          'loginUrl' => 'https://shop.matomo.org/my-account',
        ),
      ),
      25 => 
      array (
        'name' => 'Signup',
        'displayName' => 'Signup',
        'owner' => 'alcalyn',
        'description' => 'Let new users signup on your Matomo instance to track their own website.',
        'homepage' => 'https://github.com/alcalyn/matomo-plugin-signup',
        'createdDateTime' => '2019-04-20 13:04:03',
        'donate' => 
        array (
          'paypal' => 'julien.maulny+paypal@protonmail.com',
          'flattr' => '',
          'bitcoin' => NULL,
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Documentation',
            'key' => 'docs',
            'value' => 'https://github.com/alcalyn/matomo-plugin-signup',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'julien.maulny@protonmail.com',
            'type' => 'email',
          ),
          2 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/alcalyn/matomo-plugin-signup/issues',
            'type' => 'url',
          ),
          3 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/alcalyn/matomo-plugin-signup',
            'type' => 'url',
          ),
          4 => 
          array (
            'name' => 'RSS',
            'key' => 'rss',
            'value' => 'https://github.com/alcalyn/matomo-plugin-signup/releases.atom',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'login',
          1 => 'authentication',
          2 => 'user',
          3 => 'permission',
          4 => 'connect',
          5 => 'signup',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Julien Maulny',
            'email' => 'julien.maulny@protonmail.com',
            'homepage' => 'https://alcalyn.github.io/',
          ),
        ),
        'repositoryUrl' => 'https://github.com/alcalyn/matomo-plugin-signup',
        'lastUpdated' => '2019-06-05 15:08:06',
        'latestVersion' => '0.1.2',
        'numDownloads' => 671,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/Signup/images/0.1.2/0-login.png',
          1 => 'https://plugins.matomo.org/Signup/images/0.1.2/1-signup-user.png',
          2 => 'https://plugins.matomo.org/Signup/images/0.1.2/2-signup-site.png',
          3 => 'https://plugins.matomo.org/Signup/images/0.1.2/3-signup-site-bottom.png',
          4 => 'https://plugins.matomo.org/Signup/images/0.1.2/4-account-created.png',
          5 => 'https://plugins.matomo.org/Signup/images/0.1.2/5-new-user-logged-in.png',
          6 => 'https://plugins.matomo.org/Signup/images/0.1.2/6-new-user-dashboard-with-visits.png',
          7 => 'https://plugins.matomo.org/Signup/images/0.1.2/7-new-user-admin.png',
          8 => 'https://plugins.matomo.org/Signup/images/0.1.2/8-new-user-manage-sites.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '11',
          'numContributors' => '1',
          'lastCommitDate' => '2019-08-23 09:15:40',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '0.1.0',
            'release' => '2019-04-20 13:04:03',
            'requires' => 
            array (
              'piwik' => '>=3.6.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 256,
            'license' => 
            array (
              'name' => 'GPL-3.0+',
              'url' => 'https://plugins.matomo.org/Signup/0.1.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/alcalyn/matomo-plugin-signup/commits/0.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/Signup/download/0.1.0',
          ),
          1 => 
          array (
            'name' => '0.1.2',
            'release' => '2019-06-05 15:08:06',
            'requires' => 
            array (
              'piwik' => '>=3.6.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 415,
            'license' => 
            array (
              'name' => 'GPL-3.0+',
              'url' => 'https://plugins.matomo.org/Signup/0.1.2/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/alcalyn/matomo-plugin-signup/commits/0.1.2',
            'readmeHtml' => 
            array (
              'description' => '

<p>Let new users signup on your Matomo instance to track their own website.</p>

<p>This plugin has been built in the aim to share your Matomo instance with other users.
It let them automatically create an account and a website in order to have
a tracking code and track their own website.</p>

<p><img src="screenshots/1-signup-user.png" alt="1-signup-user.png" /></p>

',
              'faq' => '<p><strong>How I can prevent too many users to sign up?</strong></p>

<p>The plugin allows to disable new users to sign up at any moment.
Go to General settings &gt; Signup section,
uncheck the "Allow new users to signup" checkbox.
New users won\'t be able to signup to your instance until you enable it again.</p>

<p><strong>Does signup users access to my admin or personal data?</strong></p>

<p>No.</p>

<p>Users create an account and a site and the plugin give the user an <code>admin</code> access to his site. They are not superadmin like you.
Thus, he will be able to fully manage his site (edit site, his user data, add new users to manage his site...), <strong>without</strong> accessing your user data, general settings, plugins, or others users site.</p>',
              'documentation' => '',
              'changelog' => '<h3>Version 0.1.1</h3>

<ul><li>[Fixes #1] XSS - Cross Site Scripting on Sign Up plugin (thanks to @asamamax)</li>
</ul><h3>Version 0.1.0</h3>

<ul><li>Allows users to signup and create a site.</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/Signup/download/0.1.2',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/Signup/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      26 => 
      array (
        'name' => 'AnonymousPiwikUsageMeasurement',
        'displayName' => 'Anonymous Piwik Usage Measurement',
        'owner' => 'matomo-org',
        'description' => 'Send anonymized usage data to your own Matomo instance or to any other Matomo',
        'homepage' => 'https://matomo.org',
        'createdDateTime' => '2015-10-19 14:04:02',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Forum',
            'key' => 'forum',
            'value' => 'https://forum.matomo.org',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/matomo-org/plugin-AnonymousPiwikUsageMeasurement/issues',
            'type' => 'url',
          ),
          2 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/matomo-org/plugin-AnonymousPiwikUsageMeasurement',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'piwik',
          1 => 'tracking',
          2 => 'usage',
          3 => 'measurement',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Matomo',
            'email' => 'hello@matomo.org',
            'homepage' => 'https://matomo.org',
          ),
        ),
        'repositoryUrl' => 'https://github.com/matomo-org/plugin-AnonymousPiwikUsageMeasurement',
        'lastUpdated' => '2019-06-05 07:20:04',
        'latestVersion' => '3.1.0',
        'numDownloads' => 8985,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/AnonymousPiwikUsageMeasurement/images/3.1.0/AdminSettings.png',
          1 => 'https://plugins.matomo.org/AnonymousPiwikUsageMeasurement/images/3.1.0/UserSettings.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '117',
          'numContributors' => '7',
          'lastCommitDate' => '2019-08-01 18:49:34',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2016-09-13 21:18:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-dev,<4.0.0-dev',
            ),
            'numDownloads' => 486,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-AnonymousPiwikUsageMeasurement/commits/3.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AnonymousPiwikUsageMeasurement/download/3.0.0',
          ),
          1 => 
          array (
            'name' => '3.0.1',
            'release' => '2017-06-20 07:16:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-dev,<4.0.0-dev',
            ),
            'numDownloads' => 47,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-AnonymousPiwikUsageMeasurement/commits/3.0.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AnonymousPiwikUsageMeasurement/download/3.0.1',
          ),
          2 => 
          array (
            'name' => '3.0.2',
            'release' => '2017-06-21 08:02:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-dev,<4.0.0-dev',
            ),
            'numDownloads' => 918,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-AnonymousPiwikUsageMeasurement/commits/3.0.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AnonymousPiwikUsageMeasurement/download/3.0.2',
          ),
          3 => 
          array (
            'name' => '3.0.3',
            'release' => '2018-01-09 21:12:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-dev,<4.0.0-dev',
            ),
            'numDownloads' => 2917,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-AnonymousPiwikUsageMeasurement/commits/3.0.3',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AnonymousPiwikUsageMeasurement/download/3.0.3',
          ),
          4 => 
          array (
            'name' => '3.1.0',
            'release' => '2019-06-05 07:20:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-dev,<4.0.0-dev',
            ),
            'numDownloads' => 463,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AnonymousPiwikUsageMeasurement/3.1.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-AnonymousPiwikUsageMeasurement/commits/3.1.0',
            'readmeHtml' => 
            array (
              'description' => '

<p>Track usage of your Matomo service into up to two Matomos:</p>

<ul><li>your own Matomo (can be configured optionally)</li>
<li>a custom Matomo (can be configured optionally)</li>
</ul><h3>What is Matomo doing to make sure the data is anonymized?</h3>

<p>We are very careful in what we track and we make sure to anonymize data that could contain user data.</p>

<ul><li>We overwrite the page title as the title could contain the name of the viewed website</li>
<li>We remove any referrer information</li>
<li>We replace URL paramaters with a predefined value apart from a few whitelisted ones to make sure no actual token_auth, CSRF token or user defined value will be tracked</li>
<li>We do not just track any outlinks or downloads</li>
</ul><p>We track any information as efficient as possible to not slow down your Matomo. If you have already performance problems with your Matomo we recommend to not install this plugin though.</p>

<h3>Which data is tracked?</h3>

<p>When the plugin is activated, the following data will be tracked:</p>

<ul><li>The pages and reports that are viewed</li>
<li>The visitors\' software and devices data like the used browser and the resolution</li>
<li>Some clicks or interactions with certain selectors or buttons. For example we track an event when a segment is selected but we do not track the actual segment.</li>
<li>In a daily task we track the following data:

<ul><li>Matomo version</li>
<li>PHP version</li>
<li>Number of websites</li>
<li>Number of users</li>
<li>Number of segments</li>
<li>How often which API method was called (only plugin name and method name but no parameters) and how long the API calls took on average.</li>
</ul></li>
</ul>',
              'faq' => '<p><strong>Are there any prerequisites?</strong></p>

<ul><li>If tracking to a custom Matomo installation is enabled, your Matomo installation and your Matomo users must be able to connect to this instance</li>
<li>If tracking to a custom Matomo installation is enabled and your Matomo is served via HTTPS, the custom Matomo installation must be available via HTTPS as well</li>
</ul><p><strong>Why was this plugin created?</strong></p>

<p>This plugin was created to provide a simple way to measure how Matomo product itself is being used.</p>',
              'documentation' => '',
              'changelog' => '<ul><li>3.1.0 No longer send optionally any usage data to Matomo</li>
<li>3.0.3 Renaming from Piwik to Matomo</li>
<li>3.0.0 Compatibility with Matomo 3</li>
<li>0.2.1 Track MySQL server version in a custom variable.</li>
<li>0.2.0 Add possibility to enable/disable anonymization and tracking user login as userID</li>
<li>0.1.4 Fixed a bug that failed to track under HTTPS under circumstances</li>
<li>0.1.3 Updated plugin description only</li>
<li>0.1.2 Bugfixes</li>
<li>0.1.1 Track average API executime time</li>
<li>0.1.0 Initial release</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/AnonymousPiwikUsageMeasurement/download/3.1.0',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/AnonymousPiwikUsageMeasurement/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      27 => 
      array (
        'name' => 'CloudflareLocationProvider',
        'displayName' => 'Cloudflare Location Provider',
        'owner' => 'aholkner',
        'description' => 'Provides GeoIP location data from Cloudflare request headers',
        'homepage' => NULL,
        'createdDateTime' => '2019-02-05 00:48:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'alex',
            'email' => 'alex@studiodrydock.com',
            'homepage' => NULL,
          ),
        ),
        'repositoryUrl' => 'https://github.com/aholkner/matomo-cloudflare-location-provider',
        'lastUpdated' => '2019-06-02 07:38:03',
        'latestVersion' => '0.1.2',
        'numDownloads' => 1732,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '4',
          'numContributors' => '1',
          'lastCommitDate' => '2019-06-02 07:36:21',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '0.1.0',
            'release' => '2019-02-05 00:48:04',
            'requires' => 
            array (
              'piwik' => '>=3.8.1-stable,<4.0.0-b1',
            ),
            'numDownloads' => 936,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/aholkner/matomo-cloudflare-location-provider/commits/0.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/CloudflareLocationProvider/download/0.1.0',
          ),
          1 => 
          array (
            'name' => '0.1.2',
            'release' => '2019-06-02 07:38:03',
            'requires' => 
            array (
              'piwik' => '>=3.8.1-stable,<4.0.0-b1',
            ),
            'numDownloads' => 796,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/aholkner/matomo-cloudflare-location-provider/commits/0.1.2',
            'readmeHtml' => 
            array (
              'description' => '

<p>Provides country-code geolocation for Matomo (Piwik) using Cloudflare headers.  Use this
instead of the default GeoIP2 plugin if all tracking requests are being routed through Cloudflare.</p>

<p>This plugin trusts the country code provided in the <code>HTTP_CF_IPCOUNTRY</code> header injected by 
Cloudflare, and does not require any GeoIP database.  <strong>Ensure you enable IP Geolocation in 
the Cloudflare "Network" dashboard.</strong></p>

<p>If requests are tracked outside of Cloudflare, no geolocation information will be available.</p>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<p>0.1.0 Initial release</p>',
            ),
            'download' => '/api/2.0/plugins/CloudflareLocationProvider/download/0.1.2',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/CloudflareLocationProvider/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      28 => 
      array (
        'name' => 'IP2Location',
        'displayName' => 'IP 2 Location',
        'owner' => 'ip2location',
        'description' => 'Use IP2Location geolocation database to lookup for accurate visitor location in Matomo (Piwik).',
        'homepage' => 'http://www.ip2location.com/developers/piwik',
        'createdDateTime' => '2014-04-23 09:24:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Wiki',
            'key' => 'wiki',
            'value' => 'https://github.com/ip2location/ip2location-piwik/wiki',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'support@ip2location.com',
            'type' => 'email',
          ),
          2 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/ip2location/ip2location-piwik/issues',
            'type' => 'url',
          ),
          3 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/ip2location/ip2location-piwik',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'IP2Location',
          1 => 'geolocation',
          2 => 'visitor location',
          3 => 'ip to location',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'IP2Location',
            'email' => 'support@ip2location.com',
            'homepage' => 'http://www.ip2location.com',
          ),
        ),
        'repositoryUrl' => 'https://github.com/ip2location/ip2location-piwik',
        'lastUpdated' => '2019-05-30 07:18:04',
        'latestVersion' => '3.1.14',
        'numDownloads' => 50255,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/IP2Location/images/3.1.14/01_Settings.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '69',
          'numContributors' => '4',
          'lastCommitDate' => '2019-07-18 08:35:39',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '2.3.1',
            'release' => '2016-12-21 04:54:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1',
              'php' => '>=5.3.20',
            ),
            'numDownloads' => 7,
            'license' => 
            array (
              'name' => 'GPL 3.0',
              'url' => 'https://plugins.matomo.org/IP2Location/2.3.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/ip2location/ip2location-piwik/commits/2.3.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/IP2Location/download/2.3.1',
          ),
          1 => 
          array (
            'name' => '2.3.2',
            'release' => '2016-12-21 05:40:03',
            'requires' => 
            array (
              'piwik' => '>=2.12.0,>=3.0.0-b1',
              'php' => '>=5.3.20',
            ),
            'numDownloads' => 395,
            'license' => 
            array (
              'name' => 'GPL 3.0',
              'url' => 'https://plugins.matomo.org/IP2Location/2.3.2/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/ip2location/ip2location-piwik/commits/2.3.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/IP2Location/download/2.3.2',
          ),
          2 => 
          array (
            'name' => '3.0.0',
            'release' => '2016-12-23 01:40:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1',
            ),
            'numDownloads' => 4570,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/ip2location/ip2location-piwik/commits/3.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/IP2Location/download/3.0.0',
          ),
          3 => 
          array (
            'name' => '3.1.0',
            'release' => '2017-06-15 08:16:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1',
            ),
            'numDownloads' => 1145,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/ip2location/ip2location-piwik/commits/3.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/IP2Location/download/3.1.0',
          ),
          4 => 
          array (
            'name' => '3.1.2',
            'release' => '2017-07-12 01:38:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1',
            ),
            'numDownloads' => 732,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/ip2location/ip2location-piwik/commits/3.1.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/IP2Location/download/3.1.2',
          ),
          5 => 
          array (
            'name' => '3.1.3',
            'release' => '2017-07-26 02:24:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1',
            ),
            'numDownloads' => 710,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/ip2location/ip2location-piwik/commits/3.1.3',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/IP2Location/download/3.1.3',
          ),
          6 => 
          array (
            'name' => '3.1.4',
            'release' => '2017-08-07 03:10:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1',
            ),
            'numDownloads' => 3082,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/ip2location/ip2location-piwik/commits/3.1.4',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/IP2Location/download/3.1.4',
          ),
          7 => 
          array (
            'name' => '3.1.5',
            'release' => '2017-11-01 06:00:05',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1',
            ),
            'numDownloads' => 815,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/ip2location/ip2location-piwik/commits/3.1.5',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/IP2Location/download/3.1.5',
          ),
          8 => 
          array (
            'name' => '3.1.6',
            'release' => '2017-11-14 23:14:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1',
            ),
            'numDownloads' => 3282,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/ip2location/ip2location-piwik/commits/3.1.6',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/IP2Location/download/3.1.6',
          ),
          9 => 
          array (
            'name' => '3.1.8',
            'release' => '2018-02-04 23:24:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1',
            ),
            'numDownloads' => 8543,
            'license' => 
            array (
              'name' => 'GPL-3.0+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/ip2location/ip2location-piwik/commits/3.1.8',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/IP2Location/download/3.1.8',
          ),
          10 => 
          array (
            'name' => '3.1.10',
            'release' => '2019-05-27 04:56:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1',
            ),
            'numDownloads' => 207,
            'license' => 
            array (
              'name' => 'GPL-3.0+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/ip2location/ip2location-piwik/commits/3.1.10',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/IP2Location/download/3.1.10',
          ),
          11 => 
          array (
            'name' => '3.1.11',
            'release' => '2019-05-28 07:38:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1',
            ),
            'numDownloads' => 342,
            'license' => 
            array (
              'name' => 'GPL-3.0+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/ip2location/ip2location-piwik/commits/3.1.11',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/IP2Location/download/3.1.11',
          ),
          12 => 
          array (
            'name' => '3.1.12',
            'release' => '2019-05-29 22:46:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1',
            ),
            'numDownloads' => 57,
            'license' => 
            array (
              'name' => 'GPL-3.0+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/ip2location/ip2location-piwik/commits/3.1.12',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/IP2Location/download/3.1.12',
          ),
          13 => 
          array (
            'name' => '3.1.13',
            'release' => '2019-05-30 06:10:06',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1',
            ),
            'numDownloads' => 28,
            'license' => 
            array (
              'name' => 'GPL-3.0+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/ip2location/ip2location-piwik/commits/3.1.13',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/IP2Location/download/3.1.13',
          ),
          14 => 
          array (
            'name' => '3.1.14',
            'release' => '2019-05-30 07:18:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1',
            ),
            'numDownloads' => 3032,
            'license' => 
            array (
              'name' => 'GPL-3.0+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/ip2location/ip2location-piwik/commits/3.1.14',
            'readmeHtml' => 
            array (
              'description' => '

<p>This IP2Location plugin enables more accurate location lookup in your Matomo (Piwik) visitor log.</p>

<p>You need a IP2Location BIN database to make this plugin works. Database is available for free at</p>

<p>https://lite.ip2location.com or https://www.ip2location.com for a commercial database.</p>

',
              'faq' => '<p><strong>How to I configure the plugin?</strong></p>

<p>Login as administrator, then go to System &gt; IP2Location.</p>

<p><strong>Where to download IP2Location database?</strong></p>

<p>You can download IP2Location database for free at https://lite.ip2location.com or commercial version from https://www.ip2location.com</p>

<p><strong>Can I use IP2Location Web service?</strong></p>

<p>Yes, please purchase credits from https://www.ip2location.com/web-service and insert your API key in the settings page.</p>',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => '/api/2.0/plugins/IP2Location/download/3.1.14',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/IP2Location/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      29 => 
      array (
        'name' => 'TrackingCLI',
        'displayName' => 'Tracking CLI',
        'owner' => 'plesk',
        'description' => 'Import tracking data to Matomo via CLI and stdin',
        'homepage' => 'https://github.com/plesk/matomo-tracking-cli',
        'createdDateTime' => '2019-04-26 08:04:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Documentation',
            'key' => 'docs',
            'value' => 'https://github.com/plesk/matomo-tracking-cli/blob/master/README.md',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/plesk/matomo-tracking-cli/issues',
            'type' => 'url',
          ),
          2 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/plesk/matomo-tracking-cli',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'import',
          1 => 'tracking',
          2 => 'cli',
          3 => 'stdin',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Plesk',
            'email' => NULL,
            'homepage' => 'https://www.plesk.com',
          ),
        ),
        'repositoryUrl' => 'https://github.com/plesk/matomo-tracking-cli',
        'lastUpdated' => '2019-05-28 07:30:06',
        'latestVersion' => '1.0.1',
        'numDownloads' => 514,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '14',
          'numContributors' => '1',
          'lastCommitDate' => '2019-05-28 07:29:10',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '1.0.0',
            'release' => '2019-04-26 08:04:05',
            'requires' => 
            array (
              'piwik' => '>=3.9.1-stable,<4.0.0-b1',
            ),
            'numDownloads' => 147,
            'license' => 
            array (
              'name' => 'Apache-2.0',
              'url' => 'https://plugins.matomo.org/TrackingCLI/1.0.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/plesk/matomo-tracking-cli/commits/1.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/TrackingCLI/download/1.0.0',
          ),
          1 => 
          array (
            'name' => '1.0.1',
            'release' => '2019-05-28 07:30:06',
            'requires' => 
            array (
              'piwik' => '>=3.9.1-stable,<4.0.0-b1',
            ),
            'numDownloads' => 367,
            'license' => 
            array (
              'name' => 'Apache-2.0',
              'url' => 'https://plugins.matomo.org/TrackingCLI/1.0.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/plesk/matomo-tracking-cli/commits/1.0.1',
            'readmeHtml' => 
            array (
              'description' => '

<p>Import tracking data to Matomo via CLI and stdin.</p>

<h3>Interface</h3>

<pre><code>./console help trackingcli:import
</code></pre>

<pre><code>Usage:
 trackingcli:import [-s|--idsite="..."] [-c|--columns="..."] [-d|--delimeter[="..."]] [-z|--batchsize[="..."]] [inputfile]

Arguments:
 inputfile             Path to input file or \'-\' for stdin (default: "-")

Options:
 --idsite (-s)         Matomo site ID
 --columns (-c)        Columns map
                           Format: matomoApiArgumentName1|matomoApiArgumentName2|...
                           Example: url|action_name|ua
                           See https://developer.matomo.org/api-reference/tracking-api for details
 --delimeter (-d)      Columns delimeter
                           Format: s - character, \\digits - the character with the given decimal code
                           Example: |
                           Example: \\0 (default: "\\\\29")
 --batchsize (-z)      Batch size when importing (default: 100)
 --help (-h)           Display this help message
 --quiet (-q)          Do not output any message
 --verbose (-v|vv|vvv) Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
 --version (-V)        Display this application version
 --ansi                Force ANSI output
 --no-ansi             Disable ANSI output
</code></pre>

<h3>Example</h3>

<p>data.txt:</p>

<pre><code>2019-04-20 05:44:00|Page title 1|http://test.com#1|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.146 Safari/537.36
2019-04-20 05:44:00|Page title 2|http://test.com/foo/bar|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.146 Safari/537.36
2019-04-20 05:44:00|Page title 3|http://test.com/test3#3|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.146 Safari/537.36
</code></pre>

<p>import:</p>

<pre><code>./console -vvv trackingcli:import -s1 -c\'cdt|action_name|url|ua\' -d\'|\' -z2 &lt; data.txt
Success
Requests imported: 3
Memory peak usage: 23068672
</code></pre>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<h2>1.0.1</h2>

<ul><li>BUGFIX The import is failed if null ASCII delimeter is used</li>
<li>BUGFIX Empty input lines are not ignored</li>
<li>MINOR Changelog was added</li>
</ul><h2>1.0.0</h2>

<p>Initial version</p>',
            ),
            'download' => '/api/2.0/plugins/TrackingCLI/download/1.0.1',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/TrackingCLI/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      30 => 
      array (
        'name' => 'BeeLikedDBIP',
        'displayName' => 'Bee Liked DBIP',
        'owner' => 'BeeLiked',
        'description' => 'Use DB-IP geolocation API to lookup for accurate visitor location.',
        'homepage' => 'http://beeliked.com/plugins/piwik/db-ip',
        'createdDateTime' => '2019-05-16 13:30:05',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Wiki',
            'key' => 'wiki',
            'value' => 'https://github.com/BeeLiked/db-ip-piwik/wiki',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/BeeLiked/db-ip-piwik/issues',
            'type' => 'url',
          ),
          2 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/BeeLiked/db-ip-piwik',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'geolocation',
          1 => 'visitor location',
          2 => 'ip to location',
          3 => 'dbip',
          4 => 'beeliked',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'BeeLiked',
            'email' => 'support@beeliked.com',
            'homepage' => 'https://www.beeliked.com',
          ),
        ),
        'repositoryUrl' => 'https://github.com/BeeLiked/db-ip-piwik',
        'lastUpdated' => '2019-05-16 15:26:07',
        'latestVersion' => '2.0.2',
        'numDownloads' => 644,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/BeeLikedDBIP/images/2.0.2/DB-IP_-_Settings.png',
          1 => 'https://plugins.matomo.org/BeeLikedDBIP/images/2.0.2/Geolocation_-_Location_Provider.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '5',
          'numContributors' => '1',
          'lastCommitDate' => '2019-05-16 15:24:44',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '2.0.1',
            'release' => '2019-05-16 13:30:05',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1',
              'php' => '>= 5.5.9',
            ),
            'numDownloads' => 7,
            'license' => 
            array (
              'name' => 'GPL-3.0+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/BeeLiked/db-ip-piwik/commits/2.0.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/BeeLikedDBIP/download/2.0.1',
          ),
          1 => 
          array (
            'name' => '2.0.2',
            'release' => '2019-05-16 15:26:07',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1',
              'php' => '>= 5.5.9',
            ),
            'numDownloads' => 637,
            'license' => 
            array (
              'name' => 'GPL-3.0+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/BeeLiked/db-ip-piwik/commits/2.0.2',
            'readmeHtml' => 
            array (
              'description' => '

<p>This non-official DB-IP plugin adds an extra Location Provider to Geolocation, providing better accuracy for user location lookup in your Matomo (Piwik) visitor log.</p>

<p>It uses the free API by default which allows a quota of up to 1000 requests per day. For more requests, a commercial DB-IP API Key must be purschased. More details at: https://db-ip.com</p>

',
              'faq' => '<p><strong>How to I configure the plugin?</strong></p>

<p>After installed, login as administrator.</p>

<ul><li>Go to <strong>System</strong> &gt; <strong>DB-IP</strong> to configure your <strong>API Key</strong>.</li>
<li>Go to <strong>Geolocation</strong> to enable <strong>BeeLikedDBIP</strong> as a <strong>Location Provider</strong>.</li>
</ul><p><strong>How can I increase the limit of queries per day?</strong></p>

<p>Purchase a commercial API Key on https://db-ip.com and insert it in the DB-IP settings page.</p>

<p><strong>What location data can this plugin retrieve?</strong></p>

<p>This plugin currently supports the following properties: Continent, Country, Region and City.</p>',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => '/api/2.0/plugins/BeeLikedDBIP/download/2.0.2',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/BeeLikedDBIP/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      31 => 
      array (
        'name' => 'GroupPermissions',
        'displayName' => 'Group Permissions',
        'owner' => 'MichaelHeerklotz',
        'description' => 'Manage user permissions with groups.',
        'homepage' => 'https://github.com/MichaelHeerklotz/plugin-GroupPermissions',
        'createdDateTime' => '2018-08-22 13:40:06',
        'donate' => 
        array (
          'paypal' => 'michael.heerklotz@web.de',
          'bitcoin' => NULL,
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'group',
          1 => 'user',
          2 => 'GroupPermissions',
          3 => 'permission',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Michael Heerklotz',
            'email' => 'michael.heerklotz@web.de',
            'homepage' => 'https://www.5hd.de',
          ),
        ),
        'repositoryUrl' => 'https://github.com/MichaelHeerklotz/plugin-GroupPermissions',
        'lastUpdated' => '2019-05-03 17:14:06',
        'latestVersion' => '3.9.1',
        'numDownloads' => 3313,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => NULL,
          'numContributors' => NULL,
          'lastCommitDate' => '2019-05-03 17:16:09',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.2',
            'release' => '2018-08-22 13:40:06',
            'requires' => 
            array (
              'piwik' => '>=3.1.0-rc1,<4.0.0-b1',
            ),
            'numDownloads' => 370,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/GroupPermissions/3.0.2/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/MichaelHeerklotz/plugin-GroupPermissions/commits/3.0.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/GroupPermissions/download/3.0.2',
          ),
          1 => 
          array (
            'name' => '3.6.0',
            'release' => '2018-09-07 07:24:03',
            'requires' => 
            array (
              'piwik' => '>=3.6.0,<4.0.0-b1',
            ),
            'numDownloads' => 6,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/GroupPermissions/3.6.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/MichaelHeerklotz/plugin-GroupPermissions/commits/3.6.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/GroupPermissions/download/3.6.0',
          ),
          2 => 
          array (
            'name' => '3.6.1',
            'release' => '2018-09-07 08:30:04',
            'requires' => 
            array (
              'piwik' => '>=3.6.0,<4.0.0-b1',
            ),
            'numDownloads' => 2266,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/GroupPermissions/3.6.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/MichaelHeerklotz/plugin-GroupPermissions/commits/3.6.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/GroupPermissions/download/3.6.1',
          ),
          3 => 
          array (
            'name' => '3.9.1',
            'release' => '2019-05-03 17:14:06',
            'requires' => 
            array (
              'piwik' => '>=3.6.0,<4.0.0-b1',
            ),
            'numDownloads' => 671,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/GroupPermissions/3.9.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/MichaelHeerklotz/plugin-GroupPermissions/commits/3.9.1a',
            'readmeHtml' => 
            array (
              'description' => '

<p>This plugin allows to manage user permissions with groups.</p>

',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<ul><li><p>3.9.1</p>

<ul><li>Fixed "noaccess" check for newer Matomo versions</li>
</ul></li>
<li><p>3.6.1</p>

<ul><li>Fixed Issue #1 reported by EmTeedee</li>
</ul></li>
<li><p>3.6.0</p>

<ul><li>Added support for \'write\' access</li>
<li>Compatibility with Matomo 3.6.0</li>
</ul></li>
<li><p>3.0.2</p>

<ul><li>First stable release</li>
</ul></li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/GroupPermissions/download/3.9.1',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/GroupPermissions/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      32 => 
      array (
        'name' => 'QueuedTracking',
        'displayName' => 'Queued Tracking',
        'owner' => 'matomo-org',
        'description' => 'Scale your large traffic Matomo service by queuing tracking requests in Redis or MySQL for better performance and reliability when experiencing peaks.',
        'homepage' => 'https://matomo.org',
        'createdDateTime' => '2015-01-05 23:28:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Wiki',
            'key' => 'wiki',
            'value' => 'https://github.com/matomo-org/plugin-QueuedTracking/wiki',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Forum',
            'key' => 'forum',
            'value' => 'https://forum.matomo.org',
            'type' => 'url',
          ),
          2 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'hello@matomo.org',
            'type' => 'email',
          ),
          3 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/matomo-org/plugin-QueuedTracking/issues',
            'type' => 'url',
          ),
          4 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/matomo-org/plugin-QueuedTracking',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'tracker',
          1 => 'tracking',
          2 => 'queue',
          3 => 'redis',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Matomo',
            'email' => 'hello@matomo.org',
            'homepage' => 'https://matomo.org',
          ),
        ),
        'repositoryUrl' => 'https://github.com/matomo-org/plugin-QueuedTracking',
        'lastUpdated' => '2019-04-30 04:04:05',
        'latestVersion' => '3.3.5',
        'numDownloads' => 27351,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/QueuedTracking/images/3.3.5/Settings.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '226',
          'numContributors' => '9',
          'lastCommitDate' => '2019-08-26 01:33:31',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2016-09-13 22:16:08',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 512,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-QueuedTracking/commits/3.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/QueuedTracking/download/3.0.0',
          ),
          1 => 
          array (
            'name' => '3.0.1',
            'release' => '2016-11-15 22:36:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 5442,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-QueuedTracking/commits/3.0.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/QueuedTracking/download/3.0.1',
          ),
          2 => 
          array (
            'name' => '3.1.0',
            'release' => '2017-11-20 09:08:05',
            'requires' => 
            array (
              'piwik' => '>=3.2.1-b1,<4.0.0-b1',
            ),
            'numDownloads' => 3011,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-QueuedTracking/commits/3.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/QueuedTracking/download/3.1.0',
          ),
          3 => 
          array (
            'name' => '3.2.0',
            'release' => '2018-04-16 02:42:04',
            'requires' => 
            array (
              'piwik' => '>=3.2.1-b1,<4.0.0-b1',
            ),
            'numDownloads' => 1024,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-QueuedTracking/commits/3.2.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/QueuedTracking/download/3.2.0',
          ),
          4 => 
          array (
            'name' => '3.2.1',
            'release' => '2018-05-30 21:18:04',
            'requires' => 
            array (
              'piwik' => '>=3.2.1-b1,<4.0.0-b1',
            ),
            'numDownloads' => 1056,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-QueuedTracking/commits/3.2.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/QueuedTracking/download/3.2.1',
          ),
          5 => 
          array (
            'name' => '3.3.1',
            'release' => '2018-08-15 04:16:04',
            'requires' => 
            array (
              'piwik' => '>=3.5.0,<4.0.0-b1',
            ),
            'numDownloads' => 3028,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-QueuedTracking/commits/3.3.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/QueuedTracking/download/3.3.1',
          ),
          6 => 
          array (
            'name' => '3.3.2',
            'release' => '2019-01-07 00:58:14',
            'requires' => 
            array (
              'piwik' => '>=3.8.0-rc2,<4.0.0-b1',
            ),
            'numDownloads' => 2154,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-QueuedTracking/commits/3.3.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/QueuedTracking/download/3.3.2',
          ),
          7 => 
          array (
            'name' => '3.3.3',
            'release' => '2019-01-31 22:16:05',
            'requires' => 
            array (
              'piwik' => '>=3.8.0-rc2,<4.0.0-b1',
            ),
            'numDownloads' => 1757,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-QueuedTracking/commits/3.3.3',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/QueuedTracking/download/3.3.3',
          ),
          8 => 
          array (
            'name' => '3.3.4',
            'release' => '2019-04-26 00:06:04',
            'requires' => 
            array (
              'piwik' => '>=3.8.0-rc2,<4.0.0-b1',
            ),
            'numDownloads' => 199,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/QueuedTracking/3.3.4/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-QueuedTracking/commits/3.3.4',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/QueuedTracking/download/3.3.4',
          ),
          9 => 
          array (
            'name' => '3.3.5',
            'release' => '2019-04-30 04:04:05',
            'requires' => 
            array (
              'piwik' => '>=3.8.0-rc2,<4.0.0-b1',
            ),
            'numDownloads' => 1743,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/QueuedTracking/3.3.5/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-QueuedTracking/commits/3.3.5',
            'readmeHtml' => 
            array (
              'description' => '

<p>This plugin writes all tracking requests into a <a href="http://redis.io/">Redis</a> instance or a MySQL queue instead of directly into the database.
This is useful if you have too many requests per second and your server cannot handle all of them directly (eg too many connections in nginx or MySQL).
It is also useful if you experience peaks sometimes. Those peaks can be handled much better by using this queue.
Writing a tracking request into the queue is very fast (a tracking request takes in total a few milliseconds) compared to a regular tracking request (that takes multiple hundreds of milliseconds). The queue makes sure to process the tracking requests whenever possible even if it takes a while to process all requests after there was a peak.</p>

<p>Have a look at the FAQ for more information.</p>

',
              'faq' => '<p><strong>What are the requirements for this plugin?</strong></p>

<p>We recommend to use the plugin with Redis, but it may work just as well by using the MySQL database which is already used
for Matomo anyway.</p>

<ul><li>Recommended <a href="http://redis.io/">Redis server 2.8+</a> - <a href="http://redis.io/topics/quickstart">Redis quickstart</a></li>
<li>Recommended <a href="https://github.com/nicolasff/phpredis">phpredis PHP extension</a> - <a href="https://github.com/nicolasff/phpredis#installingconfiguring">Install</a></li>
<li>Transactions are used and must be supported by the SQL database.</li>
</ul><p><strong>Where can I configure and enable the queue?</strong></p>

<p>In your Piwik instance go to "Administration =&gt; General Settings". There is a config section for this plugin.</p>

<p><strong>When will a queued tracking request be processed?</strong></p>

<p>First you should know that multiple tracking requests will be inserted into the database at once using
<a href="http://developer.piwik.org/api-reference/tracking-api#bulk-tracking">bulk tracking</a> as soon as a configurable number
of requests is queued. By default we will check whether enough requests are queued during a regular tracking request
and start processing them right after sending a response to the browser to make sure a user won\'t have to wait until
the queue has finished to process all requests. Have a look at this graph to see how it works:</p>

<p><img src="https://raw.githubusercontent.com/piwik/plugin-QueuedTracking/master/docs/How_it_works.png" alt="How it works" /></p>

<p><strong>I do not want to process queued requests within a tracking request, what shall I do?</strong></p>

<p>Don\'t worry, if this solution doesn\'t work out for you for some reason you can disable it and process all queued
requests using the <a href="http://developer.piwik.org/guides/piwik-on-the-command-line">Piwik console</a>. Just follow these steps:</p>

<ul><li>Disable the setting "Process during tracking request" in the Piwik UI under "Settings =&gt; Plugin Settings"</li>
<li>Setup a cronjob that executes the command <code>./console queuedtracking:process</code> for instance every minute</li>
<li>That\'s it</li>
</ul><p>The <code>queuedtracking:process</code> command will make sure to process all queued tracking requests whenever possible and the
command will exit as soon as there are not enough requests queued anymore. That\'s why you should setup a cronjob to start
the command every minute as it will just start processing again as soon as there are enough requests. Be aware that it won\'t
speed up processing queued requests when starting this command multiple times. Only one process will actually replay
queued requests at a time.</p>

<p>Example crontab entry that starts the processor every minute:</p>

<p><code>* * * * * cd /piwik &amp;&amp; ./console queuedtracking:process &gt;/dev/null 2&gt;&amp;1</code></p>

<p><strong>Can I keep track of the state of the queue?</strong></p>

<p>Yes, you can. Just execute the command <code>./console queuedtracking:monitor</code>. This will show the current state of the queue.</p>

<p><strong>Can I improve the speed of inserting requests from the Redis queue to the database?</strong></p>

<p>Yes, you can by adding more workers. By default only one worker is activated at a time and only one worker processes tracking requests from Redis to the database. When inserting tracking requests into the database, at time of writing this, about 80% of the time is spent in PHP and the database might be rather bored. If you have multiple CPUs available on your server you can add more workers. You can do this by going in the Piwik Admin interface to "Plugin Settings". There will be a setting "Number of queue workers". Increase this number to the number of CPUs you want to dedeciate for processing requests. Best practice is to add more workers step by step. So first increase this number to 2 and check if the tracking request insertions is fast enough for you. If not and you have more CPUs available, increase the number again.</p>

<p>When using multiple workers it might be worth to lower the number of "Number of requests to process" to eg 15 in "Plugin Settings". By default 25 requests are inserted in one step by using transactions. This means different workers might have to wait for each other. By lowering that number each worker will block the DB for less time.</p>

<p>If you process requests from the command line via <code>./console queuedtracking:process</code> make sure to always start enough workers. Each time you execute this command one worker will be started. If already enough workers are in process no new worker will be started and the command just finishes immediately.</p>

<p><strong>How fast are the requests inserted from Redis to the Database?</strong></p>

<p>This very much depends on your setup and hardware. With fast CPUs you can achive up to 250req/s with 1 worker, 400req/s with 2 workers and 1500req/s with 8 workers (tested on a AWS c3.x2large instance).</p>

<p><strong>How should the redis server be configured?</strong></p>

<p>Make sure to have enough memory to save all tracking requests in the queue. One tracking request in the queue takes about 2KB,
20.000 tracking requests take about 50MB. All tracking requests of all websites are stored in the same queue.
There should be only one Redis server to make sure the data will be replayed in the same order as they were recorded.
If you want to configure Redis HA (High Availability) it is possible to use Redis Sentinel see further down.
We currently write into the Redis default database by default but you can configure to use a different one.</p>

<p><strong>Why do some tests fail on my local Piwik instance?</strong></p>

<p>Make sure the requirements mentioned above are met and Redis needs to run on 127.0.0.1:6379 with no password for the
integration tests to work. It will use the database "15" and the tests may flush all data it contains. Make sure
it does not contain any important data.</p>

<p><strong>What if I want to disable the queue?</strong></p>

<p>You might want to disable the queue at some point but there are still some pending requests in the queue. We recommend to
change the "Number of requests to process" in plugin settings to "1" and process all requests using the command
<code>./console queuedtracking:process</code> shortly before disabling the queue and directly afterwards. It is still possible to
process remaining request once the queue is disabled but new tracking requests won\'t be written into the queue.</p>

<p><strong>How can I access the queued data?</strong></p>

<p><strong>Redis</strong>
You can either acccess data on the command line via <code>redis-cli</code> or use a Redis monitor like <a href="https://github.com/ErikDubbelboer/phpRedisAdmin">phpRedisAdmin</a>.
In case you are using something like a Redis monitor make sure it is not accessible by everyone.</p>

<p><strong>MySQL</strong>
There will be some DB tables in regular Matomo DB containing <code>queuedtracking_list_*</code>. Depending on your DB prefix, the name
of the tables might be for example <code>matomo_queuedtracking_list_*</code>. Locks are stored in <code>queuedtracking_queue</code>.</p>

<p><strong>The processor won\'t start processing again as it thinks another processor is processing the data already, what can I do?</strong></p>

<p>First make sure there is actually no processor processing any requests. For example by executing the command
<code>./console queuedtracking:monitor</code>. In case you are using the command line to process tracking requests make sure there
is no processer running using the Linux command <code>ps</code>. If you are sure there is no process running you can release the lock
by executing the command <code>./console queuedtracking:lock-status</code>. This will output more information which locks are in use and how to unlock them. Afterwards everything should work as normal again.
You should actually never have to do this as a lock automatically expires after a while. It just may take a while depending
on the amount of requests you are importing.</p>

<p><strong>How can I test my Redis / MySQL / QueuedTracking setup in case I\'m getting errors?</strong></p>

<p>There is a command to test some the connection to Redis as well as some needed features: <code>./console queuedtracking:test</code>.</p>

<p>It might directly give you an error message if something goes wrong that helps you to resolve the issue. If your queue
is always locked you might be as well interested in executing <code>.console queuedtracking:lock-status</code>.</p>

<p><strong>How can I debug in case something goes wrong?</strong></p>

<ul><li>Use the command <code>./console queuedtracking:monitor</code> to view the current state of all workers</li>
<li>Use the command <code>./console queuedtracking:lock-status</code> to view the current state of all locks</li>
<li>Set the option <code>-vvv</code> when processing via <code>./console queuedtracking:process -vvv</code> to enable the tracker debug mode for this run. This will print detailed information to screen.</li>
<li>Enable tracker mode in <code>config.ini.php</code> via <code>[Tracker] debug=1</code> if processing requests during tracking is enabled.</li>
<li>Use the command <code>./console queuedtracking:print-queued-requests</code> to view the next requests to process in each queue. If you execute this command twice within 1-10 minutes, and it outputs the same, the queue is not being processed most likely indicating a problem.</li>
<li>You can add the tracking parameter <code>&amp;queuedtracking=0</code> to the tracking request to insert a tracking request directly into the database instead of into the queued tracking handler</li>
</ul><p><strong>I am using the Log Importer in combination with Queued Tracking, is there something to consider?</strong></p>

<p>Yes, we recommend to set the "Number of requests to process" to <code>1</code> as the log importer usually sends multiple requests at once using bulk tracking already.</p>

<p><strong>How can I configure the QueuedTracking plugin to use Redis Sentinel?</strong></p>

<p>You can enable the Sentinel in the plugin settings. Make sure to specify the correct Sentinel "master" name.</p>

<p>When using Sentinel, the <code>phpredis</code> extension is not needed as it uses a PHP class to connect to your Redis. Please note that calls to Redis might be a little bit slower.</p>

<p><strong>Can I configure multiple Sentinel servers?</strong></p>

<p>Yes, once Sentinel is enabled you can configure multiple servers by specifying multiple hosts and ports comma separated via the UI.</p>

<p><strong>Can I be notified when a queue reaches a certain threshold?</strong></p>

<p>Yes, you can optionally receive an email when the number of requests queued in a single queue reaches a configured
threshold. You can configure this in your <code>config/config.ini.php</code> config file using the following configuration:</p>

<pre><code>[QueuedTracking]
notify_queue_threshold_emails[] = example@example.org
notify_queue_threshold_single_queue = 250000
</code></pre>

<p><strong>Are there any known issues?</strong></p>

<ul><li>In case you are using bulk tracking the bulk tracking response varies compared to the regular one. We will always return
either an image or a 204 HTTP response code in case the parameter <code>send_image=0</code> is sent.</li>
<li>By design this plugin can delay the insertion of tracking requests causing real time plugins to not show the actual data since
under load tracking requests may take a while until they are replayed.</li>
</ul>',
              'documentation' => '',
              'changelog' => '<p>3.3.5
- Improve update script to first add primary key and then remove index</p>

<p>3.3.4
- Use primary key instead of a unique index for mysql backend for better replication</p>

<p>3.3.3
- Add possibility to ignore queued tracking handler and track request directly into the database</p>

<p>3.3.2
- Send branded HTML email</p>

<p>3.3.1
- Support MySQLi adapter</p>

<p>3.3.0 
- When using 3rd party cookies, the 3rd party cookie value will not be overwritten by local site visitor id values</p>

<p>3.2.1
- Faster queue locking
- More debug output while processing</p>

<p>3.2.0
- Added possibility to use a MySQL backend instead of redis
- New option <code>queue-id</code> for the <code>queuedtracking:process</code> command which may improve processing speed as the command would only focus on one queue instead of trying to get the lock for a random queue.
- Various other minor performance improvements
- New feature: Get notified by email when a single queue reaches a specific threshold</p>

<p>3.0.2</p>

<ul><li>Ensure do not track cookie works</li>
</ul><p>3.0.1</p>

<ul><li>Added possibility to define a unix socket instead of a host and path.</li>
</ul><p>3.0.0</p>

<ul><li>Compatibility with Piwik 3.0</li>
</ul><p>0.3.2</p>

<ul><li>Fixes a bug in the lock-status command where it may report a queue as locked while it was not</li>
</ul><p>0.3.1</p>

<ul><li>Fixed Redis Sentinel was not working properly. Sentinel can be now configured via the UI and not via config. Also
multiple servers can be configured now.</li>
</ul><p>0.3.0</p>

<ul><li>Added support to use Redis Sentinel for automatic failover</li>
</ul><p>0.2.6</p>

<ul><li>When a request takes more than 2 seconds and debug tracker mode is enabled, log information about the request.</li>
</ul><p>0.2.5</p>

<ul><li>Use a better random number generator if available on the system to more evenly process queues.</li>
</ul><p>0.2.4</p>

<ul><li>The command <code>queuedtracking:monitor</code> will now work even when the queue is disabled</li>
</ul><p>0.2.3</p>

<ul><li>Added more tests and information to the <code>queuedtracking:test</code> command</li>
<li>It is now possible to configure up to 16 workers</li>
</ul><p>0.2.2</p>

<ul><li>Improved output for the new <code>test</code> command</li>
<li>New FAQ entries</li>
</ul><p>0.2.1</p>

<ul><li>Added a new command to test the connection to Redis. To test yor connection use <code>./console queuedtracking:test</code></li>
</ul><p>0.2.0</p>

<ul><li>Compatibility w/ Piwik 2.15.</li>
</ul><p>0.1.6</p>

<ul><li>For bulk requests we do no longer skip all tracking requests after a tracking request that has an invalid <code>idSite</code> set. The same behaviour was changed in Piwik 2.14 for regular bulk requests.</li>
</ul><p>0.1.5</p>

<ul><li>Fixed a notice in case an incompatible Redis version is used.</li>
</ul><p>0.1.4</p>

<ul><li>It is now possible to start multiple workers for faster insertion from Redis to the database. This can be configured in the "Plugin Settings"</li>
<li>Monitor does now output information whether a processor is currently processing the queue.</li>
<li>Added a new command <code>queuedtracking:lock-status</code> that outputs the status of each queue lock. This command can also unlock a queue by using the option <code>--unlock</code>.</li>
<li>Added a new command <code>queuedtracking:print-queued-requests</code> that outputs the next requests to process in each queue.</li>
<li>If someone passes the option <code>-vvv</code> to <code>./console queuedtracking:process</code> the Tracker debug mode will be enabled and additional information will be printed to the screen.</li>
</ul><p>0.1.2</p>

<ul><li>Updated description on Marketplace</li>
</ul><p>0.1.0</p>

<ul><li>Initial Release</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/QueuedTracking/download/3.3.5',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/QueuedTracking/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      33 => 
      array (
        'name' => 'RollUpReporting',
        'displayName' => 'Roll-Up Reporting',
        'owner' => 'innocraft',
        'description' => 'At a glance, see how several of your websites, mobile apps & shops are performing overall. Get new insights into your business & save time every day.',
        'homepage' => 'https://plugins.matomo.org/RollUpReporting',
        'createdDateTime' => '2016-12-22 08:41:57',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'websites',
          1 => 'roll-up',
          2 => 'roll',
          3 => 'up',
          4 => 'group',
          5 => 'aggregate',
          6 => 'sites',
          7 => 'property',
          8 => 'meta',
          9 => 'parent',
        ),
        'basePrice' => 85,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'InnoCraft',
            'email' => 'contact@innocraft.com',
            'homepage' => 'https://www.innocraft.com',
          ),
        ),
        'repositoryUrl' => NULL,
        'lastUpdated' => '2019-04-26 00:01:37',
        'latestVersion' => '3.2.5',
        'numDownloads' => NULL,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/RollUpReporting/images/3.2.5/1_Roll-Up.jpg',
          1 => 'https://plugins.matomo.org/RollUpReporting/images/3.2.5/2_Manage.png',
          2 => 'https://plugins.matomo.org/RollUpReporting/images/3.2.5/3_All_Websites_Dashboard.png',
          3 => 'https://plugins.matomo.org/RollUpReporting/images/3.2.5/4_Real-time_Widget.png',
          4 => 'https://plugins.matomo.org/RollUpReporting/images/3.2.5/5_Visitor_Log.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => NULL,
          'numContributors' => NULL,
          'lastCommitDate' => NULL,
        ),
        'featured' => false,
        'isFree' => false,
        'isPaid' => true,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => 
        array (
          'url' => 'https://plugins.matomo.org/RollUpReporting',
          'variations' => 
          array (
            0 => 
            array (
              'price' => '89',
              'prettyPrice' => '89EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/RollUpReporting?add-to-cart=s&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/rollupreporting/?attribute_type=Up+to+4+users&add-to-cart=2716&variation_id=2717&aelia_cs_currency=EUR',
            ),
            1 => 
            array (
              'price' => '99',
              'prettyPrice' => 'USD99',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/RollUpReporting?add-to-cart=s&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/rollupreporting/?attribute_type=Up+to+4+users&add-to-cart=2716&variation_id=2717&aelia_cs_currency=USD',
              'cheapest' => true,
              'recommended' => true,
            ),
            2 => 
            array (
              'price' => '169',
              'prettyPrice' => '169EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/RollUpReporting?add-to-cart=m&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/rollupreporting/?attribute_type=5+to+15+users&add-to-cart=2716&variation_id=2718&aelia_cs_currency=EUR',
            ),
            3 => 
            array (
              'price' => '199',
              'prettyPrice' => 'USD199',
              'currency' => 'USD',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/RollUpReporting?add-to-cart=m&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/rollupreporting/?attribute_type=5+to+15+users&add-to-cart=2716&variation_id=2718&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
            4 => 
            array (
              'price' => '259',
              'prettyPrice' => '259EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/RollUpReporting?add-to-cart=l&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/rollupreporting/?attribute_type=Unlimited+users&add-to-cart=2716&variation_id=2719&aelia_cs_currency=EUR',
            ),
            5 => 
            array (
              'price' => '299',
              'prettyPrice' => 'USD299',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 0,
              'prettyDiscount' => '',
              'addToCartUrl' => 'https://plugins.matomo.org/RollUpReporting?add-to-cart=l&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/rollupreporting/?attribute_type=Unlimited+users&add-to-cart=2716&variation_id=2719&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
          ),
          'reviews' => 
          array (
            'embedUrl' => 'https://shop.matomo.org/product/rollupreporting/?show_reviews=1&piwik_embed=1',
            'height' => 200,
            'averageRating' => '4.75',
            'ratingCount' => 4,
            'reviewCount' => 4,
          ),
        ),
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => 'SPECIAL OFFER! Get for FREE the Activity Log feature when you purchase this plugin (terms and conditions apply).',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.2.5',
            'release' => NULL,
            'requires' => 
            array (
              'piwik' => '>=3.0.0-rc2,<4.0.0-b1',
            ),
            'numDownloads' => NULL,
            'license' => 
            array (
              'name' => 'InnoCraft EULA',
              'url' => 'https://plugins.matomo.org/RollUpReporting/3.2.5/license',
            ),
            'repositoryChangelogUrl' => NULL,
            'readmeHtml' => 
            array (
              'description' => '

<p>Hi, this is Matt from <a href="https://www.innocraft.com/">InnoCraft</a>. The company of the makers of Matomo Analytics which is used by over 1 million websites and apps in over 150 countries.</p>

<p>At InnoCraft, we run the Matomo project and the community. We are therefore responsible for many different websites: Our matomo.org website, the Matomo Marketplace, the Matomo Developer Zone, the Matomo Forum, 
and some more. When you run several websites, mobile apps, or sub-domains like we do, you want to understand the overall 
performance of your business while still being able to compare the performance of your individual websites and apps. Roll-Up Reporting is for you and will provide huge value.</p>

<blockquote>
  <p>When you have Roll-Up Reporting, it lets you aggregate data from multiple websites and apps into one single site.</p>
</blockquote>

<p><img src="https://www.innocraft.com/innocraft/rollUpReporting.png" style="width:320px;float:right;margin-top:10px;margin-bottom:5px;" alt="Roll-Up Reporting" />This lets you answer questions like 
"How many visits happened on all of my websites and apps?" and "Which campaigns contributed the most across several of my websites?" 
or "How do my various Brands overall compare with each other?"
When you have several shops (eg white-labels) it is very valuable to see how your ecommerce shops are performing overall. 
Or when you are a web agency and you are serving many customers and want to provide each customer with a single aggregate view of all their web properties.</p>

<blockquote>
  <p>Roll-Up Reporting lets you analyze this aggregated data in one site so easily. It saves you lots of time and helps you gain the insights you need instantly.</p>
</blockquote>

<p>Lets say you have separate websites for different countries (your-business.com, your-business.fr, your-business.de, etc). They are separate sites in your Matomo but you might still want to see a combined report on all of them. 
Roll-Up Reporting gathers the data of these websites into one single site and allows you to see aggregated metrics and reports for those sites.
You can still access each website individually as you are used to, and the Roll-Up site will allow you to analyze the aggregated data.</p>

<blockquote>
  <p>Before we used Roll-Up Reporting, we couldn\'t get a detailed view of our overall web activity for our work on the Matomo project. Now that we have setup Roll-Up Reporting (which took less than five minutes), we know exactly the most popular content across all sub-domains and websites, we can easily optimise our marketing budget across all our web properties, and it\'s so much easier to monitor overall growth.</p>
</blockquote>

<h3>Benefits</h3>

<ul><li>Essential when you have several websites, shops, brands, or apps, and want to understand how your business or organization is performing overall.</li>
<li>Save a lot of time and reduce the risk of human error compared to manually aggregating the numbers of several websites (for example in Excel).</li>
<li>Compare departments or a collection of brands much easier with each other.</li>
<li>Assign Roll-Ups to another Roll-Up to mirror your organization\'s structure or hierarchy.</li>
<li>Have an eye on all of your visitors in real-time across several websites and apps compared to switching between several browser tabs.</li>
<li>Keep easily track of your overall revenue.</li>
<li>See which referrers are most valuable and are contributing the most to your traffic overall.</li>
<li>View the Real-Time Map, Visitor Log, and other live reports across several websites and apps.</li>
<li>Gain new insights across several websites and apps in a single site, for example visits, revenue and pageviews.</li>
<li>Check out the top dimensions across properties like top page URLs, top referrers, top locations, e-commerce products and more.</li>
<li>Supports <a href="https://plugins.matomo.org/CustomReports">Custom Reports</a> which means you can gain new insights across a set of sites or all of your websites.</li>
<li>No data limits! Create as many Roll-Ups and assign as many websites or apps to a Roll-Up as you wish.</li>
</ul><h3>Our promise</h3>

<p><a href="https://shop.matomo.org/refund-policy/"><img src="https://shop.matomo.org/wp-content/uploads/2016/10/money_back-300x294.png" style="width:220px;float:right;margin-bottom:10px;" alt="Our promise to you" /></a>Roll-Up Reporting is hand-crafted by the makers of Matomo with top quality and integrates nicely into Matomo. When you have Roll-Up Reporting, we are certain you will save time while gaining heaps of valuable new insights that aren\'t possible to get otherwise.</p>

<blockquote>
  <p>This is why we give you a <a href="https://shop.matomo.org/refund-policy/">100% unconditional, easy, fast, and hassle-free money back guarantee</a> for 30 days. There are no strings attached.</p>
</blockquote>

<p>So try it now and let us know how you do. We are happy to help you get started and are looking forward to hear how Roll-Up Reporting helps you.</p>

<h3>About InnoCraft</h3>

<p>We at <a href="https://www.innocraft.com">InnoCraft</a> are the creators of Matomo and know it better than anyone else. This means all plugins are perfectly integrated into Matomo and come with outstanding features and quality to grow your business. We help our clients get started, configure, monitor and make the most of their Matomo analytics service. We also offer unique analytics products and services that help grow your business and meet the needs of small, medium and large businesses alike.</p>

<h3>Features</h3>

<ul><li>Lets you easily assign all websites and apps to a Roll-Up</li>
<li>Optionally, give users only access to a Roll-Up without having to give them access to individual websites.</li>
<li>View your Roll-Up reports on the go with the <a href="https://plugins.matomo.org">Matomo Mobile</a> app.</li>
<li>All reports including real time reports are available via the <a href="https://developer.matomo.org/api-reference/tracking-api">Matomo HTTP Reporting API</a>, and support <a href="https://matomo.org/docs/segmentation/">Matomo segments</a>.</li>
<li>Manage Roll-Up properties via the <a href="https://developer.matomo.org/api-reference/tracking-api">Matomo HTTP Reporting API</a>.</li>
<li>Export any report directly in your app, dashboard, or even TV screen! Even your real time reports can be <a href="https://matomo.org/docs/embed-piwik-report/">embedded</a> anywhere.</li>
<li>Get automatic <a href="https://matomo.org/docs/email-reports/">email and sms reports</a> for your Roll-Up properties, or send them to your colleagues or customers. </li>
</ul>',
              'faq' => '',
              'documentation' => '<p>The <a href="https://matomo.org/docs/roll-up-reporting/">Roll-Up Reporting User Guide</a> and the 
<a href="https://matomo.org/faq/roll-up-reporting/">Roll-Up Reporting FAQ</a> cover how to get the most out of this plugin.</p>

<p>For any other question feel free to <a href="#support">contact us</a>.</p>',
              'changelog' => '',
            ),
            'download' => NULL,
          ),
        ),
        'isDownloadable' => false,
        'changelog' => 
        array (
          'url' => '',
        ),
        'consumer' => 
        array (
          'license' => NULL,
          'loginUrl' => 'https://shop.matomo.org/my-account',
        ),
      ),
      34 => 
      array (
        'name' => 'LoginLdap',
        'displayName' => 'Login Ldap',
        'owner' => 'matomo-org',
        'description' => 'LDAP authentication and synchronization for Matomo.',
        'homepage' => 'https://github.com/matomo-org/plugin-LoginLdap',
        'createdDateTime' => '2013-12-26 19:24:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'ldap',
          1 => 'login',
          2 => 'authentication',
          3 => 'active',
          4 => 'directory',
          5 => 'kerberos',
          6 => 'sso',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Matomo',
            'email' => 'hello@matomo.org',
            'homepage' => 'https://github.com/matomo-org',
          ),
          1 => 
          array (
            'name' => 'Aivo Koger',
            'email' => 'aivo.koger@gmail.com',
            'homepage' => 'https://github.com/tehnotronic',
          ),
          2 => 
          array (
            'name' => 'Stefan Kreuter',
            'email' => 'info@gigatec.de',
            'homepage' => 'http://www.gigatec.de',
          ),
        ),
        'repositoryUrl' => 'https://github.com/matomo-org/plugin-LoginLdap',
        'lastUpdated' => '2019-04-18 22:38:05',
        'latestVersion' => '4.0.7',
        'numDownloads' => 74365,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/LoginLdap/images/4.0.7/LoginLdap_Admin_admin_page.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '506',
          'numContributors' => '16',
          'lastCommitDate' => '2019-08-25 09:50:09',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '4.0.0',
            'release' => '2016-12-18 21:44:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-rc1,<4.0.0-b1',
              'php' => '>=5.5',
            ),
            'numDownloads' => 2900,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-LoginLdap/commits/4.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/LoginLdap/download/4.0.0',
          ),
          1 => 
          array (
            'name' => '4.0.1',
            'release' => '2017-07-10 09:08:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-rc1,<4.0.0-b1',
              'php' => '>=5.5',
            ),
            'numDownloads' => 512,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-LoginLdap/commits/4.0.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/LoginLdap/download/4.0.1',
          ),
          2 => 
          array (
            'name' => '4.0.2',
            'release' => '2017-08-01 04:56:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-rc1,<4.0.0-b1',
              'php' => '>=5.5',
            ),
            'numDownloads' => 4602,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-LoginLdap/commits/4.0.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/LoginLdap/download/4.0.2',
          ),
          3 => 
          array (
            'name' => '4.0.3',
            'release' => '2017-11-01 22:02:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-rc1,<4.0.0-b1',
              'php' => '>=5.5',
            ),
            'numDownloads' => 11790,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-LoginLdap/commits/4.0.3',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/LoginLdap/download/4.0.3',
          ),
          4 => 
          array (
            'name' => '4.0.4',
            'release' => '2018-04-18 04:06:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-rc1,<4.0.0-b1',
              'php' => '>=5.5',
            ),
            'numDownloads' => 3951,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-LoginLdap/commits/4.0.4',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/LoginLdap/download/4.0.4',
          ),
          5 => 
          array (
            'name' => '4.0.5',
            'release' => '2018-06-18 10:28:05',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-rc1,<4.0.0-b1',
              'php' => '>=5.5',
            ),
            'numDownloads' => 12512,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-LoginLdap/commits/4.0.5',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/LoginLdap/download/4.0.5',
          ),
          6 => 
          array (
            'name' => '4.0.6',
            'release' => '2018-12-21 20:58:04',
            'requires' => 
            array (
              'piwik' => '>=3.8.0-b5,<4.0.0-b1',
              'php' => '>=5.5',
            ),
            'numDownloads' => 8743,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-LoginLdap/commits/4.0.6',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/LoginLdap/download/4.0.6',
          ),
          7 => 
          array (
            'name' => '4.0.7',
            'release' => '2019-04-18 22:38:05',
            'requires' => 
            array (
              'piwik' => '>=3.8.0-b5,<4.0.0-b1',
              'php' => '>=5.5',
            ),
            'numDownloads' => 9975,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/LoginLdap/4.0.7/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-LoginLdap/commits/4.0.7',
            'readmeHtml' => 
            array (
              'description' => '

<p>Allows users in LDAP to log in to MAtomo Analytics. Supports web server authentication (eg, for Kerberos SSO).</p>

<p>LoginLdap authenticates with an LDAP server and uses LDAP information to personalize Matomo.</p>

<h3>Installation</h3>

<p>To start using LoginLdap, follow these steps:</p>

<ol><li>Login as a superuser</li>
<li>On the <em>Manage &gt; Marketplace</em> admin page, install the LoginLdap plugin</li>
<li>On the <em>Manage &gt; Plugins</em> admin page, enable the LoginLdap plugin</li>
<li>Navigate to the <em>Settings &gt; LDAP</em> page</li>
<li><p>Enter and save settings for your LDAP servers</p>

<p><em>Note: You can test your servers by entering something into the \'Required User Group\' and clicking the test link that appears.
An error message will display if LoginLdap cannot connect to the LDAP server.</em></p></li>
<li><p>You can now login with LDAP cedentials.</p></li>
</ol><p><em><strong>Note:</strong> LDAP users are not synchronized with Matomo until they are first logged in. This means you cannot access a token auth for an LDAP user until the user is synchronized.
If you use the default LoginLdap configuration, you can synchronize all of your LDAP users at once using the <code>./console loginldap:synchronize-users</code> command.</em></p>

<h3>Troubleshooting</h3>

<p>To troubleshoot any connectivity issues, read our <a href="https://github.com/matomo-org/plugin-LoginLdap/wiki/Troubleshooting">troubleshooting guide</a>.</p>

<h3>Upgrading from 2.2.7</h3>

<p>Version 3.0.0 is a major rewrite of the plugin, so if you are upgrading for 2.2.7 you will have to do some extra work when upgrading:</p>

<ul><li><p>Navigate tothe <em>Settings &gt; LDAP</em> admin page. If the configuration options look broken, make sure to reload your browser cache. You can do this by reloading the page, or through your browser\'s settings.</p></li>
<li><p>The admin user for servers must now be a full DN. In the LDAP settings page, change the admin name to be the full DN (ie, cn=...,dc=...).</p></li>
<li><p>Uncheck the <code>Use LDAP for authentication</code> checkbox</p>

<p>Version 2.2.7 and below used an authentication strategy where user passwords were stored both in Matomo and in LDAP. In order to keep your current
users\' token auths from changing, that same strategy has to be used.</p></li>
</ul><h3>Configurations</h3>

<p>LoginLdap supports three different LDAP authentication strategies:</p>

<ul><li>using LDAP for authentication only</li>
<li>using LDAP for synchronization only</li>
<li>logging in with Kerberos SSO (or something similar)</li>
</ul><p>Each strategy has advantages and disadvantages. What you should use depends on your needs.</p>

<h3>Using LDAP for authentication only</h3>

<p>This strategy is more secure than the one below, but it requires connecting to the LDAP server on each login attempt.</p>

<p>With this strategy, every time a user logs in, LoginLdap will connect to LDAP to authenticate. On successful login, the user can
be synchronised, but the user\'s password is never stored in Matomo\'s DB, just in the LDAP server. Additionally, the token auth is generated using
a hash of a hash of the password, or is generated randomly.</p>

<p>This means that if the Matomo DB is ever compromised, your LDAP users\' passwords will still be safe.</p>

<p><em>Note: With this auth strategy, non-LDAP users are still allowed to login to Matomo. These users must be created through Matomo, not in LDAP.</em></p>

<p><strong>Steps to enable</strong></p>

<p><em>Note: this is the default configuration.</em></p>

<ol><li>Check the <code>Use LDAP for authentication</code> option and uncheck the <code>Use Web Server Auth (e.g. Kerberos SSO)</code> option.</li>
</ol><h3>Using LDAP for synchronization only</h3>

<p>This strategy involves storing the user\'s passwords in the Matomo DB using Matomo\'s hashing. As a result, it is not as secure as the above
method. If your Matomo DB is compromised, your LDAP users\' passwords will be in greater danger of being cracked.</p>

<p>But, this strategy opens up the possibility of not communicating with LDAP servers at all during authentication, which may provide a better user experience.</p>

<p><em>Note: With this auth strategy, non-LDAP users can login to Matomo.</em></p>

<p><strong>Steps to enable</strong></p>

<ol><li>Uncheck the <code>Use LDAP for authentication</code> option and uncheck the <code>Use Web Server Auth (e.g. Kerberos SSO)</code> option.</li>
<li><p>If you don\'t want to connect to LDAP while logging in, uncheck the <code>Synchronize Users After Successful Login</code> option.</p>

<p>a. If you uncheck this option, make sure your users are synchronized in some other way (eg, by using the <code>loginldap:synchronize-users</code> command).
  Matomo still needs information about your LDAP users in order to let them authenticate.</p></li>
</ol><h3>Logging in with Kerberos SSO (or something similar)</h3>

<p>This strategy delegates authentication to the webserver. You setup a system where the webserver authenticates the user and
sets the <code>$_SERVER[\'REMOTE_USER\']</code> server variable, and LoginLdap will assume the user is already authenticated.</p>

<p>This strategy will still connect to an LDAP server in order to synchronize user information, unless configured not to.</p>

<p><em>Note: With this auth strategy, any user that appears as a REMOTE_USER can login, even if they are not in LDAP.</em></p>

<p><strong>Steps to enable</strong></p>

<ol><li>Check the <code>Use Web Server Auth (e.g. Kerberos SSO)</code> option.</li>
<li><p>If you don\'t want to connect to LDAP while logging in, uncheck the <code>Synchronize Users After Successful Login</code> option.</p>

<p>a. If you uncheck this option, make sure your users are synchronized in some other way (eg, by using the <code>loginldap:synchronize-users</code> command).
  Matomo still needs information about your LDAP users in order to let them authenticate.</p></li>
</ol><h3>Features</h3>

<h3>Authenticating with Kerberos</h3>

<p>If you want to use Kerberos, check the <strong>Use Web Server Auth (e.g. Kerberos SSO)</strong> checkbox in the LDAP settings admin page.</p>

<p>Then, make sure your web server performs the necessary authentication and sets the <code>$_SERVER[\'REMOTE_USER\']</code> server variable when a user is authenticated.</p>

<p>When the <code>$_SERVER[\'REMOTE_USER\']</code> variable is set, LoginLdap will assume the user has already been authenticated. When <code>$_SERVER[\'REMOTE_USER\']</code> variable
is not set and "Always Use LDAP for Authentication" option is checked, LDAP authentication is performed. When "Always Use LDAP for Authentication" is unchecked,
normal authentication will take place.</p>

<p><em>Note: The plugin will still communicate with the LDAP server in order to synchronize user details, so if LDAP settings are incorrect, authentication will fail.</em></p>

<h3>Specifying Fallback Servers</h3>

<p>LoginLdap v3.0.0 and greater supports specifying multiple LDAP servers to use. If connecting to one server fails, the other servers are used as fallbacks.</p>

<p>You can enter fallback servers by adding new servers at the bottom of the <em>Settings &gt; LDAP</em> page.</p>

<h3>Filtering Users in LDAP</h3>

<p>You can use the <strong>Required User Group</strong> and <strong>LDAP Search Filter</strong> settings to filter LDAP entries. Users whose entries do not match these filters
will not be allowed to authenticate.</p>

<p>Set <strong>Required User Group</strong> to the full DN of a group the user should be a member of. <em>Note: Internally, LoginLdap will issue a query using <code>(memberof=?)</code>
to find users of a certain group. Your server may require additional configuration to support <code>memberof</code>.</em></p>

<p>Set <strong>LDAP Search Filter</strong> to an LDAP filter string to use, for example: <code>(objectClass=person)</code> or
<code>(&amp;(resMemberOf=cn=mygroup,ou=commonOU,dc=www,dc=example,dc=org)(objectclass=person))</code>.</p>

<p>You can test both of these settings from within the LDAP settings page.</p>

<h3>LDAP User Synchronization</h3>

<p>LoginLdap will use information in LDAP to determine a user\'s alias and email address. On the <em>Settings &gt; LDAP</em> page, you can specify which LDAP attributes should be
use to determine these fields.</p>

<p><em>Note: If the LDAP attribute for a user\'s alias is not found, the user\'s alias is defaulted to the first and last names of the user. On the settings page you can
specify which LDAP attributes are used to determine a user\'s first &amp; last name.</em></p>

<p><strong>E-mail addresses</strong></p>

<p>E-mail addresses are required for Matomo users. If your users in LDAP do not have e-mail addresses, you can set the <strong>E-mail Address Suffix</strong> setting to an e-mail
address suffix, for example:</p>

<p><code>@myorganization.com</code></p>

<p>The suffix will be added to usernames to generate an e-mail address for your users.</p>

<p>Users are synchronized every time they log in. You can use the <code>loginldap:synchronize-users</code> command to synchronize users manually.</p>

<h3>Matomo Access Synchronization</h3>

<p>LoginLdap also supports synchronizing access levels using attributes found in LDAP. To use this feature, first, you will need to modify your LDAP server\'s
schema and add three special attributes to user entries:</p>

<ul><li>an attribute to specify the sites a user has view access to</li>
<li>an attribute to specify the sites a user has admin access to</li>
<li>and an attribute used to specify if a user is a superuser or not</li>
</ul><p><em>Note: You can choose whatever names you want for these attributes. You will be able to tell LoginLdap about these names in the LDAP settings page.</em></p>

<p>Then you must set these attributes correctly within LDAP, for example:</p>

<ul><li><code>view: all</code></li>
<li><code>admin: 1,2,3</code></li>
<li><code>superuser: 1</code></li>
</ul><p>Finally, in the LDAP settings page, check the <strong>Enable User Access Synchronization from LDAP</strong> checkbox and fill out the settings that appear below it.</p>

<p>User access synchronization occurs at the same time as normal user synchronization. So the <code>loginldap:synchronize-users</code> command will synchronize access levels too.</p>

<h4>Managing Access for Multiple Matomo Instances</h4>

<p>LoginLdap supports using a single LDAP server to manage access for multiple Matomo instances. If you\'d like to use this feature, you must specify special values
for LDAP access attributes. For example:</p>

<ul><li><code>view: mymatomoserver.whatever.com:1,2,3;myotherserver.com:all</code></li>
<li><code>admin: mymatomoserver.whatever.com:all;mythirdserver.com:3,4</code></li>
<li><code>superuser: myotherserver.com;myotherserver.com/othermatomo</code></li>
</ul><p>If you don\'t want to use URLs in your access attributes, you can use the <strong>Special Name For This Matomo Instance</strong> setting to specify a special name
for each of your Matomos. For example, if you set it to \'matomoServerA\' in one Matomo and \'matomoServerB\' in another, your LDAP attributes might look
like:</p>

<ul><li><code>view: matomoServerA:1,2,3;matomoServerB:all</code></li>
<li><code>admin: matomoServerA:4,5,6</code></li>
<li><code>superuser: matomoServerC</code></li>
</ul><p><strong>Using a custom access attribute format</strong></p>

<p>You can customize the separators used in access attributes by setting the <strong>User Access Attribute Server Specification Delimiter</strong> and
<strong>User Access Attribute Server &amp; Site List Separator</strong> settings.</p>

<p>If you set the <strong>User Access Attribute Server Specification Delimiter</strong> option to <code>\'#\'</code>, access attributes can be specified as:</p>

<p><code>view: matomoServerA:1,2,3#matomoServerB:all</code></p>

<p>If you set the <strong>User Access Attribute Server &amp; Site List Separator</strong> option to <code>\'#\'</code>, access attributes can be specified as:</p>

<p><code>view: matomoServerA#1,2,3;matomoServerB#all</code></p>

<h3>Security Considerations</h3>

<p><strong>User passwords</strong></p>

<p>For added security, LoginLdap\'s default configuration will not store user passwords or a hash of a user password within Matomo\'s DB. So if the Matomo DB is compromised
for whatever reason, user passwords will not be compromised.</p>

<p><strong>Token Auths</strong></p>

<p>LDAP has no concept of authentication tokens, so user token_auths are stored exclusively in Matomo\'s MySQL DB. If a token auth is compromised,
you can have Matomo generate a new.</p>

<p><strong>Logging</strong></p>

<p>LoginLdap uses debug logging extensively so problems can be diagnosed quickly. The logs should not contain sensitive information, but <em>you
should still disable DEBUG logging in production</em>.</p>

<p>If you need to debug a problem, enable it temporarily by changing the <code>[log] log_level</code> and <code>[log] log_writers</code> core INI config options.
If you use file logs, make sure to delete the logs after you are finished debugging.</p>

<h3>Commands</h3>

<p>LoginLdap comes with the following console commands:</p>

<ul><li><code>loginldap:synchronize-users</code>: Can be used to synchronize one, multiple, or all users in LDAP at once. If you\'d like to setup user access
within Matomo before a user logs in, this command should be used.</li>
</ul><h3>Changelog</h3>

<p>See <a href="https://github.com/matomo-org/plugin-LoginLdap/blob/master/CHANGELOG.md">https://github.com/matomo-org/plugin-LoginLdap/blob/master/CHANGELOG.md</a>.</p>

<h3>Support</h3>

<p><strong>Please direct any feedback to <a href="https://github.com/matomo-org/plugin-LoginLdap">https://github.com/matomo-org/plugin-LoginLdap</a>.</strong></p>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<h4>LoginLdap 4.0.7</h4>

<ul><li>Updated translations and Readme (no code change)</li>
</ul><h4>LoginLdap 4.0.6</h4>

<ul><li>Make plugin compatible with latest Matomo version</li>
</ul><h4>LoginLdap 4.0.4</h4>

<ul><li>Fixing bug that made it impossible to set append_user_email_suffix_to_username to 0 for appending username suffix to username for email and not during auth.</li>
</ul><h4>LoginLdap 4.0.0</h4>

<ul><li>Compatibility with Piwik 3</li>
<li>Configuration value \'enable_random_token_auth_generation\' has been removed as its obsolete with Piwik 3 having random auth tokens.</li>
<li>Command <code>loginldap:generate-token-auth</code> has been removed as auth tokens are independent from password now and new auth token can now be generated directly in user admin</li>
<li>Updated UI: Now completely works using AngularJS and material design</li>
</ul><h4>LoginLdap 3.3.1</h4>

<ul><li>Plugin settings: clarify an inline help for <code>Use Web Server Auth (e.g. Kerberos SSO)</code></li>
</ul><h4>LoginLdap 3.3.0</h4>

<ul><li>Compatibility with Piwik 2.16.0</li>
</ul><h4>LoginLdap 3.2.2</h4>

<ul><li>LDAP user can\'t change their passwords in Piwik\'s UI (passwords should be managed directly on LDAP host)</li>
</ul><h4>LoginLdap 3.2.1</h4>

<ul><li>Configureed LDAP passwords are no longer stored in the HTML in the LDAP settings page. This is a minor security update.</li>
</ul><h4>LoginLdap 3.2.0</h4>

<ul><li>Compatibility w/ Piwik 2.15.0</li>
</ul><h4>LoginLdap 3.1.5</h4>

<ul><li>Fixing regression caused by Piwik 2.14 change: authenticating in tracker w/ token_auth no longer worked if LoginLdap was used.</li>
<li>Workaround issue where \'LDAP Functions are Missing\' notification was never removed from the screen by making it transient &amp; closeable.</li>
</ul><h4>LoginLdap 3.1.2</h4>

<ul><li>Change placeholder value of server hostname config option and add a note so users can avoid the problem where ports are ignored when ldap:// URLs are used in the hostname option.</li>
<li>Make sure users upgrading from pre-3.0 versions set the correct LDAP settings.</li>
<li>Add documentation regarding using LoginLdap with Piwik\'s official mobile app.</li>
</ul><h4>LoginLdap 3.1.1</h4>

<ul><li>Make plugin compatible with latest Piwik version.</li>
</ul><h4>LoginLdap 3.1.0</h4>

<ul><li>add --skip-existing option to loginldap:synchronize-users command</li>
<li>warning displayed if Login + LoginLdap plugins are enabled at the same time</li>
<li>re-added the load ldap user form in the settings page</li>
<li>normal users can be managed when LdapAuth implementation is used (when Always Use LDAP for Authentication is checked)</li>
<li>fixed bug in web server auth strategy where LDAP auth was not used if REMOTE_USER var not found. made connecting via mobile app impossible.</li>
<li>fix bug in synchronizing users w/ user_email_suffix configured (first login worked, subsequent logins failed since username used in UserSynchronizer was incorrect)</li>
</ul><h4>LoginLdap 3.0.0:</h4>

<ul><li>Automatic creation of Piwik users using LDAP (old \'auto create users\' feature) is now standard.</li>
<li>Default access permissions can be specified for newly synchronized users.</li>
<li>Only super users are allowed to login w/o authenticating to LDAP now. Normal users stored in Piwik will not be allowed to authenticate if using LoginLdap.</li>
<li>It is possible now to test memberOf and filter settings from within the LDAP settings page.</li>
<li>Piwik access permissions can be specified from within LDAP using custom attributes.</li>
<li>It is allowed to specify multiple LDAP fallback servers. If one fails, the others are used.</li>
<li>Tests that make sure the PHP LDAP extension exists were fixed and also implemented in loginpage.</li>
<li>Special LDAP log was removed. Logging is done through Piwik\\Log now.</li>
<li>New setting for LDAP network timeout.</li>
<li>Menu entry is LDAP &gt; Settings now instead of Manage &gt; LDAP Users.</li>
<li>The synchronize single user feature in the settings page was removed.</li>
<li>Supports three types of authentication strategies.</li>
<li>Only compatible with Piwik 2.8 and above.</li>
</ul><h4>LoginLdap 2.2.7:</h4>

<ul><li>Auto create users from LDAP #23</li>
</ul><h4>LoginLdap 2.2.6:</h4>

<ul><li>Fixes empty characters</li>
</ul><h4>LoginLdap 2.2.5:</h4>

<ul><li>Fixes issue #22 \'unable to login\'</li>
</ul><h4>LoginLdap 2.2.4:</h4>

<ul><li>Added debug mode and more detail logging</li>
</ul><h4>LoginLdap 2.2.3:</h4>

<ul><li>Fixes #21 Ensure all variables are correctly set</li>
<li>Storing log file in tmp/logs/ and fix PHP log read warning</li>
</ul><h4>LoginLdap 2.2.2:</h4>

<ul><li>Adding missing namespace</li>
</ul><h4>LoginLdap 2.2.1:</h4>

<ul><li>Controller now extends Login controller. Reusing assets and templates.</li>
</ul><h4>LoginLdap 2.1.0:</h4>

<ul><li>Code updated to support Piwik 2.1 and newer</li>
</ul><h4>LoginLdap 2.0.9:</h4>

<ul><li>Fixes Piwik #4001 Deprecate force_ssl_login setting</li>
</ul><h4>LoginLdap 2.0.8:</h4>

<ul><li>Fixed issue #7 \'Deinstallation not possible\'</li>
</ul><h4>LoginLdap 2.0.7:</h4>

<ul><li>Fixed issue #4 \'useKerberos config problem\'</li>
</ul><h4>LoginLdap 2.0.6:</h4>

<ul><li>Tmuellerleile fixed default controller action</li>
</ul><h4>LoginLdap 2.0.5:</h4>

<ul><li>Fixed issue with log file creation and reading</li>
</ul><h4>LoginLdap 2.0.4:</h4>

<ul><li>Added \'View LDAP log from web as admin\'</li>
<li>Added better error detection and check if LDAP is enabled in PHP</li>
</ul><h4>LoginLdap 2.0.3:</h4>

<ul><li>Issue #26 Fixed \'malformed UTF8 in de.json\'</li>
<li>Issue #28 Fixed \'plugin install should add parameters to config.ini.php\'</li>
</ul><h4>LoginLdap 2.0.2:</h4>

<ul><li>Added \'de\' and \'et\' translations</li>
<li>Minor code enhancements</li>
</ul><h4>LoginLdap 2.0.1:</h4>

<ul><li>First public release in Piwik Marketplace</li>
</ul><h4>LoginLdap 2.0.0:</h4>

<ul><li>First release for Piwik 2.0, may contain bugs!</li>
<li>Added LDAP server port configuration option</li>
</ul><h4>LoginLdap 1.3.5:</h4>

<ul><li>Issue #20 Fixed \'kerberos is not working\'</li>
<li>Issue #19 Fixed \'wrong version info\'</li>
</ul><h4>LoginLdap 1.3.4:</h4>

<ul><li>Issue #18 Fixed \'iconv() expects parameter 3 to be string array given\'</li>
</ul><h4>LoginLdap 1.3.3:</h4>

<ul><li>Issue #17 Fixed \'Undefined index: phpVersion\'</li>
</ul><h4>LoginLdap 1.3.2:</h4>

<ul><li>Issue #15 Fixed \'Setting a custom mail field has no effect\'</li>
<li>Issue #16 Fixed \'Login fails because of non-UTF8 values passed to json_encode()\'</li>
</ul><h4>LoginLdap 1.3.1:</h4>

<ul><li>Issue #7 Added check on the activate handler to ensure the php-ldap extension is installed.</li>
<li>Issue #8 Only superuser can view (and modify) LDAP configuration</li>
<li>Issue #9 Fixed \'Undefined index: activeDirectory\'</li>
<li>Issue #11 E-Mail Address Being Required</li>
<li>Issue #12 Fixed \'Undefined index: topMenu\'</li>
<li>Issue #13 LDAP Users were not able login using the mobile app and using API in general as their credentials were not stored in the database.</li>
<li>Applied fix for Piwik Dev Zone Ticket #734: \'Correction added so Page Overlay feature works\'.</li>
<li>Added functionality to ensure that the Login and LoginLDAP plugins are never enabled simultaneously.</li>
<li>Removed support for IE6.</li>
<li>Changed log file location so to be include into the plugin directory and more easy to find.</li>
</ul><h4>LoginLdap 1.3.0:</h4>

<ul><li>Issue #1 Only superuser can modify LDAP configuration</li>
<li>Issue #2 LDAP search filters</li>
<li>Issue #3 Enable Kerberos login for piwik</li>
<li>Issue #4 You cannot login as superuser if LDAP connection fails</li>
<li>Issue #5 Add more LDAP logging options</li>
<li>Issue #6 Error while trying to read a specific config file entry \'LoginLdap\'</li>
</ul><h4>LoginLdap 1.2.0:</h4>

<ul><li>ActiveDirectory Support</li>
<li>Piwik &gt;= 1.6 Install Bug Fix</li>
</ul><h4>LoginLdap 1.0.0:</h4>

<ul><li>Initial Version just for plain anonymous Ldap</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/LoginLdap/download/4.0.7',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/LoginLdap/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      35 => 
      array (
        'name' => 'Migration',
        'displayName' => 'Migration',
        'owner' => 'matomo-org',
        'description' => 'Migrate/copy any measurable (site, app, roll-up) from one Matomo to another Matomo',
        'homepage' => 'https://matomo.org',
        'createdDateTime' => '2019-01-23 21:04:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Forum',
            'key' => 'forum',
            'value' => 'https://forum.matomo.org',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/matomo-org/plugin-Migration/issues',
            'type' => 'url',
          ),
          2 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/matomo-org/plugin-Migration',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'website',
          1 => 'migration',
          2 => 'site',
          3 => 'move',
          4 => 'measurable',
          5 => 'migrate',
          6 => 'copy',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Matomo',
            'email' => 'hello@matomo.org',
            'homepage' => 'https://matomo.org',
          ),
        ),
        'repositoryUrl' => 'https://github.com/matomo-org/plugin-Migration',
        'lastUpdated' => '2019-04-14 20:20:04',
        'latestVersion' => '3.0.5',
        'numDownloads' => 1348,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '21',
          'numContributors' => '1',
          'lastCommitDate' => '2019-04-14 20:19:12',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2019-01-23 21:04:04',
            'requires' => 
            array (
              'piwik' => '>=3.7.0,<4.0.0-b1',
            ),
            'numDownloads' => 136,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-Migration/commits/3.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/Migration/download/3.0.0',
          ),
          1 => 
          array (
            'name' => '3.0.1',
            'release' => '2019-02-06 19:30:06',
            'requires' => 
            array (
              'piwik' => '>=3.7.0,<4.0.0-b1',
            ),
            'numDownloads' => 2,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-Migration/commits/3.0.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/Migration/download/3.0.1',
          ),
          2 => 
          array (
            'name' => '3.0.2',
            'release' => '2019-02-06 22:34:04',
            'requires' => 
            array (
              'piwik' => '>=3.7.0,<4.0.0-b1',
            ),
            'numDownloads' => 79,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-Migration/commits/3.0.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/Migration/download/3.0.2',
          ),
          3 => 
          array (
            'name' => '3.0.3',
            'release' => '2019-02-14 21:36:03',
            'requires' => 
            array (
              'piwik' => '>=3.7.0,<4.0.0-b1',
            ),
            'numDownloads' => 99,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-Migration/commits/3.0.3',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/Migration/download/3.0.3',
          ),
          4 => 
          array (
            'name' => '3.0.4',
            'release' => '2019-02-21 23:48:04',
            'requires' => 
            array (
              'piwik' => '>=3.7.0,<4.0.0-b1',
            ),
            'numDownloads' => 362,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-Migration/commits/3.0.4',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/Migration/download/3.0.4',
          ),
          5 => 
          array (
            'name' => '3.0.5',
            'release' => '2019-04-14 20:20:04',
            'requires' => 
            array (
              'piwik' => '>=3.7.0,<4.0.0-b1',
            ),
            'numDownloads' => 670,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-Migration/commits/3.0.5',
            'readmeHtml' => 
            array (
              'description' => '

<p><strong>Beta version: The Migration feature is currently in beta. As such it may contain bugs, or may not work as expected. Please <a href="https://github.com/matomo-org/plugin-Migration/issues">report any issues</a> you encounter or any other feedback back to us.</strong></p>

<p>Lets you copy a Matomo Measurable (Website, Mobile App, ...) including all tracked raw data and generated reports
from one Matomo instance to another Matomo instance.</p>

<h3>Requirements</h3>

<ul><li>You need access to your Matomo server and be able to execute a command on the console see usage.</li>
<li>Make sure you have updated both Matomo servers to the same Matomo version or have at least the same DB structure.</li>
</ul><h3>Usage</h3>

<p>Before executing the migration command we always recommend to make a backup of the target database and ideally also test
it first with the <code>dry-run</code> flag (dry-run can take a long time as well and will give you an idea of how long migration
will take).</p>

<p>To start a migration execute the <code>migration:measurable</code> command, example:</p>

<pre><code> ./console migration:measurable --source-idsite=1 --target-db-host=192.168.1.1 --target-db-username=root --target-db-password=secure --target-db-name=piwik2
</code></pre>

<p>Optional parameters are:</p>

<pre><code> --target-db-prefix=piwik_
 --target-db-port=3306
 --skip-logs
 --skip-archives
 --dry-run
 --disable-db-transactions
</code></pre>

<p>Please note that the migration can take a while depending on the amount of data that needs to be copied.</p>

<p>No data from the original Matomo instance will be deleted, only new data will be added to the new Matomo instance.</p>

<p>No premium feature data is currently being migrated.</p>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<h3>3.0.5</h3>

<ul><li>Fix an issue in copying visits</li>
</ul><h3>3.0.4</h3>

<ul><li>Fix possible duplicate entry error while migrating archives</li>
</ul><h3>3.0.3</h3>

<ul><li>Migrate segments &amp; annotations</li>
</ul><h3>3.0.2</h3>

<ul><li>More logging</li>
</ul><h3>3.0.1</h3>

<ul><li>Fix possible notice when Custom Dimensions is not installed</li>
</ul><h3>3.0.0</h3>

<ul><li>Initial version</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/Migration/download/3.0.5',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/Migration/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      36 => 
      array (
        'name' => 'PasswordPolicyEnforcer',
        'displayName' => 'Password Policy Enforcer',
        'owner' => 'simivar',
        'description' => 'Adds a possibility to enforce Password Policy.',
        'homepage' => 'https://github.com/simivar/matomo-password-policy-enforcer',
        'createdDateTime' => '2019-04-07 20:08:03',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Wiki',
            'key' => 'wiki',
            'value' => 'https://github.com/simivar/matomo-password-policy-enforcer/wiki',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/simivar/matomo-password-policy-enforcer/issues',
            'type' => 'url',
          ),
          2 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/simivar/matomo-password-policy-enforcer',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'security',
          1 => 'password',
          2 => 'password policy',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Simivar',
            'email' => 'simivar@gmail.com',
            'homepage' => 'https://github.com/simivar',
          ),
        ),
        'repositoryUrl' => 'https://github.com/simivar/matomo-password-policy-enforcer',
        'lastUpdated' => '2019-04-07 20:08:03',
        'latestVersion' => '1.0.0',
        'numDownloads' => 460,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/PasswordPolicyEnforcer/images/1.0.0/Plugin_settings.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '4',
          'numContributors' => '1',
          'lastCommitDate' => '2019-04-10 22:01:38',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '1.0.0',
            'release' => '2019-04-07 20:08:03',
            'requires' => 
            array (
              'piwik' => '>=3.6.0-b5,<4.0.0-b1',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 460,
            'license' => 
            array (
              'name' => 'MIT',
              'url' => 'https://plugins.matomo.org/PasswordPolicyEnforcer/1.0.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/simivar/matomo-password-policy-enforcer/commits/1.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => '/api/2.0/plugins/PasswordPolicyEnforcer/download/1.0.0',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/PasswordPolicyEnforcer/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      37 => 
      array (
        'name' => 'SentryLogger',
        'displayName' => 'Sentry Logger',
        'owner' => 'Findus23',
        'description' => 'Log all Matomo errors to a Sentry server',
        'homepage' => 'https://lw1.at',
        'createdDateTime' => '2018-09-30 12:34:03',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Forum',
            'key' => 'forum',
            'value' => 'https://forum.matomo.org',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'lukas@matomo.org',
            'type' => 'email',
          ),
          2 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/Findus23/plugin-SentryLogger/issues',
            'type' => 'url',
          ),
          3 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/Findus23/plugin-SentryLogger',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'sentry',
          1 => 'error',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Lukas Winkler',
            'email' => 'lukas@matomo.org',
            'homepage' => 'https://lw1.at',
          ),
        ),
        'repositoryUrl' => 'https://github.com/Findus23/plugin-SentryLogger',
        'lastUpdated' => '2019-04-04 21:16:11',
        'latestVersion' => '0.2.3',
        'numDownloads' => 1375,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/SentryLogger/images/0.2.3/sentry_interface.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '9',
          'numContributors' => '1',
          'lastCommitDate' => '2019-04-04 21:15:39',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '0.1.0',
            'release' => '2018-09-30 12:34:04',
            'requires' => 
            array (
              'piwik' => '>=3.6.0,<4.0.0-b1',
            ),
            'numDownloads' => 911,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Findus23/plugin-SentryLogger/commits/0.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SentryLogger/download/0.1.0',
          ),
          1 => 
          array (
            'name' => '0.2.0',
            'release' => '2019-04-04 19:56:11',
            'requires' => 
            array (
              'piwik' => '>=3.6.0,<4.0.0-b1',
            ),
            'numDownloads' => 1,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Findus23/plugin-SentryLogger/commits/0.2.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SentryLogger/download/0.2.0',
          ),
          2 => 
          array (
            'name' => '0.2.1',
            'release' => '2019-04-04 20:06:12',
            'requires' => 
            array (
              'piwik' => '>=3.6.0,<4.0.0-b1',
              'php' => '>=7.1.0',
            ),
            'numDownloads' => 1,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Findus23/plugin-SentryLogger/commits/0.2.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SentryLogger/download/0.2.1',
          ),
          3 => 
          array (
            'name' => '0.2.2',
            'release' => '2019-04-04 20:40:12',
            'requires' => 
            array (
              'piwik' => '>=3.6.0,<4.0.0-b1',
              'php' => '>=7.1.0',
            ),
            'numDownloads' => 4,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Findus23/plugin-SentryLogger/commits/0.2.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SentryLogger/download/0.2.2',
          ),
          4 => 
          array (
            'name' => '0.2.3',
            'release' => '2019-04-04 21:16:11',
            'requires' => 
            array (
              'piwik' => '>=3.6.0,<4.0.0-b1',
              'php' => '>=7.1.0',
            ),
            'numDownloads' => 458,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Findus23/plugin-SentryLogger/commits/0.2.3',
            'readmeHtml' => 
            array (
              'description' => '

<p>Log all errors happening in your Matomo instance to a <a href="https://sentry.io/welcome/">Sentry</a> server for easier viewing and aggregation.</p>

<p><strong>This plugin is experimental and should only be used if one understands how Sentry works.</strong></p>',
              'faq' => '<p><strong>Why didn\'t you integrate sentry into the existing monolog logging?</strong></p>

<p>Using the default Sentry PHP error tracking shows more error details and is easier to build.
It remains to be seen if all Matomo errors get\'t recorded this way.</p>',
              'documentation' => '',
              'changelog' => '<h4>0.2.3</h4>

<p>don\'t load current plugin</p>

<h4>0.2.2</h4>

<p>fix typo in saving username</p>

<h4>0.2.1</h4>

<p>require PHP 7.1</p>

<h4>0.2.0</h4>

<ul><li>update @sentry/browser to 5.0.5</li>
<li>use new PHP sentry SDK</li>
<li>add Matomo metadata to requests</li>
</ul><h4>0.1.0</h4>

<p>first release</p>',
            ),
            'download' => '/api/2.0/plugins/SentryLogger/download/0.2.3',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/SentryLogger/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      38 => 
      array (
        'name' => 'LogViewer',
        'displayName' => 'Log Viewer',
        'owner' => 'matomo-org',
        'description' => 'View log messages logged by Matomo',
        'homepage' => 'https://matomo.org',
        'createdDateTime' => '2015-09-22 09:26:18',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Forum',
            'key' => 'forum',
            'value' => 'https://forum.matomo.org',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/matomo-org/plugin-LogViewer/issues',
            'type' => 'url',
          ),
          2 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/matomo-org/plugin-LogViewer',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'debug',
          1 => 'log',
          2 => 'viewer',
          3 => 'diagnostic',
          4 => 'debugging',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Matomo',
            'email' => 'hello@matomo.org',
            'homepage' => 'https://matomo.org',
          ),
        ),
        'repositoryUrl' => 'https://github.com/matomo-org/plugin-LogViewer',
        'lastUpdated' => '2019-04-01 07:48:04',
        'latestVersion' => '3.0.4',
        'numDownloads' => 23606,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/LogViewer/images/3.0.4/LogViewer.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '87',
          'numContributors' => '6',
          'lastCommitDate' => '2019-08-25 10:03:04',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2016-09-13 22:16:05',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-dev,<4.0.0-dev',
            ),
            'numDownloads' => 357,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-LogViewer/commits/3.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/LogViewer/download/3.0.0',
          ),
          1 => 
          array (
            'name' => '3.0.1',
            'release' => '2016-11-21 20:48:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-dev,<4.0.0-dev',
            ),
            'numDownloads' => 5217,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-LogViewer/commits/3.0.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/LogViewer/download/3.0.1',
          ),
          2 => 
          array (
            'name' => '3.0.2',
            'release' => '2017-07-10 09:14:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-dev,<4.0.0-dev',
            ),
            'numDownloads' => 5262,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-LogViewer/commits/3.0.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/LogViewer/download/3.0.2',
          ),
          3 => 
          array (
            'name' => '3.0.3',
            'release' => '2018-06-18 10:34:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-dev,<4.0.0-dev',
            ),
            'numDownloads' => 4960,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-LogViewer/commits/3.0.3',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/LogViewer/download/3.0.3',
          ),
          4 => 
          array (
            'name' => '3.0.4',
            'release' => '2019-04-01 07:48:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-dev,<4.0.0-dev',
            ),
            'numDownloads' => 2696,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/LogViewer/3.0.4/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-LogViewer/commits/3.0.4',
            'readmeHtml' => 
            array (
              'description' => '

<p>View log messages that were logged by Matomo via the Matomo UI or HTTP Reporting API.</p>',
              'faq' => '<p><strong>I want to see more than 100 log messages, is it possible?</strong></p>

<p>Yes, there is a <code>limit</code> URL parameter that you can change to any number.</p>

<p><strong>Can I use regular expressions in the search field?</strong></p>

<p>Yes, you can enable regular expressions next to the search field.</p>

<p><strong>Is the search field case insensitive?</strong></p>

<p>Yes.</p>

<p><strong>How is a Matomo (Piwik) log line formatted by default?</strong></p>

<p><code>\'$severity $tag[$datetime] [$requestId] $message</code> eg <code>WARNING Matomo\\Common[2015-01-01 01:02:03] [cf27] The log message</code></p>

<p><strong>Is the search pattern applied to the whole log line?</strong></p>

<p>Yes, this means a search for <code>WARNING Matomo\\Common</code> would deliver you all warnings triggered by <code>Piwik\\Common</code>.</p>

<p><strong>How do I find all messages that belong to a certain request?</strong></p>

<p>Each log message shows a "Request Id". By clicking on this Id it selects all log messages of the same request.
Alternatively you can search for the expression <code>\\[1234\\]</code> where <code>1234</code> need to be replaced by a Request Id.</p>

<p><strong>How do I find messages that belong to the same day?</strong></p>

<p>Either click on a date field or search for it, eg <code>2012-12-12</code>.</p>

<p><strong>What are the known issues?</strong></p>

<ul><li>If there are messages being logged while viewing the log messages, the paging might not work 100% correctly.</li>
<li>There seems to be a problem when searching for a single quotation mark "\'".</li>
</ul>',
              'documentation' => '',
              'changelog' => '<ul><li>3.0.0 Compatibility with Piwik 3.0</li>
<li>0.2.0 Compatibility w/ Piwik 2.15.</li>
<li>0.1.1 Fix for IE8</li>
<li>0.1.0 Initial Release</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/LogViewer/download/3.0.4',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/LogViewer/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      39 => 
      array (
        'name' => 'UserConsole',
        'displayName' => 'User Console',
        'owner' => 'digitalist-se',
        'description' => 'Use the console to manage users, like adding users, reset password etc.',
        'homepage' => 'https://digitalist.se/contributing-matomo',
        'createdDateTime' => '2019-02-28 21:24:03',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/nodeone/userconsole/issues',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Mikke Schirén',
            'email' => 'mikke.schiren@digitalistgroup.com',
            'homepage' => 'https://digitalist.se',
          ),
        ),
        'repositoryUrl' => 'https://github.com/digitalist-se/userconsole',
        'lastUpdated' => '2019-03-20 10:12:04',
        'latestVersion' => '0.1.3',
        'numDownloads' => 936,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '16',
          'numContributors' => '1',
          'lastCommitDate' => '2019-03-22 11:59:43',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '0.1.0',
            'release' => '2019-02-28 21:32:03',
            'requires' => 
            array (
              'piwik' => '>=3.8.1-stable,<4.0.0-b1',
            ),
            'numDownloads' => 7,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/UserConsole/0.1.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/digitalist-se/userconsole/commits/0.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/UserConsole/download/0.1.0',
          ),
          1 => 
          array (
            'name' => '0.1.1',
            'release' => '2019-03-01 07:08:03',
            'requires' => 
            array (
              'piwik' => '>=3.8.1-stable,<4.0.0-b1',
            ),
            'numDownloads' => 241,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/UserConsole/0.1.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/digitalist-se/userconsole/commits/0.1.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/UserConsole/download/0.1.1',
          ),
          2 => 
          array (
            'name' => '0.1.3',
            'release' => '2019-03-20 10:12:04',
            'requires' => 
            array (
              'piwik' => '>=3.8.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 687,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/UserConsole/0.1.3/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/digitalist-se/userconsole/commits/0.1.3',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '<p><strong>My question?</strong></p>

<p>My answer</p>',
              'documentation' => '<h2>Usage</h2>

<p>This plugin adds the possibility to work with users via console commands.</p>

<h2>Console commands</h2>

<ul><li><a href="#useraccess">user:access</a> </li>
<li><a href="#usercreate">user:create</a></li>
<li><a href="#userdelete">user:delete</a> </li>
<li><a href="#userlist">user:list</a></li>
<li><a href="#makesuper">user:make-super</a></li>
<li><a href="#removesuper">user:remove-super</a></li>
<li><a href="#resetpassword">user:reset-password</a></li>
</ul><h3><a>user:create</a></h3>

<p>Creates a user.</p>

<p>Options:</p>

<ul><li><code>login</code> User name for the user (required)</li>
<li><code>email</code> Email for the user (required)</li>
<li><code>password</code> Password for the user (required)</li>
<li><code>super</code> Add super user privileges to the user (optional)</li>
</ul><h3><a>user:delete</a></h3>

<p>Deletes a user.</p>

<p>Options:</p>

<ul><li><p><code>login</code> User name for the user (required)</p>

<h3><a>user:access</a></h3></li>
</ul><p>Menage access to a user, for which sites and what access.</p>

<p>Options:</p>

<ul><li><code>login</code> User name for the user (required)</li>
<li><code>sites</code> One or more sites that you would like to set the permission for (required)</li>
<li><code>access</code> Which access the user should have to the site - <code>noaccess</code>, <code>view</code>, <code>write</code>, <code>admin</code> (required)</li>
</ul><h3><a>user:make-super</a></h3>

<p>Adds super user privileges to a user</p>

<p>Options:</p>

<ul><li><code>login</code> User name for the user (required)</li>
</ul><h3><a>user:remove-super</a></h3>

<p>Remove super user privileges from a user</p>

<p>Options:</p>

<ul><li><code>login</code> User name for the user (required)</li>
</ul><p>If the user is the only one that has super user access, this will fail. At least one super user is needed.</p>

<h3><a>user:list</a></h3>

<p>List all users.</p>

<p>No options.</p>

<h3><a>user:reset-password</a></h3>

<p>Resets password for a user.</p>

<p>Options:</p>

<ul><li><code>login</code> User name for the user (required)</li>
<li><code>new-password</code> New password for the user (required)</li>
</ul>',
              'changelog' => '<p>Here goes the changelog text.</p>',
            ),
            'download' => '/api/2.0/plugins/UserConsole/download/0.1.3',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/UserConsole/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      40 => 
      array (
        'name' => 'SiteAccessProvisioner',
        'displayName' => 'Site Access Provisioner',
        'owner' => 'jbrule',
        'description' => 'Provides a simple method to provision access to site analytics. Integration with Content Management System is highly advised.',
        'homepage' => 'https://github.com/jbrule/matomoplugin-SiteAccessProvisioner',
        'createdDateTime' => '2019-02-12 17:40:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'integration',
          1 => 'access',
          2 => 'authorization',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Josh Brule',
            'email' => NULL,
            'homepage' => 'https://www.linkedin.com/pub/joshua-brule/15/326/9b9',
          ),
        ),
        'repositoryUrl' => 'https://github.com/jbrule/matomoplugin-SiteAccessProvisioner',
        'lastUpdated' => '2019-02-12 18:22:04',
        'latestVersion' => '3.0.1',
        'numDownloads' => 714,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '2',
          'numContributors' => '1',
          'lastCommitDate' => '2019-02-12 18:21:22',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2019-02-12 17:40:04',
            'requires' => 
            array (
              'piwik' => '>=3.6.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 2,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/SiteAccessProvisioner/3.0.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/jbrule/matomoplugin-SiteAccessProvisioner/commits/v3.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SiteAccessProvisioner/download/3.0.0',
          ),
          1 => 
          array (
            'name' => '3.0.1',
            'release' => '2019-02-12 18:22:04',
            'requires' => 
            array (
              'piwik' => '>=3.6.0,<4.0.0-b1',
              'php' => '>=7.0.0',
            ),
            'numDownloads' => 712,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/SiteAccessProvisioner/3.0.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/jbrule/matomoplugin-SiteAccessProvisioner/commits/v3.0.1',
            'readmeHtml' => 
            array (
              'description' => '

<p>Plugin for the Matomo Web Analytics software package that facilitates an easy process to grant users access to site reports. A companion access provider is required, usually in the form of a website CMS plugin/module (you may need to build this if one does not exist).</p>

',
              'faq' => '<p><strong>Why are accounts not being created?</strong></p>

<p>This plugin does not create user accounts. It just authorizes already existing accounts to view site tracking reports. If automatic account creation is desired I would suggest looking at the LdapLogin plugin in the Marketplace.
You would need access to an Ldap directory for it to work however.</p>

<p><strong>We are always seeing token expired error?</strong></p>

<p>If your access provider code and Matomo are on seprate servers this could be a symptom of the clocks on either server being incorrect. Using a service such as ntpd on Linux is highly recommended. If you have full control of your server lookup how to setup ntpd for your distribution.
If you are using a hosting service and your system time is incorrect contact your hosting company to find out how to use the Network Time Protocol with your server. Timezone settings should not be a factor as we are using a UNIX TIMESTAMP for calculation.</p>

<p><strong>I built an access provider for xxxx CMS. Would you like to be informed?</strong></p>

<p>Please let me know by <a href="https://github.com/jbrule/matomoplugin-SiteAccessProvisioner/issues">reporting as an issue</a>. Maintaining a directory can be a demanding job so I do not have plans to maintain an access provider directory at this time.
If you create an access provider as a companion to this plugin please reference this plugin in your plugin/module documentation.</p>',
              'documentation' => '<p>The easiest way to install is to find the plugin in the <a href="https://plugins.matomo.org/">Matomo Marketplace</a>.
After activation go to General Settings and set a SharedSecret. You will then need to implement an access provider (example code available in README) which will generate a link for users to use to access Matomo.</p>',
              'changelog' => '<p>3.0.0 Initial Version</p>',
            ),
            'download' => '/api/2.0/plugins/SiteAccessProvisioner/download/3.0.1',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/SiteAccessProvisioner/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      41 => 
      array (
        'name' => 'MozWidgetByAmperage',
        'displayName' => 'Moz Widget',
        'owner' => 'AMPERAGE-Marketing',
        'description' => 'Show Moz.com info for the current site as a dashboard widget. Also links to the latest Moz Pro Campaign Custom Report, if available.',
        'homepage' => 'https://www.amperagemarketing.com',
        'createdDateTime' => '2019-01-24 03:14:05',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Wiki',
            'key' => 'wiki',
            'value' => 'https://github.com/AMPERAGE-Marketing/Matomo-Moz-Widget/wiki',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'kzeni1@gmail.com',
            'type' => 'email',
          ),
          2 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/AMPERAGE-Marketing/Matomo-Moz-Widget/issues',
            'type' => 'url',
          ),
          3 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/AMPERAGE-Marketing/Matomo-Moz-Widget',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'widget',
          1 => 'search',
          2 => 'dashboard',
          3 => 'SEO',
          4 => 'amperage',
          5 => 'moz',
          6 => 'seomoz',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Amperage Marketing & Fundraising',
            'email' => 'digital@amperagemarketing.com',
            'homepage' => 'http://www.amperagemarketing.com',
          ),
          1 => 
          array (
            'name' => 'Kurt Zenisek',
            'email' => 'kzeni1@gmail.com',
            'homepage' => 'http://kzeni.com',
          ),
        ),
        'repositoryUrl' => 'https://github.com/AMPERAGE-Marketing/Matomo-Moz-Widget',
        'lastUpdated' => '2019-01-28 23:30:05',
        'latestVersion' => '1.1.2',
        'numDownloads' => 1004,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/MozWidgetByAmperage/images/1.1.2/measurable-settings.png',
          1 => 'https://plugins.matomo.org/MozWidgetByAmperage/images/1.1.2/moz-widget-more.png',
          2 => 'https://plugins.matomo.org/MozWidgetByAmperage/images/1.1.2/moz-widget.png',
          3 => 'https://plugins.matomo.org/MozWidgetByAmperage/images/1.1.2/user-settings.png',
          4 => 'https://plugins.matomo.org/MozWidgetByAmperage/images/1.1.2/view-latest-custom-report-button.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '13',
          'numContributors' => '1',
          'lastCommitDate' => '2019-01-28 23:29:05',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '1.0.0',
            'release' => '2019-01-24 03:14:05',
            'requires' => 
            array (
              'piwik' => '>=3.2.1-stable,<4.0.0-b1',
            ),
            'numDownloads' => 31,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/MozWidgetByAmperage/1.0.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/AMPERAGE-Marketing/Matomo-Moz-Widget/commits/1.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/MozWidgetByAmperage/download/1.0.0',
          ),
          1 => 
          array (
            'name' => '1.0.1',
            'release' => '2019-01-24 20:50:04',
            'requires' => 
            array (
              'piwik' => '>=3.2.1-stable,<4.0.0-b1',
            ),
            'numDownloads' => 39,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/MozWidgetByAmperage/1.0.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/AMPERAGE-Marketing/Matomo-Moz-Widget/commits/1.0.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/MozWidgetByAmperage/download/1.0.1',
          ),
          2 => 
          array (
            'name' => '1.1.0',
            'release' => '2019-01-28 23:08:03',
            'requires' => 
            array (
              'piwik' => '>=3.2.1-stable,<4.0.0-b1',
            ),
            'numDownloads' => 6,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/MozWidgetByAmperage/1.1.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/AMPERAGE-Marketing/Matomo-Moz-Widget/commits/1.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/MozWidgetByAmperage/download/1.1.0',
          ),
          3 => 
          array (
            'name' => '1.1.1',
            'release' => '2019-01-28 23:20:04',
            'requires' => 
            array (
              'piwik' => '>=3.2.1-stable,<4.0.0-b1',
            ),
            'numDownloads' => 9,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/MozWidgetByAmperage/1.1.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/AMPERAGE-Marketing/Matomo-Moz-Widget/commits/1.1.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/MozWidgetByAmperage/download/1.1.1',
          ),
          4 => 
          array (
            'name' => '1.1.2',
            'release' => '2019-01-28 23:30:05',
            'requires' => 
            array (
              'piwik' => '>=3.2.1-stable,<4.0.0-b1',
            ),
            'numDownloads' => 919,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/MozWidgetByAmperage/1.1.2/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/AMPERAGE-Marketing/Matomo-Moz-Widget/commits/1.1.2',
            'readmeHtml' => 
            array (
              'description' => '

<p>Show Moz.com info for the current site as a dashboard widget. First, you specify your Moz.com API keys in your user settings, and then your dashboard widget will check which site\'s being viewed and display info for that site. Additionally/alternatively, you can provide the URL to view your latest Moz Pro Campaign Custom Report, if available, to be shown in the widget for the specified site.</p>

',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<h2>1.1.2</h2>

<ul><li>Minor adjustment to plugin metadata.</li>
</ul><h2>1.1.1</h2>

<ul><li>Improved the output of the custom report link in the widget.</li>
</ul><h2>1.1.0</h2>

<ul><li>Added the ability to specify a Moz Pro Custom Report for quickly opening/viewing from the Dashboard widget (a measurable [website/app] specific setting.)</li>
</ul><h2>1.0.1</h2>

<ul><li>Added titles/tooltips describing each result.</li>
<li>Improved formatting of results.</li>
</ul><h2>1.0</h2>

<ul><li>Initial Release.</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/MozWidgetByAmperage/download/1.1.2',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/MozWidgetByAmperage/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      42 => 
      array (
        'name' => 'EnvironmentVariables',
        'displayName' => 'Environment Variables',
        'owner' => 'matomo-org',
        'description' => 'Allows you to specify Matomo config in environment variables instead of the config file.',
        'homepage' => 'https://matomo.org',
        'createdDateTime' => '2019-01-25 03:12:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Forum',
            'key' => 'forum',
            'value' => 'https://forum.matomo.org',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/matomo-org/plugin-EnvironmentVariables/issues/',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'configuration',
          1 => 'php',
          2 => 'environment',
          3 => 'variables',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Matomo',
            'email' => 'hello@matomo.org',
            'homepage' => 'https://matomo.org',
          ),
        ),
        'repositoryUrl' => 'https://github.com/matomo-org/plugin-EnvironmentVariables',
        'lastUpdated' => '2019-01-25 03:12:04',
        'latestVersion' => '3.0.0',
        'numDownloads' => 1097,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '4',
          'numContributors' => '2',
          'lastCommitDate' => '2019-09-24 10:33:04',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2019-01-25 03:12:04',
            'requires' => 
            array (
              'piwik' => '>=3.6.1-stable,<4.0.0-b1',
            ),
            'numDownloads' => 1097,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-EnvironmentVariables/commits/3.0.0',
            'readmeHtml' => 
            array (
              'description' => '

<p>Override any Matomo config with environment variables. To overwrite any setting simply specify an environment variable in the following format:</p>

<pre><code>MATOMO_$CATEGORY_$SETTING
</code></pre>

<p>For example to overwrite the database username and password which is usually defined in the <code>config/config.ini.php</code> like this:</p>

<pre><code class="ini">[database]
username = "root"
password = "secure"
</code></pre>

<p>using environment variables like this:</p>

<pre><code class="bash">export MATOMO_DATABASE_USERNAME=root
export MATOMO_DATABASE_PASSWORD=secure
</code></pre>

<h3>Known issues:</h3>

<ul><li>Configuration arrays are currently not supported, for example you cannot define which <code>Plugins[]</code> should be loaded.</li>
<li>At some point your Matomo may save/write the config file, for example when changing certain settings through the UI such as the trusted hosts. In this case, the currently read environment variables will be saved in the config file.</li>
</ul>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<h3>3.0.0</h3>

<ul><li>Initial version</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/EnvironmentVariables/download/3.0.0',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/EnvironmentVariables/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      43 => 
      array (
        'name' => 'CustomAlerts',
        'displayName' => 'Custom Alerts',
        'owner' => 'matomo-org',
        'description' => 'Create custom Alerts to be notified of important changes on your website or app! ',
        'homepage' => 'http://piwik.org',
        'createdDateTime' => '2014-01-15 23:26:05',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Wiki',
            'key' => 'wiki',
            'value' => 'https://github.com/piwik/plugin-CustomAlerts/wiki',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Forum',
            'key' => 'forum',
            'value' => 'https://forum.piwik.org',
            'type' => 'url',
          ),
          2 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/piwik/plugin-CustomAlerts/issues',
            'type' => 'url',
          ),
          3 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/piwik/plugin-CustomAlerts',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'Report',
          1 => 'alerts',
          2 => 'notification',
          3 => 'monitoring',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Piwik',
            'email' => 'hello@piwik.org',
            'homepage' => 'http://piwik.org',
          ),
        ),
        'repositoryUrl' => 'https://github.com/matomo-org/plugin-CustomAlerts',
        'lastUpdated' => '2019-01-07 00:58:06',
        'latestVersion' => '3.0.5',
        'numDownloads' => 23291,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/CustomAlerts/images/3.0.5/Create_Alert.png',
          1 => 'https://plugins.matomo.org/CustomAlerts/images/3.0.5/History_Of_Alerts.png',
          2 => 'https://plugins.matomo.org/CustomAlerts/images/3.0.5/List_Of_Alerts.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '390',
          'numContributors' => '10',
          'lastCommitDate' => '2019-09-29 20:06:01',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2016-09-13 21:42:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-dev,<4.0.0',
            ),
            'numDownloads' => 1110,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-CustomAlerts/commits/3.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/CustomAlerts/download/3.0.0',
          ),
          1 => 
          array (
            'name' => '3.0.1',
            'release' => '2017-03-19 10:40:07',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-dev,<4.0.0-b1',
            ),
            'numDownloads' => 1259,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-CustomAlerts/commits/3.0.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/CustomAlerts/download/3.0.1',
          ),
          2 => 
          array (
            'name' => '3.0.2',
            'release' => '2017-07-10 09:12:07',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-dev,<4.0.0-b1',
            ),
            'numDownloads' => 1400,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-CustomAlerts/commits/3.0.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/CustomAlerts/download/3.0.2',
          ),
          3 => 
          array (
            'name' => '3.0.3',
            'release' => '2017-11-01 22:06:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-dev,<4.0.0-b1',
            ),
            'numDownloads' => 2807,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-CustomAlerts/commits/3.0.3',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/CustomAlerts/download/3.0.3',
          ),
          4 => 
          array (
            'name' => '3.0.4',
            'release' => '2018-06-18 10:08:05',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-dev,<4.0.0-b1',
            ),
            'numDownloads' => 2535,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-CustomAlerts/commits/3.0.4',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/CustomAlerts/download/3.0.4',
          ),
          5 => 
          array (
            'name' => '3.0.5',
            'release' => '2019-01-07 00:58:06',
            'requires' => 
            array (
              'piwik' => '>=3.8.0-rc2,<4.0.0-b1',
            ),
            'numDownloads' => 2381,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-CustomAlerts/commits/3.0.5',
            'readmeHtml' => 
            array (
              'description' => '

<p>Create Custom Alerts + Be notified by email/SMS!</p>

<p>Alerts are a great way to get notified of changes on your website. Want to know if your new product hits less than 100 sales in a week or your new article attracts more than 200 visitors a day? Create alerts that make sense to you. Be notified by email or SMS when the conditions for your alerts are met. Stay on top of your website!</p>

<p>The Alert log will help you to better understand the success of your website. You can use it to analyze how often your website hit more than 10000 visits per day or on how many days a product was sold more than 50 times.</p>

<p>This plugin was crowdfunded with the support of 37 Matomo community members!</p>

',
              'faq' => '<p><strong>What exactly is included in this feature?</strong></p>

<p>Here is the complete list of features that are included in this project:</p>

<ul><li>Define new Alert ("Big drop in purchases")</li>
<li>Select a website on which the Alert is defined</li>
<li>Receive an alert by email (email will contain Alert description + link to Matomo (Piwik) dashboard URL for the given website ID and period).</li>
<li>Receive an alert by SMS (SMS will contain Alert description and numbers that triggered the Alert)</li>
<li>Select the Alert period: should it be daily, weekly or monthly?</li>
<li>Select the report (Websites, Keywords, Countries, general stats)</li>
<li>Define Metrics (visits, page view, avg. visit duration, Goal 1 conversions, total goal conversions, etc.)</li>
<li>Define the Alert: when Visits decrease 50%, when purchases are more than 50 per day, etc.</li>
</ul><p><strong>What reports are available to the Alert system?</strong></p>

<p>You can create an alert for any available report in Matomo. Plugins can define new reports which will be automatically picked up by Alerts.</p>

<p><strong>What alert conditions are available?</strong></p>

<p>You can create alerts for the following metrics:</p>

<ul><li>Visits, Visits Evolution, Unique Visits</li>
<li>Actions, Action Evolution</li>
<li>Pageviews, Pageviews Evolution</li>
<li>Time on page</li>
<li>Bounce rate</li>
<li>Goal revenue</li>
<li>Downloads</li>
<li>and many more..</li>
</ul><p>To define the condition you can select the conditions:</p>

<ul><li>Greater than, less than</li>
<li>Equal, Not Equal</li>
<li>Percentage increase/decrease</li>
</ul>',
              'documentation' => '',
              'changelog' => '<ul><li>3.0.1: Email alerts: beautiful email design </li>
<li>3.0.0: Compatibility with Piwik 3.0</li>
<li>0.1.22: Improved the look of some form elements</li>
<li>0.1.21: Compatible with Piwik 2.15.0, fixed: alert number format can be wrong when using percentages </li>
<li>0.1.0: First beta</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/CustomAlerts/download/3.0.5',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/CustomAlerts/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      44 => 
      array (
        'name' => 'LoginTokenAuth',
        'displayName' => 'Login Token Auth',
        'owner' => 'HD-CMS',
        'description' => 'Sign in to Matomo over api using the Users token_auth.',
        'homepage' => 'https://www.hd-cms.de',
        'createdDateTime' => '2018-12-30 18:38:03',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'support@hd-cms.de',
            'type' => 'email',
          ),
          1 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/HD-CMS/matomo-plugin-LoginTokenAuth/issues',
            'type' => 'url',
          ),
          2 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/HD-CMS/matomo-plugin-LoginTokenAuth',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'login',
          1 => 'authentication',
          2 => 'tokenAuth',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Dennis Hemeier',
            'email' => 'support@hd-cms.de',
            'homepage' => 'https://www.hd-cms.de',
          ),
        ),
        'repositoryUrl' => 'https://github.com/HD-CMS/matomo-plugin-LoginTokenAuth',
        'lastUpdated' => '2018-12-30 18:38:03',
        'latestVersion' => '3.0.0',
        'numDownloads' => 971,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '6',
          'numContributors' => '1',
          'lastCommitDate' => '2018-12-30 18:52:40',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2018-12-30 18:38:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 971,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/HD-CMS/matomo-plugin-LoginTokenAuth/commits/3.0.0',
            'readmeHtml' => 
            array (
              'description' => '

<p>This plugin extends the standard Matomo authentication to allow <code>token_auth</code> Authentication.</p>

<p>How do I setup LoginTokenAuth using Matomo?</p>

<ul><li>Login your Matomo as Super User. Click Settings, then click Marketplace.</li>
<li>Install the LoginTokenAuth plugin, then click Activate.</li>
<li><p>Login over the implemented logme method:</p>

<p><code>https://matomo.example.com/index.php?module=LoginTokenAuth&amp;action=logme&amp;token_auth=YOUR_TOKEN_STRING</code></p>

<ul><li>The TokenAuth login is allowed for all users except Super Users</li>
<li>You can use all parameters allowed by the default <code>logme</code>
method provided by the default Login Matomo Plugin</li>
</ul></li>
</ul>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<ul><li>3.0 - First public release

<ul><li>Compatibility with Piwik 3.0</li>
</ul></li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/LoginTokenAuth/download/3.0.0',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/LoginTokenAuth/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      45 => 
      array (
        'name' => 'CustomTranslations',
        'displayName' => 'Custom Translations',
        'owner' => 'innocraft',
        'description' => 'Translate entities and tracked values into different languages. For example Custom dimensions, dashboard names, custom report names, event values, ...',
        'homepage' => 'https://innocraft.com',
        'createdDateTime' => '2018-12-11 21:46:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Forum',
            'key' => 'forum',
            'value' => 'https://forum.matomo.org',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'contact@innocraft.com',
            'type' => 'email',
          ),
          2 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/innocraft/plugin-CustomTranslations/issues',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'i18n',
          1 => 'translation',
          2 => 'translate',
          3 => 'international',
          4 => 'custom dimension',
          5 => 'custom reports',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'InnoCraft',
            'email' => 'contact@innocraft.com',
            'homepage' => 'https://innocraft.com',
          ),
        ),
        'repositoryUrl' => 'https://github.com/innocraft/plugin-CustomTranslations',
        'lastUpdated' => '2018-12-11 21:46:04',
        'latestVersion' => '3.0.0',
        'numDownloads' => 1027,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/CustomTranslations/images/3.0.0/0_Custom_Translations_Manage.png',
          1 => 'https://plugins.matomo.org/CustomTranslations/images/3.0.0/1_Renamed_Custom_Reports.png',
          2 => 'https://plugins.matomo.org/CustomTranslations/images/3.0.0/2_Renamed_Dimensions.png',
          3 => 'https://plugins.matomo.org/CustomTranslations/images/3.0.0/3_Renamed_Event_Name.png',
          4 => 'https://plugins.matomo.org/CustomTranslations/images/3.0.0/4_Renamed_Event_Value.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '9',
          'numContributors' => '2',
          'lastCommitDate' => '2018-12-18 22:30:59',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2018-12-11 21:46:04',
            'requires' => 
            array (
              'piwik' => '>=3.8.0-b4,<4.0.0-b1',
            ),
            'numDownloads' => 1027,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/innocraft/plugin-CustomTranslations/commits/3.0.0',
            'readmeHtml' => 
            array (
              'description' => '

<p>Lets you translate the following entities and tracked values into another language:</p>

<ul><li>Tracked <a href="https://plugins.matomo.org/CustomDimensions">custom dimension</a> values</li>
<li>Tracked event values</li>
<li>Configured <a href="https://plugins.matomo.org/CustomDimensions">custom dimension</a> names</li>
<li>Configured <a href="https://plugins.matomo.org/CustomReports">custom report</a> names</li>
<li>Configured Dashboard names</li>
</ul><p>This plugin does currently not let you change any already translated text in Matomo itself. You may be interested in
the <a href="https://plugins.matomo.org/CustomiseTranslations">Customise Translations</a> plugin if you want to alter any translation.</p>

<p>Once you have installed and activated the plugin, go to "Administration =&gt; System =&gt; Custom Translations" to customise translations.</p>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<h3>3.0.0</h3>

<ul><li>Initial version</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/CustomTranslations/download/3.0.0',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/CustomTranslations/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      46 => 
      array (
        'name' => 'InvalidateReports',
        'displayName' => 'Invalidate Reports',
        'owner' => 'innocraft',
        'description' => 'This plugin allows Super Users to invalidate historical reports in the UI in Administration > System > Invalidate reports.',
        'homepage' => 'https://www.innocraft.com',
        'createdDateTime' => '2017-11-17 12:34:03',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/innocraft/plugin-InvalidateReports/issues',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/innocraft/plugin-InvalidateReports',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'reports',
          1 => 'invalidate',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'InnoCraft',
            'email' => 'contact@innocraft.com',
            'homepage' => 'https://www.innocraft.com',
          ),
        ),
        'repositoryUrl' => 'https://github.com/innocraft/plugin-InvalidateReports',
        'lastUpdated' => '2018-12-04 20:38:03',
        'latestVersion' => '0.1.2',
        'numDownloads' => 13202,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/InvalidateReports/images/0.1.2/screenshot.jpg',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '42',
          'numContributors' => '4',
          'lastCommitDate' => '2018-12-26 10:32:07',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '0.1.0',
            'release' => '2017-11-17 12:34:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 97,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/innocraft/plugin-InvalidateReports/commits/0.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/InvalidateReports/download/0.1.0',
          ),
          1 => 
          array (
            'name' => '0.1.1',
            'release' => '2017-11-20 10:22:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 6442,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/innocraft/plugin-InvalidateReports/commits/0.1.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/InvalidateReports/download/0.1.1',
          ),
          2 => 
          array (
            'name' => '0.1.2',
            'release' => '2018-12-04 20:38:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 6663,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/innocraft/plugin-InvalidateReports/commits/0.1.2',
            'readmeHtml' => 
            array (
              'description' => '

<p>This plugins allows you to <a href="https://matomo.org/faq/how-to/faq_155/">invalidate historical reports</a>.</p>

<p>You can invalidate all historical reports for a specific or for all websites and for a specific or all segments. When you invalidate historical reports, they will be re-processed from the raw logs the next time archiving will run. This is useful when you want to force Matomo to re-process historical data for all reports, for example when:</p>

<ul><li>you created a new <a href="https://matomo.org/docs/custom-reports/">Custom Report</a> and want the <a href="https://matomo.org/docs/custom-reports/">Custom Reports</a> to be processed for all historical data</li>
<li>you created a new <a href="https://matomo.org/docs/funnels/">Funnel</a> and want your <a href="https://matomo.org/docs/funnels/">Funnel</a> reports to be processed for all historical data</li>
<li>you have modified the raw visitor information (for example by <a href="https://matomo.org/log-analytics/">importing new visitor logs</a> in the past) and want these changes to raw logs reflected in all your reports.</li>
</ul>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => '/api/2.0/plugins/InvalidateReports/download/0.1.2',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/InvalidateReports/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      47 => 
      array (
        'name' => 'GoogleAuthenticator',
        'displayName' => 'Google Authenticator',
        'owner' => 'sgiehl',
        'description' => 'Adds Google Authenticator Two Factor Auth to Matomo',
        'homepage' => 'https://github.com/sgiehl/piwik-plugin-GoogleAuthenticator',
        'createdDateTime' => '2015-07-21 20:46:05',
        'donate' => 
        array (
          'paypal' => 'stefangiehl@web.de',
          'flattr' => 'https://flattr.com/thing/4453253/sgiehlpiwik-plugin-GoogleAuthenticator-on-GitHub',
          'bitcoin' => NULL,
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'login',
          1 => 'authentication',
          2 => '2FA',
          3 => 'google',
          4 => 'authenticator',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Stefan Giehl',
            'email' => 'stefan@matomo.org',
            'homepage' => 'https://github.com/sgiehl',
          ),
        ),
        'repositoryUrl' => 'https://github.com/sgiehl/piwik-plugin-GoogleAuthenticator',
        'lastUpdated' => '2018-12-04 09:16:05',
        'latestVersion' => '3.2.1',
        'numDownloads' => 13058,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/GoogleAuthenticator/images/3.2.1/login.jpg',
          1 => 'https://plugins.matomo.org/GoogleAuthenticator/images/3.2.1/setup.jpg',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '88',
          'numContributors' => '3',
          'lastCommitDate' => '2018-12-04 09:14:17',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2016-12-26 01:40:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
              'php' => '>=5.5',
            ),
            'numDownloads' => 32,
            'license' => 
            array (
              'name' => 'BSD & GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/sgiehl/piwik-plugin-GoogleAuthenticator/commits/3.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/GoogleAuthenticator/download/3.0.0',
          ),
          1 => 
          array (
            'name' => '3.0.1',
            'release' => '2016-12-27 00:02:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
              'php' => '>=5.5',
            ),
            'numDownloads' => 1475,
            'license' => 
            array (
              'name' => 'BSD & GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/sgiehl/piwik-plugin-GoogleAuthenticator/commits/3.0.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/GoogleAuthenticator/download/3.0.1',
          ),
          2 => 
          array (
            'name' => '3.0.2',
            'release' => '2017-06-15 13:52:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
              'php' => '>=5.5',
            ),
            'numDownloads' => 1541,
            'license' => 
            array (
              'name' => 'BSD & GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/sgiehl/piwik-plugin-GoogleAuthenticator/commits/3.0.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/GoogleAuthenticator/download/3.0.2',
          ),
          3 => 
          array (
            'name' => '3.1.0',
            'release' => '2018-01-02 12:18:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
              'php' => '>=5.5',
            ),
            'numDownloads' => 755,
            'license' => 
            array (
              'name' => 'BSD & GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/sgiehl/piwik-plugin-GoogleAuthenticator/commits/3.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/GoogleAuthenticator/download/3.1.0',
          ),
          4 => 
          array (
            'name' => '3.1.1',
            'release' => '2018-02-10 20:42:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
              'php' => '>=5.5',
            ),
            'numDownloads' => 2055,
            'license' => 
            array (
              'name' => 'BSD AND GPL-3.0+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/sgiehl/piwik-plugin-GoogleAuthenticator/commits/3.1.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/GoogleAuthenticator/download/3.1.1',
          ),
          5 => 
          array (
            'name' => '3.2.0',
            'release' => '2018-08-12 18:58:04',
            'requires' => 
            array (
              'piwik' => '>=3.6.0-b4,<4.0.0-b1',
              'php' => '>=5.5',
            ),
            'numDownloads' => 253,
            'license' => 
            array (
              'name' => 'BSD AND GPL-3.0+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/sgiehl/piwik-plugin-GoogleAuthenticator/commits/3.2.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/GoogleAuthenticator/download/3.2.0',
          ),
          6 => 
          array (
            'name' => '3.2.1',
            'release' => '2018-08-30 17:00:07',
            'requires' => 
            array (
              'piwik' => '>=3.6.0-b4,<4.0.0-b1',
              'php' => '>=5.5',
            ),
            'numDownloads' => 2460,
            'license' => 
            array (
              'name' => 'BSD AND GPL-3.0+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/sgiehl/piwik-plugin-GoogleAuthenticator/commits/3.2.1',
            'readmeHtml' => 
            array (
              'description' => '

<p>Adds a userbased possibility to use Google Authenticator 2FA as additional login security.
Each use can enable/disable this feature in his account settings.</p>

<p>This Plugin is based on the original Matomo (Piwik) Login plugin and needs this one to be installed but not active.</p>

<p>ATTENTION: Activating Google Authenticator for an account, also requires an auth code for direct API requests with the users token auth. Use <code>&amp;auth_code={authcode}</code> to do that.</p>

<p>Applications accessing your Matomo data using the API might thus no longer work. This also affects all versions of Matomo Mobile. To avoid this create a read only user account in Matomo to use it in those applications.</p>

<h3>Requirements</h3>

<p><a href="https://github.com/piwik/piwik">Piwik</a> 3.6.0 or higher is required.</p>

<p>Google Authenticator App for <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2">Android</a>, <a href="https://itunes.apple.com/de/app/google-authenticator/id388497605?mt=8">iOS</a> or <a href="https://m.google.com/authenticator">Blackberry</a> needs to be <a href="https://support.google.com/accounts/answer/1066447?hl=de">installed</a> on your mobile device</p>

<h3>Features</h3>

<ul><li>Userbased activation of Google Authenticator 2FA</li>
</ul>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<ul><li>3.2.0 compatibility to Matomo 3.6.0</li>
<li>3.0.0 compatibility to Piwik 3.0</li>
<li>0.1.0 Added possibility to define title and description for Google Authenticator app</li>
<li>0.0.4 fixes password reset link</li>
<li>0.0.3 small improvements</li>
<li>0.0.2 Added first translations</li>
<li>0.0.1 Initial release</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/GoogleAuthenticator/download/3.2.1',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/GoogleAuthenticator/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      48 => 
      array (
        'name' => 'PasswordVerifier',
        'displayName' => 'Password Verifier',
        'owner' => 'Findus23',
        'description' => 'Reject insecure passwords by searching for their hash in the haveibeenpwned.com database',
        'homepage' => 'https://lw1.at',
        'createdDateTime' => '2018-11-06 13:30:05',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Forum',
            'key' => 'forum',
            'value' => 'https://forum.matomo.org',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'lukas@matomo.org',
            'type' => 'email',
          ),
          2 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/Findus23/plugin-PasswordVerifier/issues',
            'type' => 'url',
          ),
          3 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/Findus23/plugin-PasswordVerifier',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'security',
          1 => 'passwords',
          2 => 'haveibeenpwned',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Lukas Winkler',
            'email' => 'lukas@matomo.org',
            'homepage' => 'https://lw1.at',
          ),
        ),
        'repositoryUrl' => 'https://github.com/Findus23/plugin-PasswordVerifier',
        'lastUpdated' => '2018-11-06 13:40:03',
        'latestVersion' => '0.1.1',
        'numDownloads' => 1133,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '4',
          'numContributors' => '2',
          'lastCommitDate' => '2019-04-06 15:38:16',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '0.1.0',
            'release' => '2018-11-06 13:30:05',
            'requires' => 
            array (
              'piwik' => '>=3.6.1,<4.0.0-b1',
            ),
            'numDownloads' => 2,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Findus23/plugin-PasswordVerifier/commits/0.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/PasswordVerifier/download/0.1.0',
          ),
          1 => 
          array (
            'name' => '0.1.1',
            'release' => '2018-11-06 13:40:03',
            'requires' => 
            array (
              'piwik' => '>=3.6.1,<4.0.0-b1',
            ),
            'numDownloads' => 1131,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Findus23/plugin-PasswordVerifier/commits/0.1.1',
            'readmeHtml' => 
            array (
              'description' => '

<p>This plugin sends the first 5 characters of the SHA1 hash of the password to the <a href="https://haveibeenpwned.com/Passwords">haveibeenpwned.com database</a> of over 500 million passwords exposed in data breaches. If the password is found, Matomo rejects it and asks the user to use a more secure password.</p>

<p>This plugin only acts on passwords changes and can\'t access existing passwords as they are stored securely hashed by Matomo.</p>

<h3>Disclaimer</h3>

<p><strong>Attention</strong>: This is a beta plugin. Please don\'t use it in security critical environments without checking the correctness of <a href="https://github.com/Findus23/plugin-PasswordVerifier/blob/master/PasswordVerifier.php">the source</a> yourself.</p>',
              'faq' => '<p><strong>This plugin is rejecting too many passwords. Can I set a threshold of occurances required to reject a password?</strong></p>

<p>Not yet, but it would be very easy to add. If you are interested, just contact me.</p>',
              'documentation' => '',
              'changelog' => '<h4>0.1.0</h4>

<p>first working version</p>

<h4>0.1.1</h4>

<p>add disclaimer in description</p>',
            ),
            'download' => '/api/2.0/plugins/PasswordVerifier/download/0.1.1',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/PasswordVerifier/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      49 => 
      array (
        'name' => 'CustomiseTranslations',
        'displayName' => 'Customise Translations',
        'owner' => 'Findus23',
        'description' => 'This plugin allows you to modify all translateable strings in Matomo',
        'homepage' => 'https://lw1.at',
        'createdDateTime' => '2018-10-26 19:32:03',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Forum',
            'key' => 'forum',
            'value' => 'https://forum.matomo.org',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'lukas@matomo.org',
            'type' => 'email',
          ),
          2 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/Findus23/plugin-CustomiseTranslations/issues',
            'type' => 'url',
          ),
          3 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/Findus23/plugin-CustomiseTranslations',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'language',
          1 => 'customisation',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Lukas Winkler',
            'email' => 'lukas@matomo.org',
            'homepage' => 'https://lw1.at',
          ),
        ),
        'repositoryUrl' => 'https://github.com/Findus23/plugin-CustomiseTranslations',
        'lastUpdated' => '2018-10-28 07:52:04',
        'latestVersion' => '0.1.2',
        'numDownloads' => 1220,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/CustomiseTranslations/images/0.1.2/settings.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '3',
          'numContributors' => '1',
          'lastCommitDate' => '2018-10-28 07:50:26',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '0.1.0',
            'release' => '2018-10-26 19:32:04',
            'requires' => 
            array (
              'piwik' => '>=3.6.0,<4.0.0-b1',
            ),
            'numDownloads' => 2,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Findus23/plugin-CustomiseTranslations/commits/0.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/CustomiseTranslations/download/0.1.0',
          ),
          1 => 
          array (
            'name' => '0.1.1',
            'release' => '2018-10-26 20:26:03',
            'requires' => 
            array (
              'piwik' => '>=3.6.0,<4.0.0-b1',
            ),
            'numDownloads' => 25,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Findus23/plugin-CustomiseTranslations/commits/0.1.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/CustomiseTranslations/download/0.1.1',
          ),
          2 => 
          array (
            'name' => '0.1.2',
            'release' => '2018-10-28 07:52:04',
            'requires' => 
            array (
              'piwik' => '>=3.6.0,<4.0.0-b1',
            ),
            'numDownloads' => 1193,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Findus23/plugin-CustomiseTranslations/commits/0.1.2',
            'readmeHtml' => 
            array (
              'description' => '

<p>This plugin allows you to quickly replace translatable texts in Matomo.</p>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<p>Here goes the changelog text.</p>',
            ),
            'download' => '/api/2.0/plugins/CustomiseTranslations/download/0.1.2',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/CustomiseTranslations/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      50 => 
      array (
        'name' => 'ForceSSL',
        'displayName' => 'Force SSL',
        'owner' => 'innocraft',
        'description' => 'Automatically redirect all http requests to https. For security reasons it is recommended to always use Matomo Analytics over https (SSL).',
        'homepage' => 'https://www.innocraft.com',
        'createdDateTime' => '2017-01-06 03:40:03',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/innocraft/plugin-ForceSSL/issues',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/innocraft/plugin-ForceSSL',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'security',
          1 => 'https',
          2 => 'ssl',
          3 => 'analytics',
          4 => 'certificate',
          5 => 'secure',
          6 => 'privacy',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'InnoCraft',
            'email' => 'contact@innocraft.com',
            'homepage' => 'https://www.innocraft.com',
          ),
        ),
        'repositoryUrl' => 'https://github.com/innocraft/plugin-ForceSSL',
        'lastUpdated' => '2018-09-21 02:04:03',
        'latestVersion' => '3.0.2',
        'numDownloads' => 19906,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '9',
          'numContributors' => '1',
          'lastCommitDate' => '2018-09-21 02:04:54',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2017-01-06 03:40:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0',
            ),
            'numDownloads' => 1399,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/innocraft/plugin-ForceSSL/commits/3.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/ForceSSL/download/3.0.0',
          ),
          1 => 
          array (
            'name' => '3.0.1',
            'release' => '2017-02-14 19:04:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 11454,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/innocraft/plugin-ForceSSL/commits/3.0.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/ForceSSL/download/3.0.1',
          ),
          2 => 
          array (
            'name' => '3.0.2',
            'release' => '2018-09-21 02:04:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 7053,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/innocraft/plugin-ForceSSL/commits/0.0.124',
            'readmeHtml' => 
            array (
              'description' => '

<p>When you activate this plugin, it will automatically redirect all "http://" requests to "https://" in the Matomo UI and API.
It also makes sure that the generated tracking code will use HTTPS. This is especially useful if your tracking code is
 embedded into your website automatically, for example via the WP-Matomo (WP-Piwik) Wordpress plugin.</p>

<p>For security and privacy reasons you should always use Matomo over HTTPS (SSL).</p>

<p>Note: If SSL or HTTPS is not correctly configured on your server, activating this plugin may break your Matomo. In such 
a case you can disable this plugin again by removing the line <code>Plugins[] = ForceSSL</code> from the <code>config/config.ini.php</code> file. 
In the same file there may be also a line <code>force_ssl = 1</code>. If you find such an entry and your server is not configured properly,
 we recommend to remove this line from the config file.</p>

<p>Any questions, feature wishes or problems? <a href="https://www.innocraft.com">Get in touch with us</a>, we are happy to help.</p>

<h3>About InnoCraft</h3>

<p>We at <a href="https://www.innocraft.com">InnoCraft</a> are the creators of Matomo and know it better than anyone else. 
This means all plugins are perfectly integrated into Matomo and come with outstanding features and quality to grow 
your business. We help our clients get started, configure, monitor and make the most of their Matomo analytics service. 
We also offer unique analytics products and services that help grow your business and meet the needs of medium and large 
businesses alike.</p>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<p>3.0.1
 - Force SSL in tracking code</p>

<p>3.0.0 
 - Initial version</p>',
            ),
            'download' => '/api/2.0/plugins/ForceSSL/download/3.0.2',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/ForceSSL/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      51 => 
      array (
        'name' => 'HidePasswordReset',
        'displayName' => 'Hide Password Reset',
        'owner' => 'jbrule',
        'description' => 'Hides the Lost your password? option on login form and allows to replace with a different message.',
        'homepage' => 'https://github.com/jbrule/matomoplugin-HidePasswordReset',
        'createdDateTime' => '2018-05-02 16:32:03',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/jbrule/matomoplugin-HidePasswordReset/issues',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'login',
          1 => 'password reset',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Josh Brule',
            'email' => NULL,
            'homepage' => NULL,
          ),
        ),
        'repositoryUrl' => 'https://github.com/jbrule/matomoplugin-HidePasswordReset',
        'lastUpdated' => '2018-09-20 15:20:04',
        'latestVersion' => '1.3.3',
        'numDownloads' => 8829,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/HidePasswordReset/images/1.3.3/0_Default_Login_Form.png',
          1 => 'https://plugins.matomo.org/HidePasswordReset/images/1.3.3/1_Login_Form_Message.png',
          2 => 'https://plugins.matomo.org/HidePasswordReset/images/1.3.3/2_Specify_Login_Message.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => NULL,
          'numContributors' => NULL,
          'lastCommitDate' => '2018-09-20 15:31:02',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '1.0.0',
            'release' => '2018-05-02 16:32:03',
            'requires' => 
            array (
              'piwik' => '>=3.3.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 0,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/jbrule/matomoplugin-HidePasswordReset/commits/1.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/HidePasswordReset/download/1.0.0',
          ),
          1 => 
          array (
            'name' => '1.2.0',
            'release' => '2018-05-02 16:42:03',
            'requires' => 
            array (
              'piwik' => '>=3.3.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 4,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/jbrule/matomoplugin-HidePasswordReset/commits/1.2.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/HidePasswordReset/download/1.2.0',
          ),
          2 => 
          array (
            'name' => '1.3.1',
            'release' => '2018-05-02 19:42:04',
            'requires' => 
            array (
              'piwik' => '>=3.3.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 6450,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/jbrule/matomoplugin-HidePasswordReset/commits/1.3.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/HidePasswordReset/download/1.3.1',
          ),
          3 => 
          array (
            'name' => '1.3.3',
            'release' => '2018-09-20 15:20:04',
            'requires' => 
            array (
              'piwik' => '>=3.3.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 2375,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/jbrule/matomoplugin-HidePasswordReset/commits/1.3.3',
            'readmeHtml' => 
            array (
              'description' => '

<p>Hides the "Lost your password?" option on login form. This plugin was created to prevent user confusion when using a central identity management platform such as LDAP or SAML.</p>

',
              'faq' => '<p><strong>Why not also hide password reset in admin?</strong></p>

<p>The login form template provides an <a href="https://developer.matomo.org/guides/events">event</a> that allows injection of html code which makes it a simple process to hide the element.
The userSettings template does not provide a clean way to remove the option.</p>',
              'documentation' => '<p>The easiest way to install is to find the plugin in the <a href="https://plugins.matomo.org/">Matomo Marketplace</a>.
Just Activate on the plugin page after install and the "Lost your password?" message will be removed.
A replacement login message may be supplied on the General Settings screen (see screenshots).</p>',
              'changelog' => '<p>1.0.0 Initial Release
1.1.0 Marketplace Tag
1.2.0 Fixed screenshot filenames
1.3.0 Fixed error upon login
1.3.3 Reorganized docs and implemented new marketplace webhook</p>',
            ),
            'download' => '/api/2.0/plugins/HidePasswordReset/download/1.3.3',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/HidePasswordReset/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      52 => 
      array (
        'name' => 'VisitorGenerator',
        'displayName' => 'Visitor Generator',
        'owner' => 'matomo-org',
        'description' => 'Developer tool that lets you generate fake visits. Useful if you are working with plugins or themes or if you use the Matomo (Piwik) API.',
        'homepage' => 'http://piwik.org',
        'createdDateTime' => '2013-10-31 22:23:05',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Forum',
            'key' => 'forum',
            'value' => 'https://forum.piwik.org',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/piwik/plugin-VisitorGenerator/issues',
            'type' => 'url',
          ),
          2 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/piwik/plugin-VisitorGenerator',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'development',
          1 => 'tools',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Piwik',
            'email' => 'hello@piwik.org',
            'homepage' => 'http://piwik.org',
          ),
        ),
        'repositoryUrl' => 'https://github.com/matomo-org/plugin-VisitorGenerator',
        'lastUpdated' => '2018-09-03 21:56:09',
        'latestVersion' => '3.1.1',
        'numDownloads' => 31456,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/VisitorGenerator/images/3.1.1/Visitor_Generator.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '238',
          'numContributors' => '11',
          'lastCommitDate' => '2019-08-25 10:04:19',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2016-09-13 22:08:09',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 2420,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-VisitorGenerator/commits/3.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/VisitorGenerator/download/3.0.0',
          ),
          1 => 
          array (
            'name' => '3.0.1',
            'release' => '2017-11-01 21:54:09',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 1888,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-VisitorGenerator/commits/3.0.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/VisitorGenerator/download/3.0.1',
          ),
          2 => 
          array (
            'name' => '3.1.0',
            'release' => '2018-04-03 03:42:08',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 1865,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-VisitorGenerator/commits/3.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/VisitorGenerator/download/3.1.0',
          ),
          3 => 
          array (
            'name' => '3.1.1',
            'release' => '2018-09-03 21:56:09',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 3584,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-VisitorGenerator/commits/3.1.1',
            'readmeHtml' => 
            array (
              'description' => '

<p>Plugin to create fake visits, websites, users and goals. This can be used by Matomo (Piwik) users or developers as an easy way to generate fake data to populate Matomo reports.</p>

<p>You can overwrite the log files that are used to generate fake visits in <a href="https://github.com/piwik/plugin-VisitorGenerator/blob/master/data">plugins/VisitorGenerator/data</a> or add new logs to the <code>data</code> directory. All files ending with <code>*.log</code> will be replayed.</p>

<p>Plugin developers can provide their own log files by placing \'*.log\' files within a \'data\' directory of their plugin. This way plugin developers make sure there will be always useful test data.</p>

<h3>Usage</h3>

<h4>UI</h4>

<p>The plugin adds a new item to the Matomo admin UI visible only for users having Super User access under the section "Development". There you can select a site and for how many days in the past you want to generate new visits.</p>

<p>Note: you need to first enable the Development mode in Matomo. In the root directory of your Matomo install, run the following command to enable development mode: <code>./console development:enable</code></p>

<h4>CLI</h4>

<p>It also adds the following commands to the <a href="http://developer.piwik.org/guides/piwik-on-the-command-line">Matomo CLI tool</a>:</p>

<ul><li>Generate visits</li>
<li>Generate goals</li>
<li>Generate users</li>
<li>Generate websites</li>
<li>Generate annotation</li>
<li>Shorten log file</li>
<li>Anonymize log file</li>
</ul><h5>Examples</h5>

<ul><li><code>./console visitorgenerator:generate-annotation --idsite 5</code> generate one annotation for the current day for site with id 5</li>
<li><code>./console visitorgenerator:generate-goals --idsite 5</code> generates some predefined goals for site with id 5</li>
<li><code>./console visitorgenerator:generate-users --limit 100</code>  generates 100 users</li>
<li><code>./console visitorgenerator:generate-websites --limit 100</code> generates 100 websites</li>
<li><code>./console visitorgenerator:generate-visits --idsite 5</code>  generates many visits for site with id 5 for today</li>
<li><code>./console visitorgenerator:generate-visits --idsite 5 --days 2</code> generates many visits for site with id 5 for today and yesterday</li>
<li><code>./console visitorgenerator:anonymize-log /path/to/log</code> takes an Apache log file, anonymizes it and places it in a data directory so it will be replayed the next time "generate-visits" is executed</li>
<li><code>./console visitorgenerator:shorten-log /path/to/file.log &gt; file.short.log</code> takes a large Apache log file and keeps only a small number of logs per day</li>
<li><code>./console visitorgenerator:generate-visits --idsite 5 --custom-piwik-url=http://example.com/</code> Uses \'http://example.com/\' as Matomo-URL and generates many visits for site with id 5 for today</li>
</ul><h3>Legalnotice</h3>

<p>This plugin is released under the GPLv3+ license.</p>

<p>This plugin uses the <a href="libs/Faker/readme.md">Faker</a> library which is released under the <a href="libs/Faker/LICENSE">MIT license</a>.</p>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<ul><li>1.0 Initial release</li>
<li>1.1 New features:

<ul><li>Added CLI commands</li>
<li>Added possibility to generate websites, users and goals</li>
<li>Replay all log files within the data directory</li>
</ul></li>
<li>1.2 New features:

<ul><li>New log file added</li>
<li>Added possibility to shorten and anonymize log files</li>
<li>Added possibility to let plugins define their own log files</li>
<li>Added possibility to generate annotations</li>
<li>Replay only log entries having the same day of the month</li>
</ul></li>
<li>1.2.1 New workaround:

<ul><li>When force_ssl is enabled, and visits are generated on <code>localhost</code>, force to use HTTP instead of HTTPS</li>
</ul></li>
<li>1.2.3 Minor UI tweaks to make it consistent with Piwik look &amp; feel</li>
<li>3.0.0

<ul><li>Compatibility with Piwik 3.0</li>
</ul></li>
<li>3.0.1

<ul><li>Adds tracking of bandwidth</li>
<li>Adds tracking of custom dimensions and ecommerce cart updates + orders</li>
</ul></li>
<li>3.1.0

<ul><li>Add new command to log visits live as if they were from real incoming traffic</li>
</ul></li>
<li>3.1.1

<ul><li>Correct URL processing in manipulateRequestUrl after LogHelper regex change</li>
<li>Fix log out of order exception that occurs on large logs </li>
<li>Adds search engine referrers without keyword</li>
</ul></li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/VisitorGenerator/download/3.1.1',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/VisitorGenerator/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      53 => 
      array (
        'name' => 'DeviceNetworkInformation',
        'displayName' => 'Device Network Information',
        'owner' => 'MichaelHeerklotz',
        'description' => 'Detects network type on mobile devices where the browser supports it.',
        'homepage' => 'https://github.com/MichaelHeerklotz/plugin-DeviceNetworkInformation',
        'createdDateTime' => '2018-08-22 13:56:03',
        'donate' => 
        array (
          'paypal' => 'michael.heerklotz@web.de',
          'bitcoin' => NULL,
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'network',
          1 => 'type',
          2 => 'mobile',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Michael Heerklotz',
            'email' => 'michael.heerklotz@web.de',
            'homepage' => 'https://www.5hd.de',
          ),
        ),
        'repositoryUrl' => 'https://github.com/MichaelHeerklotz/plugin-DeviceNetworkInformation',
        'lastUpdated' => '2018-08-22 13:56:03',
        'latestVersion' => '3.0.3',
        'numDownloads' => 4343,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => NULL,
          'numContributors' => NULL,
          'lastCommitDate' => '2018-08-22 13:55:56',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.3',
            'release' => '2018-08-22 13:56:03',
            'requires' => 
            array (
              'piwik' => '>=3.1.0-rc1,<4.0.0-b1',
            ),
            'numDownloads' => 4343,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/DeviceNetworkInformation/3.0.3/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/MichaelHeerklotz/plugin-DeviceNetworkInformation/commits/3.0.3',
            'readmeHtml' => 
            array (
              'description' => '

<p>Detects network type on (mobile) devices where the browser supports it.
Makes use of the Navigator.connection property( https://developer.mozilla.org/en-US/docs/Web/API/Navigator/connection ).</p>

',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<p>3.0.3: First stable release</p>',
            ),
            'download' => '/api/2.0/plugins/DeviceNetworkInformation/download/3.0.3',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/DeviceNetworkInformation/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      54 => 
      array (
        'name' => 'DevicePixelRatio',
        'displayName' => 'Device Pixel Ratio',
        'owner' => 'johsin18',
        'description' => 'Collects statistics on the device pixel ratio of the visitor\'s devices.  Useful to analyze how many visitors have Retina or other high DPI displays.',
        'homepage' => NULL,
        'createdDateTime' => '2018-07-29 19:18:04',
        'donate' => 
        array (
          'paypal' => 'johannes@singler.name',
          'flattr' => '',
          'bitcoin' => NULL,
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Wiki',
            'key' => 'wiki',
            'value' => 'https://github.com/johsin18/DevicePixelRatioMatomoPlugin/wiki',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/johsin18/DevicePixelRatioMatomoPlugin/issues',
            'type' => 'url',
          ),
          2 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/johsin18/DevicePixelRatioMatomoPlugin',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'Retina',
          1 => 'high DPI',
          2 => 'high resolution',
          3 => 'hires',
          4 => 'hi-res',
          5 => 'device pixel ratio',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Johannes Singler',
            'email' => 'johannes@singler.name',
            'homepage' => NULL,
          ),
        ),
        'repositoryUrl' => 'https://github.com/johsin18/DevicePixelRatioMatomoPlugin',
        'lastUpdated' => '2018-08-08 13:14:03',
        'latestVersion' => '1.0.1',
        'numDownloads' => 4016,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/DevicePixelRatio/images/1.0.1/Device_Pixel_Ratio_Ranges_Report.png',
          1 => 'https://plugins.matomo.org/DevicePixelRatio/images/1.0.1/Device_Pixel_Ratio_Report.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '24',
          'numContributors' => '1',
          'lastCommitDate' => '2018-08-15 06:35:04',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '0.1.0',
            'release' => '2018-07-29 19:18:04',
            'requires' => 
            array (
              'piwik' => '>=3.5.1-stable,<4.0.0-b1',
            ),
            'numDownloads' => 0,
            'license' => 
            array (
              'name' => 'GPL-3.0+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/johsin18/DevicePixelRatioMatomoPlugin/commits/1.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/DevicePixelRatio/download/0.1.0',
          ),
          1 => 
          array (
            'name' => '1.0.0',
            'release' => '2018-07-29 19:24:04',
            'requires' => 
            array (
              'piwik' => '>=3.5.1-stable,<4.0.0-b1',
            ),
            'numDownloads' => 184,
            'license' => 
            array (
              'name' => 'GPL-3.0+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/johsin18/DevicePixelRatioMatomoPlugin/commits/1.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/DevicePixelRatio/download/1.0.0',
          ),
          2 => 
          array (
            'name' => '1.0.1',
            'release' => '2018-08-08 13:14:03',
            'requires' => 
            array (
              'piwik' => '>=3.5.1,<4.0.0-b1',
            ),
            'numDownloads' => 3832,
            'license' => 
            array (
              'name' => 'GPL-3.0+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/johsin18/DevicePixelRatioMatomoPlugin/commits/1.0.1',
            'readmeHtml' => 
            array (
              'description' => '

<p>This plugin collects statistics on the device pixel ratio of the visitor\'s devices.  This is useful to analyze how many visitors have Retina or other high DPI displays.  Find the respective report in the Visitors - Devices section.  You can switch to "Device Pixel Ratio Ranges" to see what share of visitors has a device pixel ratio of up to 1.00, 2.00, and so on.  Also, the screen resolution in the visitor log is augmented with the device pixel ratio (abbreviated to DPR there).</p>

<p>The measurement is based on the <a href="https://drafts.csswg.org/cssom-view/#dom-window-devicepixelratio">window.devicePixelRatio</a> browser variable, which is <a href="https://caniuse.com/#search=devicePixelRatio">supported</a> by all modern browsers.  Note that also a full page zoom different from 100% changes the device pixel ratio.  A user setting the zoom to 200% on a regular screen will be counted in the same way as a user having a Retina display with 100% zoom.  Still, the user with 200% zoom would also benefit from higher DPI assets.</p>

<p>The device pixel ratio is stored with two decimals accuracy.  For browsers not reporting the device pixel ratio, and for visits having occurred before the installation of this plugin, we report the value "Unknown".</p>',
              'faq' => '<p><strong>Shouldn\'t the plugin analyze the pure device pixel ratio, wihtout taking the zoom into account?</strong></p>

<p>I do not think that you can query the browser for neither the full page zoom nor the pure pixel device ratio, window.pixelDeviceRatio gives you both at the same time.</p>

<p><strong>What if the device pixel ratio changes during the visit (e.g. by the user changing the full page zoom level)?</strong></p>

<p>The plugin records the device pixel ratio at the beginning of each visit, later changes are ignored.  I might think about an option for taking the value for the last action instead, if you provide me with very good arguments for that.</p>

<p><strong>An unknown device pixel ratio is reported for all visitors.  What is wrong?</strong></p>

<p>This plugin needs to add a snippet to the JavaScript code that make the browser report visitor actions.  To allow this addition, piwik.js must be writable in you installation ("Writable JavaScript Tracker" in System Check must be checked).  As the script might be cached on client side, it might take a while until all clients will correctly report the device pixel ratio.  If you report the actions using some other API, add "devicePixelRatio=1.23" to the arguments.</p>',
              'documentation' => '',
              'changelog' => '<h2>1.0.1</h2>

<ul><li>Pie chart now the default visualization for device pixel ratio ranges.</li>
<li>Improvements to the description.</li>
</ul><h2>1.0.0</h2>

<ul><li>Initial release.</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/DevicePixelRatio/download/1.0.1',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/DevicePixelRatio/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      55 => 
      array (
        'name' => 'JsTrackerCustom',
        'displayName' => 'Js Tracker Custom',
        'owner' => 'innocraft',
        'description' => 'This plugin allows you to add custom JavaScript to Matomos tracking code',
        'homepage' => 'https://www.innocraft.com',
        'createdDateTime' => '2018-07-18 13:54:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/innocraft/plugin-JsTrackerCustom/issues',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/innocraft/plugin-JsTrackerCustom',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'tracker',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'InnoCraft',
            'email' => 'contact@innocraft.com',
            'homepage' => 'https://www.innocraft.com',
          ),
        ),
        'repositoryUrl' => 'https://github.com/innocraft/plugin-JsTrackerCustom',
        'lastUpdated' => '2018-07-18 14:00:05',
        'latestVersion' => '0.1.1',
        'numDownloads' => 2769,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '11',
          'numContributors' => '3',
          'lastCommitDate' => '2018-11-25 17:51:07',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '0.1.0',
            'release' => '2018-07-18 13:54:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0-b1',
              'php' => '>=5.5.0',
            ),
            'numDownloads' => 2,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/innocraft/plugin-JsTrackerCustom/commits/0.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/JsTrackerCustom/download/0.1.0',
          ),
          1 => 
          array (
            'name' => '0.1.1',
            'release' => '2018-07-18 14:00:05',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0-b1',
              'php' => '>=5.5.0',
            ),
            'numDownloads' => 2767,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/innocraft/plugin-JsTrackerCustom/commits/0.1.1',
            'readmeHtml' => 
            array (
              'description' => '

<p>This plugin allows you to extend the piwik.js with custom js code.</p>

<p>Once you have activated the plugin, you can customise the tracking code in Administration &gt; Diagnostics &gt;  Custom Tracker JS.</p>

<p>To be able to add custom JavaScript, the file <code>plugins/JsTrackerCustom/tracker.js</code> needs to be writable.</p>

<p>NOTE: We recommend to use the <a href="https://plugins.matomo.org/TagManager">Matomo Tag Manager plugin</a> instead.</p>

<p>Any questions, feature wishes or problems? <a href="https://www.innocraft.com">Get in touch with us</a>, we are happy to help.</p>

<h3>About InnoCraft</h3>

<p>We at <a href="https://www.innocraft.com">InnoCraft</a> are the creators of Piwik and know it better than anyone else. 
This means all plugins are perfectly integrated into Piwik and come with outstanding features and quality to grow 
your business. We help our clients get started, configure, monitor and make the most of their Piwik analytics service. 
We also offer unique analytics products and services that help grow your business and meet the needs of medium and large 
businesses alike.</p>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => '/api/2.0/plugins/JsTrackerCustom/download/0.1.1',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/JsTrackerCustom/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      56 => 
      array (
        'name' => 'AOM',
        'displayName' => 'AOM',
        'owner' => 'advanced-online-marketing',
        'description' => 'Integrate additional data like costs and campaign names from advertising platforms like AdWords, Bing, Criteo, Facebook, Taboola as well as your indiv',
        'homepage' => 'http://www.advanced-online-marketing.com',
        'createdDateTime' => '2016-06-23 09:52:03',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'Marketing',
          1 => 'Advertising',
          2 => 'Criteo',
          3 => 'Google AdWords',
          4 => 'Microsoft Bing',
          5 => 'Facebook Ads',
          6 => 'Taboola',
          7 => 'Online-Marketing',
          8 => 'Performance-Marketing',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Daniel Stonies',
            'email' => 'daniel.stonies@googlemail.com',
            'homepage' => NULL,
          ),
          1 => 
          array (
            'name' => 'André Kolell',
            'email' => 'andre.kolell@gmail.com',
            'homepage' => 'http://www.andrekolell.de',
          ),
        ),
        'repositoryUrl' => 'https://github.com/advanced-online-marketing/AOM',
        'lastUpdated' => '2018-06-23 09:56:30',
        'latestVersion' => '1.4.4',
        'numDownloads' => 14223,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/AOM/images/1.4.4/Marketing_Performance_Report.png',
          1 => 'https://plugins.matomo.org/AOM/images/1.4.4/Marketing_Performance_Row_Evolution.png',
          2 => 'https://plugins.matomo.org/AOM/images/1.4.4/Visitor_Profile_Popup.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '225',
          'numContributors' => '4',
          'lastCommitDate' => '2018-06-23 09:53:05',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '0.5.2',
            'release' => '2017-02-17 18:38:40',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 0,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/0.5.2/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/0.5.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/0.5.2',
          ),
          1 => 
          array (
            'name' => '0.5.3',
            'release' => '2017-02-17 19:40:37',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 2,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/0.5.3/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/0.5.3',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/0.5.3',
          ),
          2 => 
          array (
            'name' => '0.5.4',
            'release' => '2017-02-17 20:36:36',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 186,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/0.5.4/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/0.5.4',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/0.5.4',
          ),
          3 => 
          array (
            'name' => '0.5.6',
            'release' => '2017-02-28 07:12:37',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 281,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/0.5.6/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/0.5.6',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/0.5.6',
          ),
          4 => 
          array (
            'name' => '0.5.7',
            'release' => '2017-03-21 06:04:35',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 370,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/0.5.7/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/0.5.7',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/0.5.7',
          ),
          5 => 
          array (
            'name' => '0.5.8',
            'release' => '2017-04-15 16:24:16',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 212,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/0.5.8/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/0.5.8',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/0.5.8',
          ),
          6 => 
          array (
            'name' => '0.6.0',
            'release' => '2017-04-21 15:12:20',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 37,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/0.6.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/0.6.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/0.6.0',
          ),
          7 => 
          array (
            'name' => '0.6.1',
            'release' => '2017-04-23 14:00:26',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 328,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/0.6.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/0.6.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/0.6.1',
          ),
          8 => 
          array (
            'name' => '0.6.2',
            'release' => '2017-05-06 05:52:17',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 5,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/0.6.2/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/0.6.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/0.6.2',
          ),
          9 => 
          array (
            'name' => '0.6.3',
            'release' => '2017-05-06 09:08:18',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 257,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/0.6.3/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/0.6.3',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/0.6.3',
          ),
          10 => 
          array (
            'name' => '0.6.4',
            'release' => '2017-05-11 21:28:13',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 26,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/0.6.4/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/0.6.4',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/0.6.4',
          ),
          11 => 
          array (
            'name' => '0.6.5',
            'release' => '2017-05-12 09:12:25',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 12,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/0.6.5/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/0.6.5',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/0.6.5',
          ),
          12 => 
          array (
            'name' => '0.6.6',
            'release' => '2017-05-12 15:32:41',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 684,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/0.6.6/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/0.6.6',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/0.6.6',
          ),
          13 => 
          array (
            'name' => '0.6.8',
            'release' => '2017-06-24 14:42:24',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 254,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/0.6.8/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/0.6.8',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/0.6.8',
          ),
          14 => 
          array (
            'name' => '0.6.9',
            'release' => '2017-06-25 16:18:42',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 261,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/0.6.9/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/0.6.9',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/0.6.9',
          ),
          15 => 
          array (
            'name' => '1.0.0',
            'release' => '2017-07-11 14:50:33',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 8,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/1.0.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/1.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/1.0.0',
          ),
          16 => 
          array (
            'name' => '1.0.1',
            'release' => '2017-07-11 17:20:22',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 1,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/1.0.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/1.0.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/1.0.1',
          ),
          17 => 
          array (
            'name' => '1.0.2',
            'release' => '2017-07-11 17:42:29',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 22,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/1.0.2/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/1.0.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/1.0.2',
          ),
          18 => 
          array (
            'name' => '1.0.3',
            'release' => '2017-07-12 09:04:22',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 2,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/1.0.3/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/1.0.3',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/1.0.3',
          ),
          19 => 
          array (
            'name' => '1.0.4',
            'release' => '2017-07-12 09:40:21',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 4,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/1.0.4/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/1.0.4',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/1.0.4',
          ),
          20 => 
          array (
            'name' => '1.0.5',
            'release' => '2017-07-12 12:52:38',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 3,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/1.0.5/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/1.0.5',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/1.0.5',
          ),
          21 => 
          array (
            'name' => '1.0.6',
            'release' => '2017-07-12 14:28:27',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 2,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/1.0.6/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/1.0.6',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/1.0.6',
          ),
          22 => 
          array (
            'name' => '1.0.7',
            'release' => '2017-07-12 17:10:31',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 83,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/1.0.7/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/1.0.7',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/1.0.7',
          ),
          23 => 
          array (
            'name' => '1.0.8',
            'release' => '2017-07-13 06:50:18',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 456,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/1.0.8/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/1.0.8',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/1.0.8',
          ),
          24 => 
          array (
            'name' => '1.1.0',
            'release' => '2017-07-24 19:56:53',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 37,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/1.1.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/1.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/1.1.0',
          ),
          25 => 
          array (
            'name' => '1.1.1',
            'release' => '2017-07-25 07:35:10',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 2,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/1.1.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/1.1.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/1.1.1',
          ),
          26 => 
          array (
            'name' => '1.1.2',
            'release' => '2017-07-25 08:14:50',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 373,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/1.1.2/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/1.1.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/1.1.2',
          ),
          27 => 
          array (
            'name' => '1.1.3',
            'release' => '2017-08-07 16:33:29',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 215,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/1.1.3/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/1.1.3',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/1.1.3',
          ),
          28 => 
          array (
            'name' => '1.2.1',
            'release' => '2017-08-21 12:53:40',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 9,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/1.2.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/1.2.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/1.2.1',
          ),
          29 => 
          array (
            'name' => '1.2.2',
            'release' => '2017-08-21 15:45:09',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 33,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/1.2.2/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/1.2.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/1.2.2',
          ),
          30 => 
          array (
            'name' => '1.2.3',
            'release' => '2017-08-22 14:39:08',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 0,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/1.2.3/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/1.2.3',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/1.2.3',
          ),
          31 => 
          array (
            'name' => '1.2.4',
            'release' => '2017-08-22 14:53:35',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 584,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/1.2.4/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/1.2.4',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/1.2.4',
          ),
          32 => 
          array (
            'name' => '1.3.0',
            'release' => '2017-09-19 08:59:07',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 358,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/1.3.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/1.3.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/1.3.0',
          ),
          33 => 
          array (
            'name' => '1.3.1',
            'release' => '2017-09-30 09:52:02',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 1,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/1.3.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/1.3.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/1.3.1',
          ),
          34 => 
          array (
            'name' => '1.3.2',
            'release' => '2017-09-30 10:34:40',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 1706,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/1.3.2/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/1.3.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/1.3.2',
          ),
          35 => 
          array (
            'name' => '1.4.0',
            'release' => '2018-04-01 11:00:29',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 189,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/1.4.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/1.4.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/1.4.0',
          ),
          36 => 
          array (
            'name' => '1.4.1',
            'release' => '2018-04-06 12:40:27',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 1222,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/1.4.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/1.4.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/1.4.1',
          ),
          37 => 
          array (
            'name' => '1.4.3',
            'release' => '2018-06-23 09:44:28',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 1,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/1.4.3/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/1.4.3',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/1.4.3',
          ),
          38 => 
          array (
            'name' => '1.4.4',
            'release' => '2018-06-23 09:56:30',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 2637,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AOM/1.4.4/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/advanced-online-marketing/AOM/commits/1.4.4',
            'readmeHtml' => 
            array (
              'description' => '

<p><strong>This plugin can create a lot of value. But be aware that its initial setup will require some effort!</strong></p>

<p>See <a href="http://www.advanced-online-marketing.com/docs.html">http://www.advanced-online-marketing.com/docs.html</a> for this 
plugin\'s documentation.</p>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => '/api/2.0/plugins/AOM/download/1.4.4',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/AOM/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      57 => 
      array (
        'name' => 'ExposureResearchTools',
        'displayName' => 'Exposure Research Tools',
        'owner' => 'BurninLeo',
        'description' => 'Download unique visits as CSV, and support for merging data with pre-/post surveys for selective exposure research (see Plugin Website for details).',
        'homepage' => 'https://github.com/BurninLeo/ExposureResearchTools',
        'createdDateTime' => '2016-07-04 13:10:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Documentation',
            'key' => 'docs',
            'value' => 'https://github.com/BurninLeo/ExposureResearchTools',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'mail@dominik-leiner.de',
            'type' => 'email',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'tracking',
          1 => 'download',
          2 => 'data retrieval',
          3 => 'csv',
          4 => 'research',
          5 => 'selective exposure',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Dominik J. Leiner',
            'email' => 'leiner@ifkw.lmu.de',
            'homepage' => 'http://www.ls1.ifkw.uni-muenchen.de/personen/wiss_ma/leiner_dominik/index.html',
          ),
        ),
        'repositoryUrl' => 'https://github.com/BurninLeo/ExposureResearchTools',
        'lastUpdated' => '2018-06-20 13:44:03',
        'latestVersion' => '0.1.9',
        'numDownloads' => 5952,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/ExposureResearchTools/images/0.1.9/exports_visits.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '25',
          'numContributors' => '1',
          'lastCommitDate' => '2018-06-20 13:42:42',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '0.1.9',
            'release' => '2018-06-20 13:44:03',
            'requires' => 
            array (
              'piwik' => '>=2.16.0,<4.0.0-b1',
              'php' => '>=5.3.0',
            ),
            'numDownloads' => 1919,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/ExposureResearchTools/0.1.9/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/BurninLeo/ExposureResearchTools/commits/0.1.9',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<ul><li>0.1.0 Original release of the plugin (stable, 2016-07-04)</li>
<li>0.1.4 Added resources (stable, 2016-10-06)

<ul><li>Resources (JavaScript example and SoSci Survey template) were added to integrate a selective exposure experiment into a survey</li>
<li>A reference to the resources was added in the README, in the plugin description, and in the plugin itself</li>
</ul></li>
<li>0.1.7 Compatibility with Piwik 3.x

<ul><li>Changes report to appear in Piwik 3.x</li>
<li>Shorten variable names for page times to comply with SPSS (max. 64 characters)</li>
</ul></li>
<li>0.1.8 Cleaning

<ul><li>Removed two undefined variable issues that triggered error log entries</li>
</ul></li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/ExposureResearchTools/download/0.1.9',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/ExposureResearchTools/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      58 => 
      array (
        'name' => 'TreemapVisualization',
        'displayName' => 'Treemap Visualization',
        'owner' => 'matomo-org',
        'description' => 'Visualise any report in Matomo as a Treemap. Click on the Treemap icon in each report to load the visualisation. ',
        'homepage' => 'https://matomo.org',
        'createdDateTime' => '2013-09-30 01:03:48',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Documentation',
            'key' => 'docs',
            'value' => 'https://matomo.org/docs/',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Forum',
            'key' => 'forum',
            'value' => 'https://forum.matomo.org',
            'type' => 'url',
          ),
          2 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'hello@matomo.org',
            'type' => 'email',
          ),
          3 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/matomo-org/plugin-TreemapVisualization/issues',
            'type' => 'url',
          ),
          4 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/matomo-org/plugin-TreemapVisualization',
            'type' => 'url',
          ),
          5 => 
          array (
            'name' => 'RSS',
            'key' => 'rss',
            'value' => 'https://matomo.org/feed/',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'treemap',
          1 => 'graph',
          2 => 'visualization',
          3 => 'infovis',
          4 => 'jit',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Matomo',
            'email' => 'hello@matomo.org',
            'homepage' => 'https://matomo.org',
          ),
        ),
        'repositoryUrl' => 'https://github.com/matomo-org/plugin-TreemapVisualization',
        'lastUpdated' => '2018-06-18 11:46:04',
        'latestVersion' => '3.1.1',
        'numDownloads' => 32399,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/TreemapVisualization/images/3.1.1/Screen_Resolution_Treemap.png',
          1 => 'https://plugins.matomo.org/TreemapVisualization/images/3.1.1/Social_Network_Treemap.png',
          2 => 'https://plugins.matomo.org/TreemapVisualization/images/3.1.1/Treemap.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '155',
          'numContributors' => '8',
          'lastCommitDate' => '2019-08-01 18:47:14',
        ),
        'featured' => true,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2016-09-13 22:06:05',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 3936,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-TreemapVisualization/commits/3.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/TreemapVisualization/download/3.0.0',
          ),
          1 => 
          array (
            'name' => '3.1.0',
            'release' => '2017-04-17 21:28:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.3,<4.0.0-b1',
            ),
            'numDownloads' => 5226,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-TreemapVisualization/commits/3.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/TreemapVisualization/download/3.1.0',
          ),
          2 => 
          array (
            'name' => '3.1.1',
            'release' => '2018-06-18 11:46:04',
            'requires' => 
            array (
              'piwik' => '>=3.1.2-b2,<4.0.0-b1',
            ),
            'numDownloads' => 5365,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-TreemapVisualization/commits/3.1.1',
            'readmeHtml' => 
            array (
              'description' => '

<p>TreemapVisualization contains a new report visualization that will display your reports as tiles of different sizes and will show you how each metric has changed from the last period.</p>

<p>The treemap visualization displays rows of data as squares whose size corresponds to a metric in each row.</p>

<p>If you\'re looking at the visits in a report, the row with the most visits will take up the most space. Just like other graph visualizations, <strong>you can use it to easily see which rows have the largest values</strong>. The treemap differs from other graphs though, in that <strong>it can show many more rows</strong>.</p>

<h4>Treemap colors for comparison with previous period</h4>

<p>The treemap visualization will also show you one thing that no other visualization included with Matomo does: the <strong>evolution</strong> of each row. Hovering over a treemap square will show you how much the row changed from the last period (ie, the last day, week, etc.).</p>

<p>Each treemap square is colored based on the evolution value <strong>so you can easily see how your data is changing</strong>. A red square means the change is negative; a green square means the change is positive. The more green the bigger the change; the more red the smaller the change.</p>

<h4>Known limitations</h4>

<ul><li>Treemaps will not work with flattened tables. Currently, if a table is flattened, the treemap icon will be removed.</li>
<li>Evolution values cannot be calculated for subtables (reports that are displayed when you click on a row or node).</li>
</ul><h4>Feedback, bug report or requests</h4>

<p><a href="https://github.com/matomo-org/plugin-TreemapVisualization/issues">github.com/matono-org/plugin-TreemapVisualization/issues</a></p>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => '/api/2.0/plugins/TreemapVisualization/download/3.1.1',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/TreemapVisualization/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      59 => 
      array (
        'name' => 'LoginHttpAuth',
        'displayName' => 'Login Http Auth',
        'owner' => 'matomo-org',
        'description' => 'Sign in Matomo using HTTP Auth protocol instead of the standard Login mechanism.',
        'homepage' => 'https://plugins.matomo.org/LoginHttpAuth',
        'createdDateTime' => '2014-02-10 02:48:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Forum',
            'key' => 'forum',
            'value' => 'https://forum.matomo.org',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/matomo-org/plugin-LoginHttpAuth/issues',
            'type' => 'url',
          ),
          2 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/matomo-org/plugin-LoginHttpAuth',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'login',
          1 => 'authentication',
          2 => 'httpAuth',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Matomo',
            'email' => 'hello@matomo.org',
            'homepage' => 'https://matomo.org',
          ),
        ),
        'repositoryUrl' => 'https://github.com/matomo-org/plugin-LoginHttpAuth',
        'lastUpdated' => '2018-06-18 11:16:03',
        'latestVersion' => '3.0.1',
        'numDownloads' => 14017,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '59',
          'numContributors' => '10',
          'lastCommitDate' => '2019-07-03 07:45:52',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2016-09-13 22:16:02',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 929,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-LoginHttpAuth/commits/3.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/LoginHttpAuth/download/3.0.0',
          ),
          1 => 
          array (
            'name' => '3.0.1',
            'release' => '2018-06-18 11:16:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 2896,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-LoginHttpAuth/commits/3.0.1',
            'readmeHtml' => 
            array (
              'description' => '

<p>This plugin extends the standard Matomo authentication to use Basic HTTP Authentication.
It lets you login to Matomo using the HTTP Auth mechanism.</p>

<p>How do I setup HTTP Auth using Matomo?</p>

<ul><li>Login your Matomo as Super User. Click Settings, then click Marketplace.</li>
<li>Install the LoginHttpAuth plugin, then click Activate.</li>
<li>Click Settings, then click Users.

<ul><li>Check that there is a user in Matomo for each person that should have access to Matomo.</li>
</ul></li>
<li><p>Enable HTTP Auth on the Matomo on your web server.</p>

<p>For example, if you are using Apache webserver:</p>

<ul><li>generate a .htpasswd file with your encrypted logins and passwords</li>
<li><a href="https://raw.githubusercontent.com/matomo-org/plugin-LoginHttpAuth/master/TemplateHtaccess/.htaccess">copy this example .htaccess file</a> in the root directory of Matomo, and set the path to your .htpasswd file</li>
</ul></li>
<li>When you go to Matomo, you will see the Authentication window.
Congratulations! You are now using HTTP Auth to protect Matomo.</li>
</ul>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<ul><li>3.0.0 

<ul><li>Compatibility with Piwik 3.0</li>
<li>Fix logout feature</li>
</ul></li>
<li>1.0.4 - Support for LemonLDAP::ng and <code>HTTP_AUTH_USER</code></li>
<li>1.0.3 - Fixing regression w/ Piwik 2.15 when authenticating by token auth or by username/password (w/o an HTTP server).</li>
<li>1.0 - First public release <a href="http://piwik.org/blog/2013/12/piwik-2-0-release-announced-biggest-best-release-yet/">compatible with Piwik 2</a></li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/LoginHttpAuth/download/3.0.1',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/LoginHttpAuth/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      60 => 
      array (
        'name' => 'Bandwidth',
        'displayName' => 'Bandwidth',
        'owner' => 'matomo-org',
        'description' => 'Monitor Bandwidth for each page, download, and measure overall traffic in bytes',
        'homepage' => 'https://matomo.org',
        'createdDateTime' => '2015-02-18 03:50:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Wiki',
            'key' => 'wiki',
            'value' => 'https://github.com/matomo-org/plugin-Bandwidth/wiki',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Forum',
            'key' => 'forum',
            'value' => 'https://forum.matomo.org',
            'type' => 'url',
          ),
          2 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'hello@matomo.org',
            'type' => 'email',
          ),
          3 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/matomo-org/plugin-Bandwidth/issues',
            'type' => 'url',
          ),
          4 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/matomo-org/plugin-Bandwidth',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'bandwidth',
          1 => 'filesize',
          2 => 'size',
          3 => 'download',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Matomo',
            'email' => 'hello@matomo.org',
            'homepage' => 'https://matomo.org',
          ),
        ),
        'repositoryUrl' => 'https://github.com/matomo-org/plugin-Bandwidth',
        'lastUpdated' => '2018-06-18 10:44:03',
        'latestVersion' => '3.1.1',
        'numDownloads' => 30331,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/Bandwidth/images/3.1.1/Downloads.png',
          1 => 'https://plugins.matomo.org/Bandwidth/images/3.1.1/Pageviews.png',
          2 => 'https://plugins.matomo.org/Bandwidth/images/3.1.1/Visitor_Overview.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '130',
          'numContributors' => '7',
          'lastCommitDate' => '2019-09-07 15:23:26',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2016-09-14 00:06:07',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 845,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-Bandwidth/commits/3.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/Bandwidth/download/3.0.0',
          ),
          1 => 
          array (
            'name' => '3.0.1',
            'release' => '2016-11-27 22:14:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 4813,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-Bandwidth/commits/3.0.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/Bandwidth/download/3.0.1',
          ),
          2 => 
          array (
            'name' => '3.0.2',
            'release' => '2017-07-10 09:12:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 1820,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-Bandwidth/commits/3.0.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/Bandwidth/download/3.0.2',
          ),
          3 => 
          array (
            'name' => '3.1.0',
            'release' => '2017-09-05 16:38:05',
            'requires' => 
            array (
              'piwik' => '>=3.1.0-rc1,<4.0.0-b1',
            ),
            'numDownloads' => 5786,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-Bandwidth/commits/3.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/Bandwidth/download/3.1.0',
          ),
          4 => 
          array (
            'name' => '3.1.1',
            'release' => '2018-06-18 10:44:03',
            'requires' => 
            array (
              'piwik' => '>=3.1.0-rc1,<4.0.0-b1',
            ),
            'numDownloads' => 6690,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-Bandwidth/commits/3.1.1',
            'readmeHtml' => 
            array (
              'description' => '

<p>This plugin allows you to measure the bandwidth that was used by each page view or download. 
It enriches existing reports and APIs to show the used bandwidth. Find more information in the FAQ.</p>',
              'faq' => '<p><strong>How can I track the bandwidth?</strong></p>

<p>Log analytics:</p>

<p>The bandwidth will be automatically tracked when using the <a href="http://piwik.org/log-analytics/">log importer</a> as long as 
your log format is supported.</p>

<p>Tracking API:</p>

<p>If you are using the <a href="http://developer.piwik.org/api-reference/tracking-api">HTTP Tracking API</a> 
you can specify the bandwidth in bytes by appending the URL parameter <code>bw_bytes=1234</code> to the tracking URL. In this case 
a bandwidth of 1234 bytes will be tracked.</p>

<p><strong>Which actions support tracking of bandwidth?</strong></p>

<p>Pageviews (Page URLs and Page Titles) as well as Downloads.</p>

<p><strong>In which reports is the used bandwidth displayed?</strong></p>

<ul><li>Page URLs </li>
<li>Page Titles</li>
<li>Downloads</li>
</ul><p>All reports will show a column <code>Average Bandwidth</code> and <code>Sum Bandwidth</code></p>

<p>The "Visitors =&gt; Overview" report shows a total bandwidth overview and it is possible to view the evolution over period.</p>

<p><strong>Which APIs does this plugin define or enrich?</strong></p>

<p>There is a report <code>Bandwidth.get</code> returning the total bandwidth (across all actions).</p>

<p>It also enriches varies reports such as <code>Actions.get</code>, <code>Actions.getPageUrls</code>, <code>Actions.getPageTitles</code> and <code>Actions.getDownloads</code>.
For example it adds columns such as <code>avg_bandwidth</code>, <code>sum_bandwidth</code>, <code>min_bandwidth</code>, <code>max_bandwidth</code> to each page view.</p>

<p><strong>Why are the bandwidth columns are not displayed in the UI?</strong></p>

<p>Make sure the Bandwidth plugin is activated by going to <code>Administration =&gt; Plugins</code>. Also the bandwidth columns are not 
displayed if no bandwidth was tracked in the current selected month.</p>

<p><strong>Is it possible to track bandwidth using the Matomo (Piwik) JavaScript Tracker?</strong></p>

<p>Yes, you can set the <code>bw_bytes</code> value manually in JavaScript using <code>_paq.push([\'appendToTrackingUrl\', \'bw_bytes=1234\');</code> to track the bandwidth of your pages.</p>',
              'documentation' => '',
              'changelog' => '<p>3.0.0 Compatibility with Piwik 3.0
0.1.0 Initial Release</p>',
            ),
            'download' => '/api/2.0/plugins/Bandwidth/download/3.1.1',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/Bandwidth/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      61 => 
      array (
        'name' => 'MarketingCampaignsReporting',
        'displayName' => 'Marketing Campaigns Reporting',
        'owner' => 'matomo-org',
        'description' => 'Measure the effectiveness of your marketing campaigns. New reports, segments & track up to five channels: campaign, source, medium, keyword, content.',
        'homepage' => 'https://matomo.org',
        'createdDateTime' => '2017-03-16 00:16:03',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Wiki',
            'key' => 'wiki',
            'value' => 'https://github.com/matomo-org/plugin-MarketingCampaignsReporting/wiki',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Forum',
            'key' => 'forum',
            'value' => 'https://forum.matomo.org',
            'type' => 'url',
          ),
          2 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'hello@matomo.org',
            'type' => 'email',
          ),
          3 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/matomo-org/plugin-MarketingCampaignsReporting/issues',
            'type' => 'url',
          ),
          4 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/matomo-org/plugin-MarketingCampaignsReporting',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'Campaign',
          1 => 'Marketing',
          2 => 'Channels',
          3 => 'UTM tags',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Matomo',
            'email' => 'hello@matomo.org',
            'homepage' => 'https://matomo.org',
          ),
        ),
        'repositoryUrl' => 'https://github.com/matomo-org/plugin-MarketingCampaignsReporting',
        'lastUpdated' => '2018-06-18 10:18:04',
        'latestVersion' => '3.1.1',
        'numDownloads' => 14532,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/',
          1 => 'https://plugins.matomo.org/MarketingCampaignsReporting/images/3.1.1/Marketing-Campaign-Analytics-report.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '215',
          'numContributors' => '10',
          'lastCommitDate' => '2019-08-25 10:03:28',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2017-03-16 00:16:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0-b1',
            ),
            'numDownloads' => 39,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-MarketingCampaignsReporting/commits/3.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/MarketingCampaignsReporting/download/3.0.0',
          ),
          1 => 
          array (
            'name' => '3.0.1',
            'release' => '2017-03-16 16:48:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0-b1',
            ),
            'numDownloads' => 19,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-MarketingCampaignsReporting/commits/3.0.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/MarketingCampaignsReporting/download/3.0.1',
          ),
          2 => 
          array (
            'name' => '3.0.2',
            'release' => '2017-03-16 22:22:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0-b1',
            ),
            'numDownloads' => 2043,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-MarketingCampaignsReporting/commits/3.0.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/MarketingCampaignsReporting/download/3.0.2',
          ),
          3 => 
          array (
            'name' => '3.1.0',
            'release' => '2017-09-05 17:00:05',
            'requires' => 
            array (
              'piwik' => '>=3.1.0-rc1,<4.0.0-b1',
            ),
            'numDownloads' => 5212,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-MarketingCampaignsReporting/commits/3.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/MarketingCampaignsReporting/download/3.1.0',
          ),
          4 => 
          array (
            'name' => '3.1.1',
            'release' => '2018-06-18 10:18:04',
            'requires' => 
            array (
              'piwik' => '>=3.1.0-rc1,<4.0.0-b1',
            ),
            'numDownloads' => 7219,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-MarketingCampaignsReporting/commits/3.1.1',
            'readmeHtml' => 
            array (
              'description' => '

<p>Measure the effectiveness of your marketing campaigns. 
Measure up to five of your marketing campaigns channels: name, source, medium, keyword, content. 
Access all your campaign analytics reports into a unified interface and track the effectiveness of all your channels.
Supports any kind of campaign and channel: Adwords, Facebook, Twitter, Youtube, Display advertising, Custom Marketing campaigns, Email newsletters.</p>

<h3>The Marketing URL Builder</h3>

<p><a href="https://matomo.org/docs/tracking-campaigns-url-builder/">Generate your trackable marketing URLs with our URL Builder tool.</a></p>

<h3>Tracking campaigns</h3>

<p>To track a campaign, you add special URL parameters to your URLs.</p>

<p>The URL parameters are:</p>

<ul><li><code>pk_campaign</code> (campaign name such as mailing_2017_03 or Easter_Sale), </li>
<li><code>pk_source</code> (campaign source such as google or facebook), </li>
<li><code>pk_medium</code> (campaign medium such as email or cpc), </li>
<li><code>pk_keyword</code> (campaign keyword), </li>
<li><code>pk_content</code> (campaign content),</li>
<li><code>pk_cid</code> (campaign ID code).</li>
</ul><p>If you already have URLs tagged with Google Analytics parameters these are also supported:</p>

<ul><li><code>utm_campaign</code>, </li>
<li><code>utm_source</code>, </li>
<li><code>utm_medium</code>, </li>
<li><code>utm_term</code>, </li>
<li><code>utm_content</code>,</li>
<li><code>utm_id</code>.</li>
</ul><p>For example if your Ad URL or landing page URL is <code>example.com/offer</code>, you would track all clicks on this URL by 
adding one or more of the parameters above:</p>

<pre><code>example.com/offer?pk_campaign=Best-Seller&amp;pk_source=Newsletter_7&amp;pk_medium=email
</code></pre>

<h3>Features</h3>

<ul><li>Real time Analytics Reports of all your Campaign Marketing.</li>
<li>Detects Campaign parameters from the landing page URL, within the query string or in the #hash string.</li>
<li>The Referrers&gt;Overview report displays a left column "Referrers Overview" with a list of reports that can be loaded on click.
This report viewer now also lists the new Campaign reports under "View Referrers by Campaign".</li>
<li>The content of Referrers&gt; Campaign will be replaced with the new enhanced Campaigns reports.</li>
<li>The default Referrers Campaign widget and API are working as before.</li>
<li>The campaign reports are available in Matomo Mobile and can be sent as Scheduled reports (by email, as HTML or PDF).</li>
<li>Segment editor: a new "Campaigns" category lists the five new segment for each campaign dimension (campaign name, campaign keyword, campaign source, campaign medium, campaign content).</li>
<li>Add Marketing campaign reports to your personalized Dashboard.</li>
<li>Access the Campaign Report data with the Marketing Campaigns Reporting API.</li>
<li>Will track up to 250 characters for each of the five Campaign dimension.</li>
<li>Get automatic <a href="https://matomo.org/docs/email-reports/">email and sms reports</a> for your campaigns, or send them to your colleagues or customers. </li>
</ul><h3>Reports for more than 1,000 campaigns</h3>

<p>In the Campaign reports by default Matomo will only archive the first 1000 rows (your 1000 most popular campaigns). 
To report on all your campaigns you can configure Matomo so it does not truncate your data. 
For example to keep the top 10,000 campaigns edit your <code>config/config.ini.php</code> and add the following:</p>

<pre><code>[General]
datatable_archiving_maximum_rows_referrers = 10000
datatable_archiving_maximum_rows_subtable_referrers = 10000
</code></pre>

<h3>Customising your campaign parameters</h3>

<p>It is possible to configure custom names for campaign parameters. In order to do so you have add config to config.ini.php file.
If you configure any campaign parameter this configuration will overwrite default config for this parameter.</p>

<pre><code>[MarketingCampaignsReporting]
campaign_name = "pk_campaign,piwik_campaign,pk_cpn,utm_campaign"
campaign_keyword = "pk_keyword,piwik_kwd,pk_kwd,utm_term"
campaign_source = "pk_source,utm_source"
campaign_medium = "pk_medium,utm_medium"
campaign_content = "pk_content,utm_content"
campaign_id = "pk_cid,utm_id"
</code></pre>

<p>For example, by default parameter <code>campaign_name</code> track following parameters if they are found in URL: <code>\'pk_campaign\', \'piwik_campaign\', \'pk_cpn\', \'utm_campaign\'</code>. If you configure <code>campaign_name</code> like this <code>campaign_name="pk_campaign,custom_name_parameter"</code>, then parameter <code>campaign_name</code> will detect only presence of <code>pk_campaign</code> and <code>custom_name_parameter</code> in URL. <code>piwik_campaign</code>, <code>pk_cpn</code>, <code>utm_campaign</code> will be ignored until they are present in config.</p>

',
              'faq' => '',
              'documentation' => '<p>Learn more about tracking campaigns in Matomo (Piwik) in our <a href="https://piwik.org/docs/tracking-campaigns/">user guide</a> and use the <a href="https://piwik.org/docs/tracking-campaigns-url-builder/">URL Builder</a> to generate URLs ready to use for tracking campaigns in Matomo.</p>',
              'changelog' => '<ul><li>3.1.1 (June 18th 2018) Rebrand and translation updates</li>
<li>3.1.0 (Sept 5th 2017) Show campaign information in visitor log and profile</li>
<li>3.0.1 (Mar 16th 2017) Enables segmented visitorlog for campaign reports</li>
<li>3.0.0 (March 2017) Plugin forked by Piwik team + Renamed + Compatibility with Piwik 3</li>
<li>1.4.0 Added possibility to configure custom campaign parameters names</li>
<li>1.3.1 Better support for campaign parameters behind hash tag (#)</li>
<li>1.3.0 Compatibility with Piwik 2.16.0</li>
<li>1.2.0 (Nov 10th 2015) - Plugin comaptibility with Piwik 2.15.0</li>
<li>1.1.1 (Sept 3rd 2015) - Campaign reports now display your campaign report data even for campaign data before you activated AdvancedCampaignReporting</li>
<li>1.1.0 (July 28th 2015)</li>
<li>1.0.8 (Apr 1st 2015) - Exclude Google Analytics campaign parameters from the Page URLs</li>
<li>1.0.6 (Nov 17th 2014) - Documentation</li>
<li>1.0.5 (Nov 14th 2014) - Detect new URL parameters: piwik_campaign, pk_cpn and for Keywords: pk_kwd, piwik_keyword</li>
<li>1.0.4 (Nov 4th 2014) - View Goals by Campaign Dimension in the Goals &amp; Ecommerce reports</li>
<li>1.0.3 (Oct 1st 2014) - Released for free on the <a href="http://plugins.piwik.org/">Piwik Marketplace</a></li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/MarketingCampaignsReporting/download/3.1.1',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/MarketingCampaignsReporting/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      62 => 
      array (
        'name' => 'IPReports',
        'displayName' => 'IPReports',
        'owner' => 'sgiehl',
        'description' => 'Adds new IP reports to Matomo',
        'homepage' => 'http://github.com/sgiehl/piwik-plugin-IPReports',
        'createdDateTime' => '2017-11-18 22:46:03',
        'donate' => 
        array (
          'paypal' => 'stefangiehl@web.de',
          'flattr' => 'https://flattr.com/thing/3787742/sgiehlpiwik-plugin-IPReports-on-GitHub',
          'bitcoin' => NULL,
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'stefan@piwik.org',
            'type' => 'email',
          ),
          1 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/sgiehl/piwik-plugin-IPReports/issues',
            'type' => 'url',
          ),
          2 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/sgiehl/piwik-plugin-IPReports',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'Report',
          1 => 'ip',
          2 => 'ips',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Stefan Giehl',
            'email' => 'stefan@piwik.org',
            'homepage' => 'http://github.com/sgiehl',
          ),
        ),
        'repositoryUrl' => 'https://github.com/sgiehl/piwik-plugin-IPReports',
        'lastUpdated' => '2018-06-07 10:00:04',
        'latestVersion' => '0.2.0',
        'numDownloads' => 6626,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/IPReports/images/0.2.0/report.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '9',
          'numContributors' => '1',
          'lastCommitDate' => '2018-11-25 16:27:25',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '0.1.0',
            'release' => '2017-11-18 22:46:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0-b1',
              'php' => '>=5.5.0',
            ),
            'numDownloads' => 2801,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/sgiehl/piwik-plugin-IPReports/commits/0.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/IPReports/download/0.1.0',
          ),
          1 => 
          array (
            'name' => '0.2.0',
            'release' => '2018-06-07 10:00:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0-b1',
              'php' => '>=5.5.0',
            ),
            'numDownloads' => 3825,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/sgiehl/piwik-plugin-IPReports/commits/0.2.0',
            'readmeHtml' => 
            array (
              'description' => '

<p>This plugin adds an additional report "Top IP-Addresses" to Matomo (Piwik).</p>

<h3>Requirements</h3>

<p><a href="https://github.com/piwik/piwik">Piwik</a> 3.0.0-b1 or higher is required.</p>

',
              'faq' => '',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => '/api/2.0/plugins/IPReports/download/0.2.0',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/IPReports/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      63 => 
      array (
        'name' => 'LanguageToogle',
        'displayName' => 'Language Toogle',
        'owner' => 'Findus23',
        'description' => 'Quickly change the language of Matomo',
        'homepage' => 'https://lw1.at',
        'createdDateTime' => '2018-05-06 10:14:03',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Forum',
            'key' => 'forum',
            'value' => 'https://forum.piwik.org',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'lukas@matomo.org',
            'type' => 'email',
          ),
          2 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/Findus23/plugin-LanguageToogle/issues',
            'type' => 'url',
          ),
          3 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/Findus23/plugin-LanguageToogle',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'language',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Lukas Winkler',
            'email' => 'lukas@matomo.org',
            'homepage' => 'https://lw1.at',
          ),
        ),
        'repositoryUrl' => 'https://github.com/Findus23/plugin-LanguageToogle',
        'lastUpdated' => '2018-05-07 10:10:04',
        'latestVersion' => '0.2.0',
        'numDownloads' => 8583,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/LanguageToogle/images/0.2.0/Settings.png',
          1 => 'https://plugins.matomo.org/LanguageToogle/images/0.2.0/top_menu.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '11',
          'numContributors' => '1',
          'lastCommitDate' => '2018-05-07 10:08:55',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '0.1.0',
            'release' => '2018-05-06 10:14:04',
            'requires' => 
            array (
              'piwik' => '>=3.4.0,<4.0.0-b1',
            ),
            'numDownloads' => 2,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/LanguageToogle/0.1.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Findus23/plugin-LanguageToogle/commits/0.1.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/LanguageToogle/download/0.1.0',
          ),
          1 => 
          array (
            'name' => '0.1.3',
            'release' => '2018-05-06 10:56:04',
            'requires' => 
            array (
              'piwik' => '>=3.4.0,<4.0.0-b1',
            ),
            'numDownloads' => 4,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/LanguageToogle/0.1.3/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Findus23/plugin-LanguageToogle/commits/0.1.3',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/LanguageToogle/download/0.1.3',
          ),
          2 => 
          array (
            'name' => '0.1.4',
            'release' => '2018-05-06 11:12:03',
            'requires' => 
            array (
              'piwik' => '>=3.4.0,<4.0.0-b1',
            ),
            'numDownloads' => 49,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/LanguageToogle/0.1.4/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Findus23/plugin-LanguageToogle/commits/0.1.4',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/LanguageToogle/download/0.1.4',
          ),
          3 => 
          array (
            'name' => '0.2.0',
            'release' => '2018-05-07 10:10:04',
            'requires' => 
            array (
              'piwik' => '>=3.5.0-rc,<4.0.0-b1',
            ),
            'numDownloads' => 8528,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/LanguageToogle/0.2.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Findus23/plugin-LanguageToogle/commits/0.2.0',
            'readmeHtml' => 
            array (
              'description' => '

<p>This plugin allows every user to select a list of languages that then can be quickly switched to via the top menu.</p>

<p>Ideal if you want to show the UI to or quickly create screenhost for other people.</p>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<p>0.2.0</p>

<ul><li>replace multiselect with new multituple (needs Matomo 3.5.0)</li>
</ul><p>0.1.4</p>

<ul><li>performance improvements</li>
</ul><p>0.1.3</p>

<ul><li>update version in plugin.json</li>
</ul><p>0.1.2</p>

<ul><li>remove placeholder docs</li>
</ul><p>0.1.1</p>

<ul><li>Submit to marketplace</li>
</ul><p>0.1.0</p>

<ul><li>Initial Release</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/LanguageToogle/download/0.2.0',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/LanguageToogle/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      64 => 
      array (
        'name' => 'DeviceFeatureWebGL',
        'displayName' => 'Device Feature Web GL',
        'owner' => 'sgiehl',
        'description' => 'This plugin allows you to track browser compatibility for WebGL',
        'homepage' => 'http://github.com/sgiehl/piwik-plugin-DeviceFeatureWebGL',
        'createdDateTime' => '2017-07-05 19:54:03',
        'donate' => 
        array (
          'paypal' => 'stefangiehl@web.de',
          'flattr' => 'https://flattr.com/thing/2578144/sgiehl',
          'bitcoin' => NULL,
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'webgl',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Stefan Giehl',
            'email' => 'stefan@matomo.org',
            'homepage' => 'http://github.com/sgiehl',
          ),
        ),
        'repositoryUrl' => 'https://github.com/sgiehl/piwik-plugin-DeviceFeatureWebGL',
        'lastUpdated' => '2018-03-07 19:46:03',
        'latestVersion' => '1.0.2',
        'numDownloads' => 5371,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/DeviceFeatureWebGL/images/1.0.2/report.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '17',
          'numContributors' => '1',
          'lastCommitDate' => '2018-11-25 15:59:11',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '1.0.1',
            'release' => '2017-07-05 19:54:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.5-b1,<4.0.0-b1',
              'php' => '>=5.5.0',
            ),
            'numDownloads' => 1255,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/sgiehl/piwik-plugin-DeviceFeatureWebGL/commits/1.0.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/DeviceFeatureWebGL/download/1.0.1',
          ),
          1 => 
          array (
            'name' => '1.0.2',
            'release' => '2018-03-07 19:46:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.5-b1,<4.0.0-b1',
              'php' => '>=5.5.0',
            ),
            'numDownloads' => 4116,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/sgiehl/piwik-plugin-DeviceFeatureWebGL/commits/1.0.2',
            'readmeHtml' => 
            array (
              'description' => '

<p>This plugin adds browser plugin detection for WebGL to the already exisiting browser plugin reports in Matomo</p>

<h3>Requirements</h3>

<p><a href="https://github.com/matomo-org/matomo">Matomo</a> 3.0.5-b1 or higher is required.</p>

<h3>Features</h3>

<ul><li>automatic detection of WebGL support in browsers</li>
</ul>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => '/api/2.0/plugins/DeviceFeatureWebGL/download/1.0.2',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/DeviceFeatureWebGL/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      65 => 
      array (
        'name' => 'RerUserDates',
        'displayName' => 'Rer User Dates',
        'owner' => 'RegioneER',
        'description' => 'Hide custom date range selection from calendar, avoid users to set ranges in their default profile',
        'homepage' => 'https://RegioneER.github.io/projects/',
        'createdDateTime' => '2014-05-13 11:40:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'users',
          1 => 'range',
          2 => 'calendar',
          3 => 'date',
          4 => 'profiles',
          5 => 'admin',
          6 => 'performance',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Pierluigi Tassi',
            'email' => 'ptassi@regione.emilia-romagna.it',
            'homepage' => 'https://github.com/tassoman',
          ),
          1 => 
          array (
            'name' => 'Regione Emilia-Romagna',
            'email' => 'webmaster@regione.emilia-romagna.it',
            'homepage' => 'https://RegioneER.github.io',
          ),
        ),
        'repositoryUrl' => 'https://github.com/RegioneER/RerUserDates',
        'lastUpdated' => '2018-02-09 14:44:03',
        'latestVersion' => '2.0.3',
        'numDownloads' => 9868,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/RerUserDates/images/2.0.3/RerUserDates-cal.png',
          1 => 'https://plugins.matomo.org/RerUserDates/images/2.0.3/RerUserDates-settings.png',
          2 => 'https://plugins.matomo.org/RerUserDates/images/2.0.3/RerUserDates.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '9',
          'numContributors' => '3',
          'lastCommitDate' => '2018-02-09 14:45:14',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '2.0.3',
            'release' => '2018-02-09 14:44:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0, <4.0.0-b1',
              'php' => '>5.6.1',
            ),
            'numDownloads' => 2374,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/RerUserDates/2.0.3/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/RegioneER/RerUserDates/commits/2.0.3',
            'readmeHtml' => 
            array (
              'description' => '

<p>This <a href="http://Matomo.org">Matomo</a> Plugin hides custom date range selection from calendar for regular users and avoids users setting dynamic ranges as default value in their personal profile.</p>

<p>When a user asks for a ranged date report, Matomo stats building it on the fly during browsing. This may slow down Matomo installation in case is loaded by visits and you have a large number of tracked websites.</p>

<p>Activity is resource intensive so that live tracking may become slow or inaccurate.</p>

<p>The main feature is regular users can\'t select any custom range in the calendar, only users having <em>Superadmins</em> privilege still can.</p>

<p>Second feature is removing dynamic choices in the field <em>"Report date to load by default"</em> in <em>User Settings page</em> for all regular users.</p>

<p>Users profiles with <em>Superadmin</em> privilege still untouched and user profiles of <em>Website Administrators</em> will only display a notification about plugin\'s behavior.</p>

<p><em>Superadmin</em> can enable or disable the two features independently by clicking checkboxes in the plugin\'s configuration page  in the web interface.</p>

<p>This plugin came translated in: English, Italian and French. For more languages to come, just file a pull request adding a new <code>lang/*.json</code> file in your mother language, (see <em>Can I contribute</em> f.a.q.)</p>

',
              'faq' => '<p><strong>I would like to see a demonstration...</strong>
Just take a look at <em>screenshots</em> .</p>

<p><strong>Can I donate to you?</strong>
Thanks but we can\'t accept money donations because we\'re a Government Organization.
Just feel free to contribute the source code.</p>

<p><strong>Can I contribute on development?</strong>
New languages translations are welcome!
Sure, you can, just file a <a href="https://github.com/RegioneER/RerUserDates/pull">pull request on Github</a></p>',
              'documentation' => '',
              'changelog' => '<h3>v1.0</h3>

<ul><li>First release and Marketplace integration</li>
<li>User Manager screen shot and better readme documentation</li>
</ul><h3>v1.1</h3>

<ul><li>Custom date range selection is disabled in the calendar only for regular users. A shorts jQuery snippet hides radio input and submit button.</li>
<li>Regular users who chose a range date as their default are now forced to <em>yesterday</em> report just visiting the index page with a warning notification.</li>
<li>New French translation by @gaumondp</li>
</ul><h3>v.1.2</h3>

<ul><li>New plugin settings user interface for super admins, some better improvement and few bugs solved.</li>
<li>Solved a regression due to a lack of Settings Feature in Matomo\'s versions below 2.4.0</li>
<li>Merged French translation</li>
<li>Fixed Matomo compatibility with 2.10 from 2.7 by @ThaDafinser in PR #6</li>
</ul><h3>v.1.3</h3>

<ul><li>Settings environment breaks compatibility with Matomo versions &lt; 2.8.0, thanks to @ThaDafinser.</li>
</ul><h3>v.2.0</h3>

<p>Adding Matomo 3.x plugin compatibility, Piwik 2.x is deprecated and no more supported. Please download v.1.x for older versions.</p>',
            ),
            'download' => '/api/2.0/plugins/RerUserDates/download/2.0.3',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/RerUserDates/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      66 => 
      array (
        'name' => 'ReferrersManager',
        'displayName' => 'Referrers Manager',
        'owner' => 'sgiehl',
        'description' => 'Allows to view and manage the search engines and social networks that Matomo is able to detect.',
        'homepage' => 'http://github.com/sgiehl/piwik-plugin-ReferrersManager',
        'createdDateTime' => '2014-02-01 21:48:04',
        'donate' => 
        array (
          'paypal' => 'stefangiehl@web.de',
          'flattr' => 'https://flattr.com/thing/3787742/sgiehlpiwik-plugin-ReferrersManager-on-GitHub',
          'bitcoin' => NULL,
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Wiki',
            'key' => 'wiki',
            'value' => 'https://github.com/sgiehl/piwik-plugin-ReferrersManager/issues',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'stefan@piwik.org',
            'type' => 'email',
          ),
          2 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/sgiehl/piwik-plugin-ReferrersManager/issues',
            'type' => 'url',
          ),
          3 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/sgiehl/piwik-plugin-ReferrersManager/issues',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'referrer',
          1 => 'search',
          2 => 'engine',
          3 => 'social',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Stefan Giehl',
            'email' => 'stefan@piwik.org',
            'homepage' => 'http://github.com/sgiehl',
          ),
        ),
        'repositoryUrl' => 'https://github.com/sgiehl/piwik-plugin-ReferrersManager',
        'lastUpdated' => '2018-01-27 22:16:04',
        'latestVersion' => '3.0.4',
        'numDownloads' => 39677,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/ReferrersManager/images/3.0.4/check_url.jpg',
          1 => 'https://plugins.matomo.org/ReferrersManager/images/3.0.4/search_engines.jpg',
          2 => 'https://plugins.matomo.org/ReferrersManager/images/3.0.4/socials.jpg',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '127',
          'numContributors' => '3',
          'lastCommitDate' => '2018-11-25 19:43:59',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0',
            'release' => '2016-09-11 13:22:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0',
              'php' => '>=5.5.0',
            ),
            'numDownloads' => 1,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/ReferrersManager/3.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/sgiehl/piwik-plugin-ReferrersManager/commits/3.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/ReferrersManager/download/3.0',
          ),
          1 => 
          array (
            'name' => '3.0.1',
            'release' => '2016-09-11 13:34:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0',
              'php' => '>=5.5.0',
            ),
            'numDownloads' => 3329,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/ReferrersManager/3.0.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/sgiehl/piwik-plugin-ReferrersManager/commits/3.0.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/ReferrersManager/download/3.0.1',
          ),
          2 => 
          array (
            'name' => '3.0.2',
            'release' => '2017-02-11 20:12:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
              'php' => '>=5.5.0',
            ),
            'numDownloads' => 2668,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/ReferrersManager/3.0.2/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/sgiehl/piwik-plugin-ReferrersManager/commits/3.0.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/ReferrersManager/download/3.0.2',
          ),
          3 => 
          array (
            'name' => '3.0.3',
            'release' => '2017-05-09 07:16:05',
            'requires' => 
            array (
              'piwik' => '>=3.0.3,<4.0.0-b1',
              'php' => '>=5.5.0',
            ),
            'numDownloads' => 4516,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/ReferrersManager/3.0.3/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/sgiehl/piwik-plugin-ReferrersManager/commits/3.0.3',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/ReferrersManager/download/3.0.3',
          ),
          4 => 
          array (
            'name' => '3.0.4',
            'release' => '2018-01-27 22:16:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.3,<4.0.0-b1',
              'php' => '>=5.5.0',
            ),
            'numDownloads' => 7184,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/ReferrersManager/3.0.4/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/sgiehl/piwik-plugin-ReferrersManager/commits/3.0.4',
            'readmeHtml' => 
            array (
              'description' => '

<p>This plugin allows to view and manage custom search engines and social networks that are recognized with Matomo.
Note: You can find the configuration panel for this plugin within the global administration. There are no changes done to the Matomo frontend/dashboard.</p>

<h3>Requirements</h3>

<p><a href="https://github.com/matomo-org/matomo">Matomo</a> 3.0.0-b1 or higher is required.</p>

<h3>Features</h3>

<ul><li>Shows a list of all search engines and social networks defined in Matomo core.</li>
<li>Abillity to manage custom search engines and social networks</li>
<li>Abillity to disable/enable Matomo\'s default social network list</li>
</ul>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<p><strong>3.0.4</strong></p>

<ul><li>Piwik ist now Matomo</li>
</ul><p><strong>3.0</strong></p>

<ul><li>Compatibility for Piwik 3.x</li>
<li>Rewrote UI using angular JS</li>
<li>Materialised UI/UX</li>
<li>Searchable lists for search engines / social networks</li>
</ul><p><strong>1.9</strong></p>

<ul><li>Mark plugin as incompatible with 3.x</li>
<li>Translation updates</li>
</ul><p><strong>1.8</strong></p>

<ul><li>fixes minor bugs</li>
<li>adds possibility to refresh lists (clears caches)</li>
</ul><p><strong>1.7</strong></p>

<ul><li>Fix Compatibility with Piwik 2.16</li>
</ul><p><strong>1.6</strong></p>

<ul><li>Compatibility for Piwik &gt; 2.15 / translation updates</li>
</ul><p><strong>1.5</strong></p>

<ul><li>Compatibility issues for older Piwik versions</li>
</ul><p><strong>1.4</strong></p>

<ul><li>Translation updates</li>
</ul><p><strong>1.3</strong></p>

<ul><li>Adjustments for new Piwik menu api</li>
</ul><p><strong>1.2</strong></p>

<ul><li>Compatibility fix for PHP &lt; 5.4</li>
</ul><p><strong>1.1</strong></p>

<ul><li>Minor Changes</li>
</ul><p><strong>1.0</strong></p>

<ul><li>Initial release</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/ReferrersManager/download/3.0.4',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/ReferrersManager/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      67 => 
      array (
        'name' => 'TrackingCodeCustomizer',
        'displayName' => 'Tracking Code Customizer',
        'owner' => 'jbrule',
        'description' => 'Allows Matomo (Piwik) admininstrators to customize the tracking code that is autogenerated for users. This is useful for directing requests to the cor',
        'homepage' => 'https://github.com/jbrule/piwikplugin-TrackingCodeCustomizer',
        'createdDateTime' => '2015-04-20 16:28:03',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'tracking',
          1 => 'javascript tracking',
          2 => 'customize tracking',
          3 => 'customise tracking',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Josh Brule',
            'email' => NULL,
            'homepage' => 'https://www.linkedin.com/pub/joshua-brule/15/326/9b9',
          ),
        ),
        'repositoryUrl' => 'https://github.com/jbrule/piwikplugin-TrackingCodeCustomizer',
        'lastUpdated' => '2018-01-19 22:16:04',
        'latestVersion' => '3.0.0',
        'numDownloads' => 8677,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/TrackingCodeCustomizer/images/3.0.0/Plugin_Settings.png',
          1 => 'https://plugins.matomo.org/TrackingCodeCustomizer/images/3.0.0/Tracking_Code.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '5',
          'numContributors' => '1',
          'lastCommitDate' => '2018-01-19 22:14:30',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2018-01-19 22:16:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 3298,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/TrackingCodeCustomizer/3.0.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/jbrule/piwikplugin-TrackingCodeCustomizer/commits/3.0.0',
            'readmeHtml' => 
            array (
              'description' => '

<p>Allows Matomo admininstrators to customize the tracking code that is autogenerated for users. This is useful for directing requests to the correct servers in a multi-server setup, include additional parameters in default tracking, or to perform conditional checks before initiating a tracking call.</p>

',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<p>3.0.0 Updated for compatibility with Piwik 3.0+. Added "Matomo" branding. Users on pre 3.0 release please see 2.x-dev branch.
0.1.2 Updated for compatibility with Piwik v2.15 and included new registerEvents() hook for compatibility with Piwik 3.0
0.1.1 Version bump to activation Marketplace hook
0.1.0 Initial Release</p>',
            ),
            'download' => '/api/2.0/plugins/TrackingCodeCustomizer/download/3.0.0',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/TrackingCodeCustomizer/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      68 => 
      array (
        'name' => 'SharpSpringWidgetByAmperage',
        'displayName' => 'Sharp Spring Widget',
        'owner' => 'AMPERAGE-Marketing',
        'description' => 'Show SharpSpring info as a widget.',
        'homepage' => 'http://www.amperagemarketing.com',
        'createdDateTime' => '2018-01-16 00:36:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Wiki',
            'key' => 'wiki',
            'value' => 'https://github.com/AMPERAGE-Marketing/Matomo-SharpSpring-Widget/wiki',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'kzeni1@gmail.com',
            'type' => 'email',
          ),
          2 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/AMPERAGE-Marketing/Matomo-SharpSpring-Widget/issues',
            'type' => 'url',
          ),
          3 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/AMPERAGE-Marketing/Matomo-SharpSpring-Widget',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'widget',
          1 => 'amperage',
          2 => 'sharpspring',
          3 => 'Sharp Spring',
          4 => 'CRM',
          5 => 'leads',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Amperage Marketing & Fundraising',
            'email' => 'digital@amperagemarketing.com',
            'homepage' => 'http://www.amperagemarketing.com',
          ),
          1 => 
          array (
            'name' => 'Kurt Zenisek',
            'email' => 'kzeni1@gmail.com',
            'homepage' => 'http://kzeni.com',
          ),
        ),
        'repositoryUrl' => 'https://github.com/AMPERAGE-Marketing/Matomo-SharpSpring-Widget',
        'lastUpdated' => '2018-01-16 01:32:04',
        'latestVersion' => '0.2.0',
        'numDownloads' => 8594,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '9',
          'numContributors' => '1',
          'lastCommitDate' => '2018-01-16 01:30:19',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '0.1.0',
            'release' => '2018-01-16 00:36:04',
            'requires' => 
            array (
              'piwik' => '>=3.3.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 0,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/SharpSpringWidgetByAmperage/0.1.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/AMPERAGE-Marketing/Matomo-SharpSpring-Widget/commits/0.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SharpSpringWidgetByAmperage/download/0.1.0',
          ),
          1 => 
          array (
            'name' => '0.1.1',
            'release' => '2018-01-16 00:40:04',
            'requires' => 
            array (
              'piwik' => '>=3.3.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 3,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/SharpSpringWidgetByAmperage/0.1.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/AMPERAGE-Marketing/Matomo-SharpSpring-Widget/commits/0.1.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SharpSpringWidgetByAmperage/download/0.1.1',
          ),
          2 => 
          array (
            'name' => '0.2.0',
            'release' => '2018-01-16 01:32:04',
            'requires' => 
            array (
              'piwik' => '>=3.3.0-stable,<4.0.0-b1',
            ),
            'numDownloads' => 8591,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/SharpSpringWidgetByAmperage/0.2.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/AMPERAGE-Marketing/Matomo-SharpSpring-Widget/commits/0.2.0',
            'readmeHtml' => 
            array (
              'description' => '

<p>Show SharpSpring info as a widget.</p>

',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<h2>0.2.0</h2>

<ul><li>Formatted the lead output.</li>
</ul><h2>0.1.1</h2>

<ul><li>Updated some plugin metadata.</li>
</ul><h2>0.1.0</h2>

<ul><li>Added API keys as a user-specific setting.</li>
</ul><h2>0.0.1</h2>

<ul><li>Initial Release.</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/SharpSpringWidgetByAmperage/download/0.2.0',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/SharpSpringWidgetByAmperage/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      69 => 
      array (
        'name' => 'CrazyEggWidgetByAmperage',
        'displayName' => 'Crazy Egg Widget',
        'owner' => 'AMPERAGE-Marketing',
        'description' => 'Show Crazy Egg snapshots for the current site as a dashboard widget.',
        'homepage' => 'https://www.amperagemarketing.com',
        'createdDateTime' => '2018-01-16 00:04:03',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Wiki',
            'key' => 'wiki',
            'value' => 'https://github.com/AMPERAGE-Marketing/Matomo-Crazy-Egg-Widget/wiki',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'kzeni1@gmail.com',
            'type' => 'email',
          ),
          2 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/AMPERAGE-Marketing/Matomo-Crazy-Egg-Widget/issues',
            'type' => 'url',
          ),
          3 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/AMPERAGE-Marketing/Matomo-Crazy-Egg-Widget',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'widget',
          1 => 'dashboard',
          2 => 'heatmap',
          3 => 'amperage',
          4 => 'crazy egg',
          5 => 'crazyegg',
          6 => 'heat map',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Amperage Marketing & Fundraising',
            'email' => 'digital@amperagemarketing.com',
            'homepage' => 'http://www.amperagemarketing.com',
          ),
          1 => 
          array (
            'name' => 'Kurt Zenisek',
            'email' => 'kzeni1@gmail.com',
            'homepage' => 'http://kzeni.com',
          ),
        ),
        'repositoryUrl' => 'https://github.com/AMPERAGE-Marketing/Matomo-Crazy-Egg-Widget',
        'lastUpdated' => '2018-01-16 00:04:03',
        'latestVersion' => '1.0.2',
        'numDownloads' => 3616,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/CrazyEggWidgetByAmperage/images/1.0.2/crazy-egg-widget-hover.png',
          1 => 'https://plugins.matomo.org/CrazyEggWidgetByAmperage/images/1.0.2/crazy-egg-widget.png',
          2 => 'https://plugins.matomo.org/CrazyEggWidgetByAmperage/images/1.0.2/settings.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '3',
          'numContributors' => '1',
          'lastCommitDate' => '2018-01-16 00:13:45',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '1.0.2',
            'release' => '2018-01-16 00:04:03',
            'requires' => 
            array (
              'piwik' => '>=3.2.1-stable,<4.0.0-b1',
            ),
            'numDownloads' => 3616,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/CrazyEggWidgetByAmperage/1.0.2/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/AMPERAGE-Marketing/Matomo-Crazy-Egg-Widget/commits/1.0.2',
            'readmeHtml' => 
            array (
              'description' => '

<p>Show Crazy Egg snapshots for the current site as a dashboard widget. First, you specify your CrazyEgg.com API keys in your user settings, and then your dashboard widget will check which site\'s being viewed and display any/all snapshots under that account for that site.</p>

',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<h2>1.0.2</h2>

<ul><li>Added API keys as a user-specific setting.</li>
</ul><h2>1.0.1</h2>

<ul><li>Added snapshot screenshots &amp; heatmap overlay.</li>
</ul><h2>1.0</h2>

<ul><li>Initial Release.</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/CrazyEggWidgetByAmperage/download/1.0.2',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/CrazyEggWidgetByAmperage/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      70 => 
      array (
        'name' => 'ContentOptimizationBundle',
        'displayName' => 'Content Optimization Bundle',
        'owner' => 'innocraft',
        'description' => 'Bring your content to another level with these premium features and enjoy a discount when buying them together.',
        'homepage' => 'https://www.innocraft.com',
        'createdDateTime' => '2017-10-12 19:42:36',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'optimization',
          1 => 'conversion',
          2 => 'cro',
          3 => 'sales',
          4 => 'content',
          5 => 'bundle',
          6 => 'revenue',
        ),
        'basePrice' => 500,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'InnoCraft',
            'email' => 'contact@innocraft.com',
            'homepage' => 'https://www.innocraft.com',
          ),
        ),
        'repositoryUrl' => NULL,
        'lastUpdated' => '2018-01-12 01:18:53',
        'latestVersion' => '3.0.6',
        'numDownloads' => NULL,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.6/0_Optimize_Content.jpg',
          1 => 'https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.6/1_Click_Heatmap.jpg',
          2 => 'https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.6/1_Move_Heatmap.png',
          3 => 'https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.6/2_Session_Recording_Move_And_Click_Path.jpg',
          4 => 'https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.6/2_Session_Recording_Player.png',
          5 => 'https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.6/3_Form_Analytics_By_Page_URL.png',
          6 => 'https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.6/3_Form_Analytics_Drop_Off_Fields.png',
          7 => 'https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.6/3_Form_Analytics_Evolution.png',
          8 => 'https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.6/4_Media_Analytics_Overview.png',
          9 => 'https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.6/4_Media_Analytics_Real-time_Reports.png',
          10 => 'https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.6/4_Media_Analytics_Video_Details.png',
          11 => 'https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.6/4_Media_Analytics_Video_Report.png',
          12 => 'https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.6/5_Users_Flow.png',
          13 => 'https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.6/5_Users_Flow_Interaction_Menu.png',
          14 => 'https://plugins.matomo.org/ContentOptimizationBundle/images/3.0.6/5_Users_Flow_Top_Paths.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => NULL,
          'numContributors' => NULL,
          'lastCommitDate' => NULL,
        ),
        'featured' => false,
        'isFree' => false,
        'isPaid' => true,
        'isBundle' => true,
        'isCustomPlugin' => false,
        'shop' => 
        array (
          'url' => 'https://plugins.matomo.org/ContentOptimizationBundle',
          'variations' => 
          array (
            0 => 
            array (
              'price' => '499',
              'prettyPrice' => '499EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 77,
              'prettyDiscount' => '77€',
              'addToCartUrl' => 'https://plugins.matomo.org/ContentOptimizationBundle?add-to-cart=s&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-contentoptimizationbundle/?attribute_type=Up+to+4+users&add-to-cart=5914&variation_id=5915&aelia_cs_currency=EUR',
            ),
            1 => 
            array (
              'price' => '579',
              'prettyPrice' => 'USD579',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 97,
              'prettyDiscount' => '$97',
              'addToCartUrl' => 'https://plugins.matomo.org/ContentOptimizationBundle?add-to-cart=s&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-contentoptimizationbundle/?attribute_type=Up+to+4+users&add-to-cart=5914&variation_id=5915&aelia_cs_currency=USD',
              'cheapest' => true,
              'recommended' => true,
            ),
            2 => 
            array (
              'price' => '999',
              'prettyPrice' => '999EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 147,
              'prettyDiscount' => '147€',
              'addToCartUrl' => 'https://plugins.matomo.org/ContentOptimizationBundle?add-to-cart=m&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-contentoptimizationbundle/?attribute_type=5+to+15+users&add-to-cart=5914&variation_id=5916&aelia_cs_currency=EUR',
            ),
            3 => 
            array (
              'price' => '1149',
              'prettyPrice' => 'USD1149',
              'currency' => 'USD',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 187,
              'prettyDiscount' => '$187',
              'addToCartUrl' => 'https://plugins.matomo.org/ContentOptimizationBundle?add-to-cart=m&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-contentoptimizationbundle/?attribute_type=5+to+15+users&add-to-cart=5914&variation_id=5916&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
            4 => 
            array (
              'price' => '1499',
              'prettyPrice' => '1499EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 227,
              'prettyDiscount' => '227€',
              'addToCartUrl' => 'https://plugins.matomo.org/ContentOptimizationBundle?add-to-cart=l&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-contentoptimizationbundle/?attribute_type=Unlimited+users&add-to-cart=5914&variation_id=5917&aelia_cs_currency=EUR',
            ),
            5 => 
            array (
              'price' => '1729',
              'prettyPrice' => 'USD1729',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 267,
              'prettyDiscount' => '$267',
              'addToCartUrl' => 'https://plugins.matomo.org/ContentOptimizationBundle?add-to-cart=l&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-contentoptimizationbundle/?attribute_type=Unlimited+users&add-to-cart=5914&variation_id=5917&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
          ),
          'reviews' => 
          array (
            'embedUrl' => 'https://shop.matomo.org/product/plugin-contentoptimizationbundle/?show_reviews=1&piwik_embed=1',
            'height' => 200,
            'averageRating' => NULL,
            'ratingCount' => 0,
            'reviewCount' => 0,
          ),
        ),
        'bundle' => 
        array (
          'plugins' => 
          array (
            0 => 
            array (
              'name' => 'MediaAnalytics',
              'displayName' => 'Media Analytics',
            ),
            1 => 
            array (
              'name' => 'UsersFlow',
              'displayName' => 'Users Flow',
            ),
            2 => 
            array (
              'name' => 'FormAnalytics',
              'displayName' => 'Form Analytics',
            ),
            3 => 
            array (
              'name' => 'HeatmapSessionRecording',
              'displayName' => 'Heatmap & Session Recording',
            ),
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.6',
            'release' => NULL,
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0-b1',
            ),
            'numDownloads' => NULL,
            'license' => 
            array (
              'name' => 'InnoCraft EULA',
              'url' => '',
            ),
            'repositoryChangelogUrl' => NULL,
            'readmeHtml' => 
            array (
              'description' => '

<p>This bundles combines a set of premium features that lets you improve your content, content structure, usability, forms, videos, audios, user flow, and more. It enables you to find out easily what your users really want, what they are looking for, how engaging your content is, and what really is important to your users. You will be also able to find all the pain points on your forms so you can increase the number of users that start interacting with your forms, and the number of users that complete your forms. Finally, you will understand who has watched your media, how much of each media they have watched, and which medias are contributing the most value to your business or organization.</p>

<p>This bundle includes:</p>

<ul><li><a href="https://plugins.matomo.org/FormAnalytics">Form Analytics</a></li>
<li><a href="https://plugins.matomo.org/HeatmapSessionRecording">Heatmap &amp; Session Recording</a></li>
<li><a href="https://plugins.matomo.org/MediaAnalytics">Media Analytics</a></li>
<li><a href="https://plugins.matomo.org/UsersFlow">Users Flow</a></li>
</ul><h3>Our promise</h3>

<p><a href="https://shop.matomo.org/refund-policy/"><img src="https://shop.matomo.org/wp-content/uploads/2016/10/money_back-300x294.png" style="width:220px;float:right;margin-bottom:10px;" alt="Our promise to you" /></a>All of our premium features are built on top of Matomo, which means you get all the benefits and features from Matomo on top. Like data ownership, no data limits, being able to host it yourself on premise and use it in the intranet etc. That’s why Matomo is so popular among businesses, corporations and governments. Matomo is used and trusted by over a million websites and apps. Hand-crafted with a lot of attention to detail directly by the makers of Matomo, we are sure you will love this bundle.</p>

<blockquote>
  <p>This is why we give you a <a href="https://shop.matomo.org/refund-policy/">100% unconditional, easy, fast, and hassle-free money back guarantee</a> for 30 days. There are no strings attached.</p>
</blockquote>

<p>So try it now and start getting a 360 degree view on your users. With our <a href="https://shop.matomo.org/refund-policy/">100% money back guarantee</a> you have nothing to lose.</p>

<h3>About InnoCraft</h3>

<p>We at <a href="https://www.innocraft.com">InnoCraft</a> are the creators of Matomo and know it better than anyone else. This means all plugins are perfectly integrated into Matomo and come with outstanding features and quality to grow your business. We help our clients get started, configure, monitor and make the most of their Matomo analytics service. We also offer unique analytics products and services that help grow your business and meet the needs of medium and large businesses alike.</p>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => NULL,
          ),
        ),
        'isDownloadable' => false,
        'changelog' => 
        array (
          'url' => '',
        ),
        'consumer' => 
        array (
          'license' => NULL,
          'loginUrl' => 'https://shop.matomo.org/my-account',
        ),
      ),
      71 => 
      array (
        'name' => 'GrowthBundle',
        'displayName' => 'Growth Bundle',
        'owner' => 'innocraft',
        'description' => 'This bundle lets you optimize your content, increase your conversions, and gives you insights into your user acquisition.',
        'homepage' => 'https://www.innocraft.com',
        'createdDateTime' => '2017-10-12 19:43:01',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'optimization',
          1 => 'conversion',
          2 => 'cro',
          3 => 'sales',
          4 => 'content',
          5 => 'bundle',
          6 => 'revenue',
        ),
        'basePrice' => 1000,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'InnoCraft',
            'email' => 'contact@innocraft.com',
            'homepage' => 'https://www.innocraft.com',
          ),
        ),
        'repositoryUrl' => NULL,
        'lastUpdated' => '2018-01-12 01:16:52',
        'latestVersion' => '3.0.6',
        'numDownloads' => NULL,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/GrowthBundle/images/3.0.6/0_Grow_Business.jpg',
          1 => 'https://plugins.matomo.org/GrowthBundle/images/3.0.6/1_Click_Heatmap.jpg',
          2 => 'https://plugins.matomo.org/GrowthBundle/images/3.0.6/2_Session_Recording_Move_And_Click_Path.jpg',
          3 => 'https://plugins.matomo.org/GrowthBundle/images/3.0.6/2_Session_Recording_Player.png',
          4 => 'https://plugins.matomo.org/GrowthBundle/images/3.0.6/3_AB_Testing.png',
          5 => 'https://plugins.matomo.org/GrowthBundle/images/3.0.6/3_Manage_A_B_Tests.png',
          6 => 'https://plugins.matomo.org/GrowthBundle/images/3.0.6/4_Funnels.png',
          7 => 'https://plugins.matomo.org/GrowthBundle/images/3.0.6/5_Users_Flow.png',
          8 => 'https://plugins.matomo.org/GrowthBundle/images/3.0.6/5_Users_Flow_Interaction_Menu.png',
          9 => 'https://plugins.matomo.org/GrowthBundle/images/3.0.6/6_Media_Analytics_Overview.png',
          10 => 'https://plugins.matomo.org/GrowthBundle/images/3.0.6/6_Media_Analytics_Real-time_Reports.png',
          11 => 'https://plugins.matomo.org/GrowthBundle/images/3.0.6/7_Crawling_Errors.png',
          12 => 'https://plugins.matomo.org/GrowthBundle/images/3.0.6/7_Keywords_on_Google_Search_Clicks_-_Impressions_-_Clickthrough_-_Position_in_results_page.png',
          13 => 'https://plugins.matomo.org/GrowthBundle/images/3.0.6/8_Form_Analytics_By_Page_URL.png',
          14 => 'https://plugins.matomo.org/GrowthBundle/images/3.0.6/8_Form_Analytics_Drop_Off_Fields.png',
          15 => 'https://plugins.matomo.org/GrowthBundle/images/3.0.6/8_Form_Analytics_Evolution.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => NULL,
          'numContributors' => NULL,
          'lastCommitDate' => NULL,
        ),
        'featured' => false,
        'isFree' => false,
        'isPaid' => true,
        'isBundle' => true,
        'isCustomPlugin' => false,
        'shop' => 
        array (
          'url' => 'https://plugins.matomo.org/GrowthBundle',
          'variations' => 
          array (
            0 => 
            array (
              'price' => '999',
              'prettyPrice' => '999EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 163,
              'prettyDiscount' => '163€',
              'addToCartUrl' => 'https://plugins.matomo.org/GrowthBundle?add-to-cart=s&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-growthbundle/?attribute_type=Up+to+4+users&add-to-cart=5918&variation_id=5919&aelia_cs_currency=EUR',
            ),
            1 => 
            array (
              'price' => '1149',
              'prettyPrice' => 'USD1149',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Up to 4 users',
              'discount' => 193,
              'prettyDiscount' => '$193',
              'addToCartUrl' => 'https://plugins.matomo.org/GrowthBundle?add-to-cart=s&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-growthbundle/?attribute_type=Up+to+4+users&add-to-cart=5918&variation_id=5919&aelia_cs_currency=USD',
              'cheapest' => true,
              'recommended' => true,
            ),
            2 => 
            array (
              'price' => '1999',
              'prettyPrice' => '1999EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 293,
              'prettyDiscount' => '293€',
              'addToCartUrl' => 'https://plugins.matomo.org/GrowthBundle?add-to-cart=m&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-growthbundle/?attribute_type=5+to+15+users&add-to-cart=5918&variation_id=5920&aelia_cs_currency=EUR',
            ),
            3 => 
            array (
              'price' => '2299',
              'prettyPrice' => 'USD2299',
              'currency' => 'USD',
              'period' => 'year',
              'name' => '5 to 15 users',
              'discount' => 363,
              'prettyDiscount' => '$363',
              'addToCartUrl' => 'https://plugins.matomo.org/GrowthBundle?add-to-cart=m&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-growthbundle/?attribute_type=5+to+15+users&add-to-cart=5918&variation_id=5920&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
            4 => 
            array (
              'price' => '2999',
              'prettyPrice' => '2999EUR',
              'currency' => 'EUR',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 463,
              'prettyDiscount' => '463€',
              'addToCartUrl' => 'https://plugins.matomo.org/GrowthBundle?add-to-cart=l&currency=EUR',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-growthbundle/?attribute_type=Unlimited+users&add-to-cart=5918&variation_id=5921&aelia_cs_currency=EUR',
            ),
            5 => 
            array (
              'price' => '3449',
              'prettyPrice' => 'USD3449',
              'currency' => 'USD',
              'period' => 'year',
              'name' => 'Unlimited users',
              'discount' => 543,
              'prettyDiscount' => '$543',
              'addToCartUrl' => 'https://plugins.matomo.org/GrowthBundle?add-to-cart=l&currency=USD',
              'addToCartEmbedUrl' => 'https://shop.matomo.org/product/plugin-growthbundle/?attribute_type=Unlimited+users&add-to-cart=5918&variation_id=5921&aelia_cs_currency=USD',
              'cheapest' => false,
              'recommended' => false,
            ),
          ),
          'reviews' => 
          array (
            'embedUrl' => 'https://shop.matomo.org/product/plugin-growthbundle/?show_reviews=1&piwik_embed=1',
            'height' => 200,
            'averageRating' => NULL,
            'ratingCount' => 0,
            'reviewCount' => 0,
          ),
        ),
        'bundle' => 
        array (
          'plugins' => 
          array (
            0 => 
            array (
              'name' => 'MediaAnalytics',
              'displayName' => 'Media Analytics',
            ),
            1 => 
            array (
              'name' => 'AbTesting',
              'displayName' => 'A/B Testing',
            ),
            2 => 
            array (
              'name' => 'Funnels',
              'displayName' => 'Funnels',
            ),
            3 => 
            array (
              'name' => 'UsersFlow',
              'displayName' => 'Users Flow',
            ),
            4 => 
            array (
              'name' => 'FormAnalytics',
              'displayName' => 'Form Analytics',
            ),
            5 => 
            array (
              'name' => 'SearchEngineKeywordsPerformance',
              'displayName' => 'Search Engine Keywords Performance',
            ),
            6 => 
            array (
              'name' => 'HeatmapSessionRecording',
              'displayName' => 'Heatmap & Session Recording',
            ),
            7 => 
            array (
              'name' => 'MultiChannelConversionAttribution',
              'displayName' => 'Multi Channel Conversion Attribution',
            ),
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.6',
            'release' => NULL,
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0-b1',
            ),
            'numDownloads' => NULL,
            'license' => 
            array (
              'name' => 'InnoCraft EULA',
              'url' => '',
            ),
            'repositoryChangelogUrl' => NULL,
            'readmeHtml' => 
            array (
              'description' => '

<p>Are you afraid of making the wrong business decisions? Do you want to make your day to day life much easier? Do you want to grow your business? This bundles lets you improve your sales, conversions, content, forms, videos, audio, and user acquisitions with ease. When you have this bundle, you can be confident that you truly understand your visitors, make reliable decisions fast, and gain new insights in a way that was not possible before. You will be surprised how much more successful it will make you! And with our <a href="https://shop.matomo.org/refund-policy/">100% money back guarantee</a> you have nothing to lose.</p>

<p>This bundle includes the following premium features:</p>

<ul><li><a href="https://plugins.matomo.org/AbTesting">A/B Testing</a></li>
<li><a href="https://plugins.matomo.org/FormAnalytics">Form Analytics</a></li>
<li><a href="https://plugins.matomo.org/Funnels">Funnels</a></li>
<li><a href="https://plugins.matomo.org/HeatmapSessionRecording">Heatmap &amp; Session Recording</a></li>
<li><a href="https://plugins.matomo.org/MediaAnalytics">Media Analytics</a></li>
<li><a href="https://plugins.matomo.org/SearchEngineKeywordsPerformance">Search Engine Keywords Performance</a></li>
<li><a href="https://plugins.matomo.org/MultiChannelConversionAttribution">Multi Channel Conversion Attribution</a></li>
<li><a href="https://plugins.matomo.org/UsersFlow">Users Flow</a></li>
</ul><p>Wonder how to make even more out of your Matomo? If you have multiple websites, if you resell Matomo, or if you want to create custom reports, have a look at our <a href="https://plugins.matomo.org/PremiumBundle">Premium Bundle</a>.</p>

<h3>Our promise</h3>

<p><a href="https://shop.matomo.org/refund-policy/"><img src="https://shop.matomo.org/wp-content/uploads/2016/10/money_back-300x294.png" style="width:220px;float:right;margin-bottom:10px;" alt="Our promise to you" /></a>All of our premium features are built on top of Matomo, which means you get all the benefits and features from Matomo on top. Like data ownership, no data limits, being able to host it yourself on premise and use it in the intranet etc. That’s why Matomo is so popular among businesses, corporations and governments. Matomo is used and trusted by over a million websites and apps. Hand-crafted with a lot of attention to detail directly by the makers of Matomo, we are sure you will love this bundle.</p>

<blockquote>
  <p>This is why we give you a <a href="https://shop.matomo.org/refund-policy/">100% unconditional, easy, fast, and hassle-free money back guarantee</a> for 30 days. There are no strings attached.</p>
</blockquote>

<p>So try it now and let us know how you do. We are happy to help you get started and to hear how it changes your business or organization.</p>

<h3>About InnoCraft</h3>

<p>We at <a href="https://www.innocraft.com">InnoCraft</a> are the creators of Matomo and know it better than anyone else. This means all plugins are perfectly integrated into Matomo and come with outstanding features and quality to grow your business. We help our clients get started, configure, monitor and make the most of their Matomo analytics service. We also offer unique analytics products and services that help grow your business and meet the needs of medium and large businesses alike.</p>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => NULL,
          ),
        ),
        'isDownloadable' => false,
        'changelog' => 
        array (
          'url' => '',
        ),
        'consumer' => 
        array (
          'license' => NULL,
          'loginUrl' => 'https://shop.matomo.org/my-account',
        ),
      ),
      72 => 
      array (
        'name' => 'LiveTab',
        'displayName' => 'Live Tab',
        'owner' => 'tsteur',
        'description' => 'Keep an eye on the number of live visitors in the browser tab. It displays the number of visitors in the last 30 minutes in the browser tab.',
        'homepage' => 'https://matomo.org',
        'createdDateTime' => '2013-09-30 01:03:12',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Wiki',
            'key' => 'wiki',
            'value' => 'https://github.com/tsteur/matomo-livetab-plugin/wiki',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/tsteur/matomo-livetab-plugin/issues',
            'type' => 'url',
          ),
          2 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/tsteur/matomo-livetab-plugin',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'live',
          1 => 'tab',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Thomas Steur',
            'email' => NULL,
            'homepage' => 'https://matomo.org',
          ),
        ),
        'repositoryUrl' => 'https://github.com/tsteur/matomo-livetab-plugin',
        'lastUpdated' => '2018-01-11 01:16:03',
        'latestVersion' => '3.0.1',
        'numDownloads' => 26054,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/LiveTab/images/3.0.1/Browser_Tab.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '58',
          'numContributors' => '1',
          'lastCommitDate' => '2018-01-11 01:15:52',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2016-09-07 21:40:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 5671,
            'license' => 
            array (
              'name' => 'GPL-3.0+',
              'url' => 'https://plugins.matomo.org/LiveTab/3.0.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/tsteur/matomo-livetab-plugin/commits/3.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/LiveTab/download/3.0.0',
          ),
          1 => 
          array (
            'name' => '3.0.1',
            'release' => '2018-01-11 01:16:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 5688,
            'license' => 
            array (
              'name' => 'GPL-3.0+',
              'url' => 'https://plugins.matomo.org/LiveTab/3.0.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/tsteur/matomo-livetab-plugin/commits/3.0.1',
            'readmeHtml' => 
            array (
              'description' => '

<p>This is a plugin for the Open Source Web Analytics platform <a href="https://matomo.org">Matomo</a>. It allows you to keep an eye on the number of live visitors in the browser tab. It displays the number of visits, actions, unique visitors or converted goals in the last X minutes in the browser tab. The number will be updated every minute.</p>

<p>For better and faster readability the value will be shortened when greater than 1000. For instance to 3.12K or 3.43M.</p>

<p><img src="https://raw.github.com/tsteur/matomo-livetab-plugin/master/screenshots/Browser_Tab.png" alt="Browser_Tab.png" /></p>

',
              'faq' => '<p><strong>Is it possible to configure the displayed metric?</strong></p>

<p>Yes, you can choose between Visits, Actions, Converted Visits and Visitors.</p>

<p><strong>Is it possible to configure the displayed metric per user?</strong></p>

<p>Yes, this is also possible. Each user can configure the plugin differently.</p>

<p><strong>Is it possible to configure the website that should be used?</strong></p>

<p>No, this is currently not possible. It will always display the metric of the current selected website.</p>',
              'documentation' => '',
              'changelog' => '<p><strong>3.0.1</strong>
* Rename Piwik to Matomo</p>

<p><strong>3.0.0</strong>
* Compatible with Piwik 3.0</p>

<p><strong>1.0.2</strong>
* Compatible with Piwik 2.0</p>

<p><strong>1.0.0</strong>
* Initial release</p>',
            ),
            'download' => '/api/2.0/plugins/LiveTab/download/3.0.1',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/LiveTab/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      73 => 
      array (
        'name' => 'ArchiveSite',
        'displayName' => 'Archive Site',
        'owner' => 'iMarkus',
        'description' => 'Start archiving process via web.',
        'homepage' => 'https://github.com/iMarkus/Piwik-ArchiveSite',
        'createdDateTime' => '2017-12-04 14:38:03',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/iMarkus/Piwik-ArchiveSite/issues',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'site',
          1 => 'Archive',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'iMarkus',
            'email' => 'iMarkus@users.noreply.github.com',
            'homepage' => 'https://github.com/iMarkus',
          ),
          1 => 
          array (
            'name' => 'hagor',
            'email' => 'hagor@users.noreply.github.com',
            'homepage' => 'https://github.com/hagor',
          ),
        ),
        'repositoryUrl' => 'https://github.com/iMarkus/Piwik-ArchiveSite',
        'lastUpdated' => '2018-01-09 15:06:04',
        'latestVersion' => '0.1.1',
        'numDownloads' => 4149,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/ArchiveSite/images/0.1.1/ArchiveSite.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '6',
          'numContributors' => '1',
          'lastCommitDate' => '2018-01-09 15:05:19',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '0.1.0',
            'release' => '2017-12-04 14:38:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.6.0',
            ),
            'numDownloads' => 292,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/ArchiveSite/0.1.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/iMarkus/Piwik-ArchiveSite/commits/0.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/ArchiveSite/download/0.1.0',
          ),
          1 => 
          array (
            'name' => '0.1.1',
            'release' => '2018-01-09 15:06:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.6.0',
            ),
            'numDownloads' => 3857,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/ArchiveSite/0.1.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/iMarkus/Piwik-ArchiveSite/commits/0.1.1',
            'readmeHtml' => 
            array (
              'description' => '

<p>This plugin allows superusers to start the archiving process via web.</p>

',
              'faq' => '<p>FAQ</p>',
              'documentation' => '',
              'changelog' => '<p><strong>0.1.1</strong>
* Updated output format</p>

<p><strong>0.1.0</strong>
* Initial release</p>',
            ),
            'download' => '/api/2.0/plugins/ArchiveSite/download/0.1.1',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/ArchiveSite/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      74 => 
      array (
        'name' => 'CustomOptOut',
        'displayName' => 'Custom Opt Out',
        'owner' => 'Zeichen32',
        'description' => 'Create your own opt-out iframe css styles',
        'homepage' => 'https://www.zwei-entwickler.de',
        'createdDateTime' => '2013-12-20 18:48:04',
        'donate' => 
        array (
          'paypal' => 'info@two-developers.com',
          'bitcoin' => NULL,
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/Zeichen32/PiwikCustomOptOut/issues',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/Zeichen32/PiwikCustomOptOut/',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'Opt-Out',
          1 => 'CSS',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Jens Averkamp',
            'email' => 'j.averkamp@two-developers.com',
            'homepage' => 'https://github.com/Zeichen32',
          ),
          1 => 
          array (
            'name' => 'Sven Motz',
            'email' => 's.motz@two-developers.com',
            'homepage' => 'https://github.com/xMysteriox',
          ),
        ),
        'repositoryUrl' => 'https://github.com/Zeichen32/PiwikCustomOptOut',
        'lastUpdated' => '2017-12-04 17:32:04',
        'latestVersion' => '1.0.3',
        'numDownloads' => 43434,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/CustomOptOut/images/1.0.3/CustomOptOut.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '25',
          'numContributors' => '5',
          'lastCommitDate' => '2017-12-04 17:30:06',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '1.0.0',
            'release' => '2016-12-15 22:34:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 804,
            'license' => 
            array (
              'name' => 'GPL-3.0+',
              'url' => 'https://plugins.matomo.org/CustomOptOut/1.0.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Zeichen32/PiwikCustomOptOut/commits/1.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/CustomOptOut/download/1.0.0',
          ),
          1 => 
          array (
            'name' => '1.0.1',
            'release' => '2016-12-20 16:44:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 5997,
            'license' => 
            array (
              'name' => 'GPL-3.0+',
              'url' => 'https://plugins.matomo.org/CustomOptOut/1.0.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Zeichen32/PiwikCustomOptOut/commits/1.0.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/CustomOptOut/download/1.0.1',
          ),
          2 => 
          array (
            'name' => '1.0.3',
            'release' => '2017-12-04 17:32:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
              'php' => '>=5.5.9',
            ),
            'numDownloads' => 9286,
            'license' => 
            array (
              'name' => 'GPL-3.0+',
              'url' => 'https://plugins.matomo.org/CustomOptOut/1.0.3/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/Zeichen32/PiwikCustomOptOut/commits/1.0.3',
            'readmeHtml' => 
            array (
              'description' => '

<p>Adds a new admin tab allowing to change the opt-out CSS Styles for each website.</p>

',
              'faq' => '',
              'documentation' => '<p>1) Click on the "Settings" link located in the top menu on the right</p>

<p>2) Click on the "Custom Opt-Out" tab located in the "Settings" section of the sidebar on the left</p>

<p>3) Enter your customized CSS code into the textarea input field called "Custom Css" e.g.</p>

<pre><code>  body {
    font-family: Arial, Verdana, sans-serif;
    font-size: 12px;
    color: #ddd;
    line-height: 160%;
    margin: 10px;
    padding: 0;
  }
</code></pre>

<p>or insert a URL to the file containing your custom CSS into the input field called "External CSS File" e.g.</p>

<p><code>http://www.example.org/styles/piwikcustom.css</code></p>

<p>4) Click the "Save" button.</p>

<p>5) Use the iframe code provided below the input fields to add the Matomo (Piwik)i Opt-Out to your website.</p>

<h2>Notice:</h2>

<p>If you want to use this plugin with a Matomo version lower than 3.0.0-b1, please use a plugin version &lt; 1.0.0.</p>',
              'changelog' => '<h3>CustomOptOut 1.0.2, 1.0.3 (HotFix)</h3>

<ul><li>(PR #53) CSS fix and libraries update</li>
<li>Update <a href="http://codemirror.net">CodeMirror Editor</a></li>
</ul><h3>CustomOptOut 1.0.1</h3>

<ul><li>Fix settings listener</li>
</ul><h3>CustomOptOut 1.0.0</h3>

<ul><li>The first stable final version</li>
<li>Drop support for Piwik &lt;= 3.0.0-b1</li>
<li>Add support for injecting javascript to the OptOut View</li>
<li>Update <a href="http://codemirror.net">CodeMirror Editor</a></li>
</ul><h4>CustomOptOut 0.4.3:</h4>

<ul><li>(Issue #43) Add new feature to inject Javascript to the OptOut iFrame.</li>
<li>Update <a href="http://codemirror.net">CodeMirror Editor</a></li>
</ul><h4>CustomOptOut 0.4.2:</h4>

<ul><li>(Issue #41) Add missing "readableByCurrentUser" property</li>
</ul><h4>CustomOptOut 0.4.1:</h4>

<ul><li>(Issue #38) Add new plugin setting options to define default css styles.</li>
</ul><h4>CustomOptOut 0.4.0:</h4>

<ul><li>Use new OptOutManager</li>
<li>Drop support for Piwik &lt; 2.15.0</li>
<li>Use piwiks default OptOutView and Controller</li>
</ul><h4>CustomOptOut 0.3.1:</h4>

<ul><li>(Issue #32) Use idsite instead of idSite parameter</li>
<li>(Issue #33) Loose site id between switching Opt Out states</li>
</ul><h4>CustomOptOut 0.3.0:</h4>

<ul><li>Use the new OptOut Manager, so this Plugin can change the style of the core OptOut View</li>
<li>Update Transifex translations</li>
<li>Update <a href="http://codemirror.net">CodeMirror Editor</a></li>
</ul><h4>CustomOptOut 0.2.5: (HotFix)</h4>

<ul><li>Fix <a href="http://codemirror.net">CodeMirror Editor</a> Textarea with large css code</li>
<li>Fix invalid html in optout template</li>
</ul><h4>CustomOptOut 0.2.4:</h4>

<ul><li>(Issue #23) Check DNT in OptOut Page</li>
<li>Update <a href="http://codemirror.net">CodeMirror Editor</a></li>
</ul><h4>CustomOptOut 0.2.3:</h4>

<ul><li>(Issue #22) Remove escaping from externel css url</li>
<li>Fix PluginSettings</li>
</ul><h4>CustomOptOut 0.2.2: (HotFix)</h4>

<ul><li>Update <a href="http://codemirror.net">CodeMirror Editor</a></li>
</ul><h4>CustomOptOut 0.2.1:</h4>

<ul><li>(Issue #21) Remove possibility to change opt-out text for each website (Breaking Changes in <a href="https://github.com/piwik/piwik/blob/master/CHANGELOG.md#piwik-2110">Piwik 2.11.0</a>)</li>
</ul><h4>CustomOptOut 0.2.0:</h4>

<ul><li>Add possibility to change opt-out text for each website</li>
</ul><h4>CustomOptOut 0.1.9:</h4>

<ul><li>Add XFrameOption <a href="https://github.com/piwik/piwik/commit/25545fdc55a1decd13548c1f3f6479789956e56c">See Piwik Commit</a></li>
</ul><h4>CustomOptOut 0.1.8:</h4>

<ul><li>(MR #15) Make the opt-out form work even if JavaScript is disabled (craue)</li>
</ul><h4>CustomOptOut 0.1.7:</h4>

<ul><li>(MR #14) Update Readme (kghbln)</li>
</ul><h4>CustomOptOut 0.1.6:</h4>

<ul><li>Add <a href="http://codemirror.net">CodeMirror Editor</a> to highlight the CSS Code</li>
</ul><h4>CustomOptOut 0.1.5: (HotFix)</h4>

<ul><li>(Issue #6) Disable AngularJs form binding</li>
</ul><h4>CustomOptOut 0.1.4:</h4>

<ul><li>(Issue #3) Code updated to support Piwik 2.1 and newer</li>
<li>(Issue #2) Allow relative urls in css file field</li>
</ul><h4>CustomOptOut 0.1.3:</h4>

<ul><li>(MR #1) Added a p-tag around the opt-out text for better markup and easier styling. (christianseel)</li>
</ul><h4>CustomOptOut 0.1.2:</h4>

<ul><li>Fix wrong css escaping</li>
</ul><h4>CustomOptOut 0.1.1:</h4>

<ul><li>Initial Version</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/CustomOptOut/download/1.0.3',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/CustomOptOut/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      75 => 
      array (
        'name' => 'LoginShibboleth',
        'displayName' => 'Login Shibboleth',
        'owner' => 'uniwue-rz',
        'description' => 'Shibboleth Login Plugin for Matomo (Piwik)',
        'homepage' => 'https://github.com/uniwue-rz/LoginShibboleth',
        'createdDateTime' => '2016-10-20 08:50:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'login',
          1 => 'authentication',
          2 => 'active',
          3 => 'directory',
          4 => 'shibboleth',
          5 => 'singlelogon',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Pouyan Azari',
            'email' => 'Pouyan.azari@uni-wuerzburg.de',
            'homepage' => 'http://www.rz.uni-wuerzburg.de/wir/mitarbeiter/web_services/azari_pouyan/',
          ),
        ),
        'repositoryUrl' => 'https://github.com/uniwue-rz/LoginShibboleth',
        'lastUpdated' => '2017-11-24 09:40:05',
        'latestVersion' => '1.2.0',
        'numDownloads' => 5227,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/LoginShibboleth/images/1.2.0/screenshots.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '1',
          'numContributors' => '1',
          'lastCommitDate' => '2017-11-24 09:39:19',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '1.1.10',
            'release' => '2016-10-20 09:06:03',
            'requires' => 
            array (
              'piwik' => '>=2.2.0,<4.0.0-b1',
              'php' => '>=5.3.0',
            ),
            'numDownloads' => 12,
            'license' => 
            array (
              'name' => 'MIT',
              'url' => 'https://plugins.matomo.org/LoginShibboleth/1.1.10/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/uniwue-rz/LoginShibboleth/commits/1.1.10',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/LoginShibboleth/download/1.1.10',
          ),
          1 => 
          array (
            'name' => '1.1.12',
            'release' => '2016-10-20 13:56:03',
            'requires' => 
            array (
              'piwik' => '>=2.2.0,<4.0.0-b1',
              'php' => '>=5.3.0',
            ),
            'numDownloads' => 29,
            'license' => 
            array (
              'name' => 'MIT',
              'url' => 'https://plugins.matomo.org/LoginShibboleth/1.1.12/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/uniwue-rz/LoginShibboleth/commits/1.1.12',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/LoginShibboleth/download/1.1.12',
          ),
          2 => 
          array (
            'name' => '1.1.13',
            'release' => '2016-10-21 13:44:03',
            'requires' => 
            array (
              'piwik' => '>=2.2.0,<4.0.0-b1',
              'php' => '>=5.3.0',
            ),
            'numDownloads' => 1972,
            'license' => 
            array (
              'name' => 'MIT',
              'url' => 'https://plugins.matomo.org/LoginShibboleth/1.1.13/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/uniwue-rz/LoginShibboleth/commits/1.1.13',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/LoginShibboleth/download/1.1.13',
          ),
          3 => 
          array (
            'name' => '1.2.0',
            'release' => '2017-11-24 09:40:05',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0-b1',
              'php' => '>=7.0.0',
            ),
            'numDownloads' => 3196,
            'license' => 
            array (
              'name' => 'MIT',
              'url' => 'https://plugins.matomo.org/LoginShibboleth/1.2.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/uniwue-rz/LoginShibboleth/commits/1.2.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => '/api/2.0/plugins/LoginShibboleth/download/1.2.0',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/LoginShibboleth/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      76 => 
      array (
        'name' => 'SiteInfoWidget',
        'displayName' => 'Site Info Widget',
        'owner' => 'iMarkus',
        'description' => 'Displays properties of the current selected site in a widget.',
        'homepage' => 'https://github.com/iMarkus/Piwik-SiteInfoWidget',
        'createdDateTime' => '2017-10-24 13:10:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/iMarkus/Piwik-SiteInfoWidget/issues',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'widget',
          1 => 'site',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'iMarkus',
            'email' => 'iMarkus@users.noreply.github.com',
            'homepage' => 'https://github.com/iMarkus',
          ),
          1 => 
          array (
            'name' => 'hagor',
            'email' => 'hagor@users.noreply.github.com',
            'homepage' => 'https://github.com/hagor',
          ),
        ),
        'repositoryUrl' => 'https://github.com/iMarkus/Piwik-SiteInfoWidget',
        'lastUpdated' => '2017-10-25 10:50:12',
        'latestVersion' => '0.3.0',
        'numDownloads' => 4386,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/SiteInfoWidget/images/0.3.0/SiteInfoWidget.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '5',
          'numContributors' => '1',
          'lastCommitDate' => '2017-10-25 10:49:06',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '0.1.0',
            'release' => '2017-10-24 13:10:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.6.0',
            ),
            'numDownloads' => 0,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/SiteInfoWidget/0.1.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/iMarkus/Piwik-SiteInfoWidget/commits/0.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SiteInfoWidget/download/0.1.0',
          ),
          1 => 
          array (
            'name' => '0.2.0',
            'release' => '2017-10-24 13:16:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.6.0',
            ),
            'numDownloads' => 25,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/SiteInfoWidget/0.2.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/iMarkus/Piwik-SiteInfoWidget/commits/0.2.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SiteInfoWidget/download/0.2.0',
          ),
          2 => 
          array (
            'name' => '0.3.0',
            'release' => '2017-10-25 10:50:12',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.6.0',
            ),
            'numDownloads' => 4361,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/SiteInfoWidget/0.3.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/iMarkus/Piwik-SiteInfoWidget/commits/0.3.0',
            'readmeHtml' => 
            array (
              'description' => '

<p>This plugin allows to display properties of the current selected site in a widget.</p>

',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<p><strong>0.3.0</strong>
* Added API</p>

<p><strong>0.2.0</strong>
* Added screenshot</p>

<p><strong>0.1.0</strong>
* Initial release</p>',
            ),
            'download' => '/api/2.0/plugins/SiteInfoWidget/download/0.3.0',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/SiteInfoWidget/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      77 => 
      array (
        'name' => 'HashUserId',
        'displayName' => 'Hash User Id',
        'owner' => 'iMarkus',
        'description' => 'Anonymize UserId using salt and sha1 hash.',
        'homepage' => 'https://github.com/iMarkus/Piwik-HashUserId',
        'createdDateTime' => '2017-10-24 11:34:03',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/iMarkus/Piwik-HashUserId/issues',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'Anonymize',
          1 => 'Hash',
          2 => 'UserId',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'iMarkus',
            'email' => 'iMarkus@users.noreply.github.com',
            'homepage' => 'https://github.com/iMarkus',
          ),
          1 => 
          array (
            'name' => 'hagor',
            'email' => 'hagor@users.noreply.github.com',
            'homepage' => 'https://github.com/hagor',
          ),
        ),
        'repositoryUrl' => 'https://github.com/iMarkus/Piwik-HashUserId',
        'lastUpdated' => '2017-10-25 10:50:05',
        'latestVersion' => '0.4.0',
        'numDownloads' => 4486,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/HashUserId/images/0.4.0/HashUserId.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '14',
          'numContributors' => '1',
          'lastCommitDate' => '2017-10-25 10:48:11',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '0.1.0',
            'release' => '2017-10-24 11:34:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.6.0',
            ),
            'numDownloads' => 18,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/HashUserId/0.1.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/iMarkus/Piwik-HashUserId/commits/1.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/HashUserId/download/0.1.0',
          ),
          1 => 
          array (
            'name' => '0.2.0',
            'release' => '2017-10-25 10:26:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.6.0',
            ),
            'numDownloads' => 0,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/HashUserId/0.2.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/iMarkus/Piwik-HashUserId/commits/0.2.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/HashUserId/download/0.2.0',
          ),
          2 => 
          array (
            'name' => '0.3.0',
            'release' => '2017-10-25 10:36:02',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.6.0',
            ),
            'numDownloads' => 0,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/HashUserId/0.3.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/iMarkus/Piwik-HashUserId/commits/0.3.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/HashUserId/download/0.3.0',
          ),
          3 => 
          array (
            'name' => '0.4.0',
            'release' => '2017-10-25 10:50:05',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
              'php' => '>=5.6.0',
            ),
            'numDownloads' => 4468,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/HashUserId/0.4.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/iMarkus/Piwik-HashUserId/commits/0.4.0',
            'readmeHtml' => 
            array (
              'description' => '

<p>This plugin is using a salt from configuration file and sha1 hash function to anonymize the UserId.</p>

',
              'faq' => '<p>FAQ</p>

<p>Are there any settings?</p>

<p>No. Once the plugin is activated, it starts to do its job.</p>

<p>Is it going to break my existing tracking codes?</p>

<p>No. Matomo (Piwik) will continue to work as normal with the hashed user id in the tracking requests.</p>',
              'documentation' => '',
              'changelog' => '<p><strong>0.4.0</strong>
* Added API</p>

<p><strong>0.3.0</strong>
* Added screenshot</p>

<p><strong>0.2.0</strong>
* Added empty check on uid</p>

<p><strong>0.1.0</strong>
* Initial release</p>',
            ),
            'download' => '/api/2.0/plugins/HashUserId/download/0.4.0',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/HashUserId/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      78 => 
      array (
        'name' => 'IceCastStatistics',
        'displayName' => 'Ice Cast Statistics',
        'owner' => 'hoamer',
        'description' => 'Live Plugin to show various informations about your IceCast Server',
        'homepage' => NULL,
        'createdDateTime' => '2016-09-30 12:40:02',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'kontakt@sebastian-neugebauer.de',
            'type' => 'email',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'IceCast Statistics',
          1 => 'Icecast',
          2 => 'radio',
          3 => 'stream',
          4 => 'streaming',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Sebastian Neugebauer',
            'email' => 'kontakt@sebastian-neugebauer.de',
            'homepage' => NULL,
          ),
        ),
        'repositoryUrl' => 'https://github.com/hoamer/IceCast-Statistics',
        'lastUpdated' => '2017-09-12 10:26:03',
        'latestVersion' => '1.0.11',
        'numDownloads' => 6788,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '39',
          'numContributors' => '1',
          'lastCommitDate' => '2017-12-01 06:40:17',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '1.0.3',
            'release' => '2017-01-23 09:52:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 193,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/hoamer/IceCast-Statistics/commits/1.0.4',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/IceCastStatistics/download/1.0.3',
          ),
          1 => 
          array (
            'name' => '1.0.5',
            'release' => '2017-02-06 11:56:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 63,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/hoamer/IceCast-Statistics/commits/1.0.5',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/IceCastStatistics/download/1.0.5',
          ),
          2 => 
          array (
            'name' => '1.0.6',
            'release' => '2017-02-10 08:30:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 15,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/hoamer/IceCast-Statistics/commits/1.0.6',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/IceCastStatistics/download/1.0.6',
          ),
          3 => 
          array (
            'name' => '1.0.7',
            'release' => '2017-02-10 11:58:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 234,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/hoamer/IceCast-Statistics/commits/1.0.7',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/IceCastStatistics/download/1.0.7',
          ),
          4 => 
          array (
            'name' => '1.0.8',
            'release' => '2017-03-08 11:56:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 633,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/hoamer/IceCast-Statistics/commits/1.0.9',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/IceCastStatistics/download/1.0.8',
          ),
          5 => 
          array (
            'name' => '1.0.10',
            'release' => '2017-07-21 10:54:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 331,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/hoamer/IceCast-Statistics/commits/1.0.10',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/IceCastStatistics/download/1.0.10',
          ),
          6 => 
          array (
            'name' => '1.0.11',
            'release' => '2017-09-12 10:26:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 4308,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/hoamer/IceCast-Statistics/commits/1.0.11',
            'readmeHtml' => 
            array (
              'description' => '

<p>This is a plugin for the Open Source Web Analytics platform Matomo (Piwik). If enabled, it will add an widgets that you can add to your dashboard.
The widget will show various information about your IceCast Server-Mountpoint. You can choose which information are displayed in the widget by activating them in your "Personal Settings" -&gt; "Plugin Settings".</p>

<p>The initial idea was to display the current played title and acutally connected listeners. This was made for an friend www.technoac.de</p>

<p>Please fill the user credentials and hostname of the IceCast server in the "Administrator Settings" -&gt; "Plugin Settings".
You can activate and set an refresh interval in your "Personal Settings" -&gt; "Plugin Settings".</p>

<p>Before this plugin will display informations about your mountpoint, you have toactivate them.</p>

<p>You can display the following informations by activating them as described:</p>

<pre><code>- Combined audio informations
- Bitrate
- Number of channels
- Maximum number of todays listeners
- Currently amount of listeners
- Listener URL
- Maximum number of allowed listeners to your mountpoint
- Show the value if your server is set to "public"
- Display the currently sample rate
- Display the chosen server description
- Display the chosen server name
- Display the codec information
- Display the chosen server URL
- Display the amount of slow listeners
- Display the source IP
- Display the start time of the server
- Display the start time of the server in ISO8601 format
- Display the currently played title
- Display the amount of total sent Megabytes
- Display the amount of total read Megabytes
- Display the user agent of the shoutcast server
</code></pre>

<p>If you have further questions to the values, please visit the original IceCast documentation: http://icecast.org/docs/</p>

',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<ol><li><p>Due to piwik changes the directory structure and files have changed. Please read the commits to see the changes</p></li>
<li><p>Changed the Style of dislayed informations. It is now much more responsible and nicer integrated.</p></li>
</ol>',
            ),
            'download' => '/api/2.0/plugins/IceCastStatistics/download/1.0.11',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/IceCastStatistics/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      79 => 
      array (
        'name' => 'AdminNotification',
        'displayName' => 'Admin Notification',
        'owner' => 'jbrule',
        'description' => 'Adds the ability for Matomo (Piwik) administrators to include an informative message to all user\'s dashboards. This uses the built in Notification function.',
        'homepage' => 'https://github.com/jbrule/piwikplugin-AdminNotification',
        'createdDateTime' => '2015-04-13 17:52:03',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'notification',
          1 => 'admin message',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Josh Brule',
            'email' => NULL,
            'homepage' => 'https://github.com/jbrule',
          ),
        ),
        'repositoryUrl' => 'https://github.com/jbrule/piwikplugin-AdminNotification',
        'lastUpdated' => '2017-09-11 21:00:04',
        'latestVersion' => '3.0.0',
        'numDownloads' => 8493,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/AdminNotification/images/3.0.0/Dashboard_with_Notification.png',
          1 => 'https://plugins.matomo.org/AdminNotification/images/3.0.0/Notification_Settings.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '12',
          'numContributors' => '1',
          'lastCommitDate' => '2017-09-11 21:03:42',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2017-09-11 21:00:04',
            'requires' => 
            array (
              'piwik' => '>=2.12.0,<4.0.0-b1',
            ),
            'numDownloads' => 3606,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/AdminNotification/3.0.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/jbrule/piwikplugin-AdminNotification/commits/v3.0.0',
            'readmeHtml' => 
            array (
              'description' => '

<p>Adds the ability for Matomo (Piwik) administrators to include an informative message on all users\' dashboards. This may be useful for communicating with users in larger shared environments. In our setup we were tracking 1,900 websites with 250 users. This is a solution we wrote to allow us to easily inform our users of maintenance windows.</p>

',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<ul><li>3.0.0 Piwik v3 compatible. Effort was made to maintain backwords compatibility. This should work all the way back to 2.12.x</li>
<li>4.0.1.2 Tested with Piwik v2.15 and included new registerEvents() hook for compatibility with Piwik 3.0</li>
<li>5.0.1.1 Cleanup. Removed plugin template verbiage from code files.</li>
<li>0.1.0 Initial Release</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/AdminNotification/download/3.0.0',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/AdminNotification/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      80 => 
      array (
        'name' => 'AjaxOptOut',
        'displayName' => 'Ajax Opt Out',
        'owner' => 'lippoliv',
        'description' => 'Supports Opt Out from tracking through Ajax-Request. So you can implement a custom HTML, CSS and JS to realize custom-style opt out.',
        'homepage' => 'https://lw-scm.de/lipperts-web/piwik-ajax-opt-out',
        'createdDateTime' => '2016-12-24 23:06:02',
        'donate' => 
        array (
          'paypal' => 'info@lipperts-web.de',
          'bitcoin' => NULL,
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'support@lipperts-web.de',
            'type' => 'email',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'tracking',
          1 => 'opt out',
          2 => 'opt in',
          3 => 'ajax',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Lipperts WEB',
            'email' => 'info@lipperts-web.de',
            'homepage' => 'http://lipperts-web.de',
          ),
        ),
        'repositoryUrl' => 'https://github.com/lippoliv/piwik-plugin-ajaxoptout',
        'lastUpdated' => '2017-07-30 09:46:03',
        'latestVersion' => '1.2.1',
        'numDownloads' => 6736,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '1',
          'numContributors' => '1',
          'lastCommitDate' => '2018-03-13 15:48:05',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '1.1.2',
            'release' => '2016-12-24 23:22:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-stable,<4.0.0',
            ),
            'numDownloads' => 1244,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/lippoliv/piwik-plugin-ajaxoptout/commits/1.1.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AjaxOptOut/download/1.1.2',
          ),
          1 => 
          array (
            'name' => '1.2.0',
            'release' => '2017-07-30 09:30:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-stable,<4.0.0',
            ),
            'numDownloads' => 1,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/lippoliv/piwik-plugin-ajaxoptout/commits/1.2.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/AjaxOptOut/download/1.2.0',
          ),
          2 => 
          array (
            'name' => '1.2.1',
            'release' => '2017-07-30 09:46:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-stable,<4.0.0',
            ),
            'numDownloads' => 5335,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/lippoliv/piwik-plugin-ajaxoptout/commits/1.2.1',
            'readmeHtml' => 
            array (
              'description' => '

<p>Matomo (Piwik) supports an opt out iframe, wich may supports your needs. But in some cases it is
more handy to realize opt out / opt in via ajax requests and with no iframes. May due to
security reasons.</p>

<p>I had such an project and implemented this nice small plugin wich offers you three new API URLs:</p>

<ol><li><code>your.piwik/index.php?module=API&amp;method=AjaxOptOut.isTracked</code>
You will get an Response whether the current user get\'s tracked or not.</li>
<li><code>your.piwik/index.php?module=API&amp;method=AjaxOptOut.doIgnore</code>
Matomo will set the ignore cookie for the current user.</li>
<li><code>your.piwik/index.php?module=API&amp;method=AjaxOptOut.doTrack</code>
Matomo will remove the ignore cookie for the current user.</li>
</ol><p>You have to use JSONP Requests, as of the AJAX requests needs to manipulate the cookies.</p>

<p><a href="https://github.com/lippoliv/piwik-plugin-ajaxoptout/blob/master/README.md">More Informatione here</a></p>

',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<ul><li>1.2.1 Optimize Plugin page</li>
<li>1.2.0 Added jQuery Demo</li>
<li>1.1.2 FIX JSON error</li>
<li>1.1.1 PIWIK 3.0.0</li>
<li>1.1.0 Prepare for Marketplace</li>
<li>1.0.0 Initial Release for PIWIK 2.15.0</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/AjaxOptOut/download/1.2.1',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/AjaxOptOut/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      81 => 
      array (
        'name' => 'LoginFailLog',
        'displayName' => 'Login Fail Log',
        'owner' => 'patrickbr',
        'description' => 'Logs failed login attempts together with user IP. Useful for protecting Matomo (Piwik) against brute force attacks via fail2ban or similar tools.',
        'homepage' => 'https://patrickbrosi.de/en/projects/piwikloginfaillog/',
        'createdDateTime' => '2017-07-23 01:04:03',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/patrickbr/piwik-LoginFailLog/issues',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/patrickbr/piwik-LoginFailLog',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'login',
          1 => 'authentication',
          2 => 'log',
          3 => 'fail2ban',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Patrick Brosi',
            'email' => 'info@patrickbrosi.de',
            'homepage' => 'http://patrickbrosi.de',
          ),
        ),
        'repositoryUrl' => 'https://github.com/patrickbr/piwik-LoginFailLog',
        'lastUpdated' => '2017-07-23 01:48:04',
        'latestVersion' => '0.1.1',
        'numDownloads' => 5870,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '6',
          'numContributors' => '1',
          'lastCommitDate' => '2018-09-21 01:20:48',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '0.1.0',
            'release' => '2017-07-23 01:04:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 3,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/patrickbr/piwik-LoginFailLog/commits/0.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/LoginFailLog/download/0.1.0',
          ),
          1 => 
          array (
            'name' => '0.1.1',
            'release' => '2017-07-23 01:48:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 5867,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/patrickbr/piwik-LoginFailLog/commits/0.1.1',
            'readmeHtml' => 
            array (
              'description' => '

<p>This simple plugin enables logging of failed authentication attempts in Matomo (Piwik), nothing more, nothing less. Failed login attempts are logged like this:</p>

<pre><code>WARNING LoginFailLog[2017-07-22 23:35:20] [b215d] Failed login from 172.217.22.227 \'patrick\'.
WARNING LoginFailLog[2017-07-22 23:35:20] [b215d] Failed login from 172.217.22.227 with username \'patrick\'.
</code></pre>

<p>This is useful if you want to secure your Matomo instance with fail2ban or similar tools that work on log files. For example, the following filter can be used with fail2ban to detect and count login fails:</p>

<pre><code># Fail2Ban configuration file for Matomo with LoginFailLog plugin

[Definition]
failregex = .* Failed login from &lt;HOST&gt; with username .*
</code></pre>

',
              'faq' => '',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => '/api/2.0/plugins/LoginFailLog/download/0.1.1',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/LoginFailLog/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      82 => 
      array (
        'name' => 'TasksTimetable',
        'displayName' => 'Tasks Timetable',
        'owner' => 'matomo-org',
        'description' => 'List all maintenance tasks that are scheduled to run. Displays the task names and next execution time in a table.',
        'homepage' => 'http://piwik.org',
        'createdDateTime' => '2014-01-16 20:14:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Forum',
            'key' => 'forum',
            'value' => 'https://forum.piwik.org',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/piwik/plugin-TasksTimetable/issues',
            'type' => 'url',
          ),
          2 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/piwik/plugin-TasksTimetable',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'monitoring',
          1 => 'tasks',
          2 => 'scheduled',
          3 => 'timetable',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Megan Liang',
            'email' => NULL,
            'homepage' => NULL,
          ),
          1 => 
          array (
            'name' => 'Jay Deshpande',
            'email' => NULL,
            'homepage' => NULL,
          ),
          2 => 
          array (
            'name' => 'Piwik',
            'email' => 'hello@piwik.org',
            'homepage' => 'http://piwik.org',
          ),
        ),
        'repositoryUrl' => 'https://github.com/matomo-org/plugin-TasksTimetable',
        'lastUpdated' => '2017-07-10 09:10:03',
        'latestVersion' => '3.0.2',
        'numDownloads' => 17738,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/TasksTimetable/images/3.0.2/Timetable.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '103',
          'numContributors' => '8',
          'lastCommitDate' => '2019-08-25 10:03:55',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2016-09-13 22:06:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 309,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-TasksTimetable/commits/3.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/TasksTimetable/download/3.0.0',
          ),
          1 => 
          array (
            'name' => '3.0.1',
            'release' => '2016-11-01 20:44:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 2088,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-TasksTimetable/commits/3.0.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/TasksTimetable/download/3.0.1',
          ),
          2 => 
          array (
            'name' => '3.0.2',
            'release' => '2017-07-10 09:10:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 6256,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/matomo-org/plugin-TasksTimetable/commits/3.0.2',
            'readmeHtml' => 
            array (
              'description' => '

<p>Plugin to list all scheduled tasks: Name of the tasks and next execution time displayed in a table.</p>',
              'faq' => '<p><strong>Where can I find the timetable?</strong></p>

<p>It is located as a menu item "Scheduled Tasks" under diagnostics on the settings page.</p>',
              'documentation' => '',
              'changelog' => '<ul><li>3.0.0 Compatibility with Piwik 3.0</li>
<li>0.2.2 Display time of day in table and renamed column to "Date in UTC timezone"</li>
<li>0.2.1 Minor translation updates.</li>
<li>0.2.0 Compatibility w/ Piwik 2.15.</li>
<li>0.1.0 Initial release</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/TasksTimetable/download/3.0.2',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/TasksTimetable/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      83 => 
      array (
        'name' => 'TapatalkReport',
        'displayName' => 'Tapatalk Report',
        'owner' => 'luohui8891',
        'description' => 'Tapatalk Report',
        'homepage' => NULL,
        'createdDateTime' => '2017-06-19 02:32:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'luohui@tapatalk.com',
            'type' => 'email',
          ),
          1 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/luohui8891/TapatalkReport/issues',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'Tapatalk',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Andy',
            'email' => 'luohui@tapatalk.com',
            'homepage' => 'https://github.com/luohui8891',
          ),
        ),
        'repositoryUrl' => 'https://github.com/luohui8891/TapatalkReport',
        'lastUpdated' => '2017-06-29 06:36:04',
        'latestVersion' => '0.1.2',
        'numDownloads' => 4072,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '10',
          'numContributors' => '1',
          'lastCommitDate' => '2017-07-04 07:59:57',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '0.1.0',
            'release' => '2017-06-19 02:32:06',
            'requires' => 
            array (
              'piwik' => '>=3.0.4-stable,<4.0.0-b1',
            ),
            'numDownloads' => 111,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/luohui8891/TapatalkReport/commits/0.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/TapatalkReport/download/0.1.0',
          ),
          1 => 
          array (
            'name' => '0.1.1',
            'release' => '2017-06-28 07:54:05',
            'requires' => 
            array (
              'piwik' => '>=3.0.4-stable,<4.0.0-b1',
            ),
            'numDownloads' => 16,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/luohui8891/TapatalkReport/commits/0.1.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/TapatalkReport/download/0.1.1',
          ),
          2 => 
          array (
            'name' => '0.1.2',
            'release' => '2017-06-29 06:36:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.4-stable,<4.0.0-b1',
            ),
            'numDownloads' => 3945,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/luohui8891/TapatalkReport/commits/0.1.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '<p><strong>My question?</strong></p>

<p>My answer</p>',
              'documentation' => '<h2>Documentation</h2>',
              'changelog' => '<p>Here goes the changelog text.</p>',
            ),
            'download' => '/api/2.0/plugins/TapatalkReport/download/0.1.2',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/TapatalkReport/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      84 => 
      array (
        'name' => 'FlagCounter',
        'displayName' => 'Flag Counter',
        'owner' => 'sgiehl',
        'description' => 'This plugin allows you to include a simple statistic in your website showing the flags and hits of the countries your visitors came from',
        'homepage' => 'http://github.com/sgiehl/piwik-plugin-FlagCounter',
        'createdDateTime' => '2015-01-05 23:22:04',
        'donate' => 
        array (
          'paypal' => 'stefangiehl@web.de',
          'flattr' => 'https://flattr.com/thing/2578144/sgiehl',
          'bitcoin' => NULL,
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'flag',
          1 => 'flagcounter',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Stefan Giehl',
            'email' => 'stefan@piwik.org',
            'homepage' => 'http://github.com/sgiehl',
          ),
        ),
        'repositoryUrl' => 'https://github.com/sgiehl/piwik-plugin-FlagCounter',
        'lastUpdated' => '2017-06-08 08:08:04',
        'latestVersion' => '3.0.3',
        'numDownloads' => 14030,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/FlagCounter/images/3.0.3/counter1.png',
          1 => 'https://plugins.matomo.org/FlagCounter/images/3.0.3/counter2.png',
          2 => 'https://plugins.matomo.org/FlagCounter/images/3.0.3/counter3.png',
          3 => 'https://plugins.matomo.org/FlagCounter/images/3.0.3/counter4.png',
          4 => 'https://plugins.matomo.org/FlagCounter/images/3.0.3/settings.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '37',
          'numContributors' => '2',
          'lastCommitDate' => '2017-06-08 08:07:10',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2016-09-17 16:20:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
              'php' => '>=5.5.0',
            ),
            'numDownloads' => 2133,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/sgiehl/piwik-plugin-FlagCounter/commits/3.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/FlagCounter/download/3.0.0',
          ),
          1 => 
          array (
            'name' => '3.0.1',
            'release' => '2017-04-18 10:42:18',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
              'php' => '>=5.5.0',
            ),
            'numDownloads' => 786,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/sgiehl/piwik-plugin-FlagCounter/commits/3.0.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/FlagCounter/download/3.0.1',
          ),
          2 => 
          array (
            'name' => '3.0.3',
            'release' => '2017-06-08 08:08:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
              'php' => '>=5.5.0',
            ),
            'numDownloads' => 5267,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/sgiehl/piwik-plugin-FlagCounter/commits/3.0.3',
            'readmeHtml' => 
            array (
              'description' => '

<p>This plugin allows you to include a small image or iframe in you website displaying the flags and total hits of the countries your website visitors came from</p>

<p>Please keep in mind that everyone will be able to see that kind of statistic as this plugin does not consider the access rights.</p>

<h3>Requirements</h3>

<p><a href="https://github.com/piwik/piwik">Piwik</a> 2.0.4 or higher is required.
GD library including ttf support</p>

<h3>Features</h3>

<ul><li>Configurable with following parameters:

<ul><li>idSite: Website to display</li>
<li>period: period to display</li>
<li>date: date to display</li>
<li>cols: count of columns to display (default 2)</li>
<li>rows: count of rows to display (default 5)</li>
<li>showflag: show flags (default 1)</li>
<li>showcountryode: show country codes (default 0)</li>
<li>font: font family to use</li>
<li>fontsize: font size to use (between 2 and 30; default 12)</li>
<li>fontcolor: font color to use (rgb value; default 0,0,0)</li>
</ul></li>
<li>Generates a transparent PNG image showing the flag icons and their total hits</li>
<li>Generates simple HTML to be included as iframe</li>
</ul>',
              'faq' => '<p><strong>The image is not displayed. What can I do?</strong></p>

<p>Maybe you have some kind of access restriction for your Matomo (Piwik) like http auth. The Url needs to be public accessible, or at least accessible to those, who should be able to see the counter.</p>

<p><strong>How can I display the counter for all data in the past</strong></p>

<p>To do that, set period to <code>range</code> and date to something like <code>1992-01-01,today</code>.</p>

<p>The full URL for the image would then look like:</p>

<pre><code>http://piwik.url/index.php?module=FlagCounter&amp;action=image&amp;idSite=1&amp;period=range&amp;date=1992-01-01,today&amp;cols=2&amp;rows=6
</code></pre>

<p><strong>Can I use a custom font?</strong></p>

<p>Currently all ttf fonts located in the <code>fonts</code> directory within this plugin are available for usage. If you place a new font there, you should be able to use it.</p>',
              'documentation' => '',
              'changelog' => '<ul><li>Version 0.1 - Alpha Release</li>
<li>Version 0.2 

<ul><li>improved image generation (automatic spacing between items)</li>
<li>possibility to show country codes besides or instead of the flags</li>
</ul></li>
<li>Version 0.3

<ul><li>added ability to choose a font family, size &amp; color</li>
</ul></li>
<li>Version 3.0.0

<ul><li>Compatibility for Piwik 3</li>
</ul></li>
<li>Version 3.0.3

<ul><li>fixed caching bug with multiple sites</li>
</ul></li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/FlagCounter/download/3.0.3',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/FlagCounter/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      85 => 
      array (
        'name' => 'FreeMobileMessaging',
        'displayName' => 'Free Mobile Messaging',
        'owner' => 'apapillon',
        'description' => 'Mobile Messaging Plugin: Free Mobile support',
        'homepage' => 'https://github.com/apapillon/piwik-freemobilesmsprovider-plugin',
        'createdDateTime' => '2015-11-29 23:10:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'Report',
          1 => 'FreeMobile',
          2 => 'SMS',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Anthony Papillon',
            'email' => 'contact@perhonen.fr',
            'homepage' => 'http://perhonen.fr',
          ),
        ),
        'repositoryUrl' => 'https://github.com/apapillon/piwik-freemobilesmsprovider-plugin',
        'lastUpdated' => '2017-05-20 04:32:03',
        'latestVersion' => '1.0.1',
        'numDownloads' => 8509,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/FreeMobileMessaging/images/1.0.1/Set_Parameters.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '1',
          'numContributors' => '1',
          'lastCommitDate' => '2017-05-20 04:31:06',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '1.0.1',
            'release' => '2017-05-20 04:32:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.2',
            ),
            'numDownloads' => 4725,
            'license' => 
            array (
              'name' => 'GPL v3',
              'url' => 'https://plugins.matomo.org/FreeMobileMessaging/1.0.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/apapillon/piwik-freemobilesmsprovider-plugin/commits/1.0.1',
            'readmeHtml' => 
            array (
              'description' => '

<p>This is a plugin for the Open Source Web Analytics platform <a href="http://piwik.org">Piwik</a>. It 
add Free Mobile SMS provider support to MobileMessaging plugin.</p>

',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<p><strong>1.0.1</strong>
* Adapt to new Piwik API interface (&gt;= 3.02)</p>

<p><strong>1.0.0</strong>
* Initial release</p>',
            ),
            'download' => '/api/2.0/plugins/FreeMobileMessaging/download/1.0.1',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/FreeMobileMessaging/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      86 => 
      array (
        'name' => 'SearchMonitor',
        'displayName' => 'Search Monitor',
        'owner' => 'TWConnect',
        'description' => 'Some custom reports which are related with search performance for MyThoughtWorks.',
        'homepage' => NULL,
        'createdDateTime' => '2017-03-16 02:52:03',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'htao@thoughtworks.com',
            'type' => 'email',
          ),
          1 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/TWConnect/piwikPlugin/issues',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'SearchMonitor',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'ThoughtWorks',
            'email' => 'htao@thoughtworks.com',
            'homepage' => NULL,
          ),
        ),
        'repositoryUrl' => 'https://github.com/TWConnect/piwikPlugin',
        'lastUpdated' => '2017-04-17 10:18:04',
        'latestVersion' => '1.3.2',
        'numDownloads' => 5522,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '92',
          'numContributors' => '2',
          'lastCommitDate' => '2017-09-29 03:05:36',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '0.2.2',
            'release' => '2017-03-16 03:04:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 7,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/0.2.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/0.2.2',
          ),
          1 => 
          array (
            'name' => '0.2.4',
            'release' => '2017-03-16 10:54:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 4,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/0.2.4',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/0.2.4',
          ),
          2 => 
          array (
            'name' => '0.2.5',
            'release' => '2017-03-16 11:30:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
            ),
            'numDownloads' => 7,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/0.2.5',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/0.2.5',
          ),
          3 => 
          array (
            'name' => '0.2.6',
            'release' => '2017-03-16 13:32:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
            ),
            'numDownloads' => 0,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/0.2.6',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/0.2.6',
          ),
          4 => 
          array (
            'name' => '0.2.7',
            'release' => '2017-03-16 13:36:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0,<4.0.0',
            ),
            'numDownloads' => 25,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/0.2.7',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/0.2.7',
          ),
          5 => 
          array (
            'name' => '0.8.1',
            'release' => '2017-03-17 02:08:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 1,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/0.8.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/0.8.1',
          ),
          6 => 
          array (
            'name' => '0.8.2',
            'release' => '2017-03-17 02:28:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 4,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/0.8.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/0.8.2',
          ),
          7 => 
          array (
            'name' => '0.8.3',
            'release' => '2017-03-17 04:30:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 2,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/0.8.3',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/0.8.3',
          ),
          8 => 
          array (
            'name' => '0.8.4',
            'release' => '2017-03-17 07:00:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 1,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/0.8.4',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/0.8.4',
          ),
          9 => 
          array (
            'name' => '0.8.5',
            'release' => '2017-03-17 07:20:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 28,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/0.8.5',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/0.8.5',
          ),
          10 => 
          array (
            'name' => '0.8.6',
            'release' => '2017-03-20 03:16:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 20,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/0.8.6',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/0.8.6',
          ),
          11 => 
          array (
            'name' => '0.8.7',
            'release' => '2017-03-20 10:28:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 55,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/0.8.7',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/0.8.7',
          ),
          12 => 
          array (
            'name' => '0.8.8',
            'release' => '2017-03-24 10:46:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 24,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/0.8.8',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/0.8.8',
          ),
          13 => 
          array (
            'name' => '0.8.9',
            'release' => '2017-03-25 12:10:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 4,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/0.8.9',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/0.8.9',
          ),
          14 => 
          array (
            'name' => '0.9.0',
            'release' => '2017-03-25 13:04:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 156,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/0.9.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/0.9.0',
          ),
          15 => 
          array (
            'name' => '0.9.1',
            'release' => '2017-04-01 09:56:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 2,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/0.9.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/0.9.1',
          ),
          16 => 
          array (
            'name' => '0.9.2',
            'release' => '2017-04-01 11:18:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 0,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/0.9.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/0.9.2',
          ),
          17 => 
          array (
            'name' => '0.9.3',
            'release' => '2017-04-01 14:02:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 19,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/0.9.3',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/0.9.3',
          ),
          18 => 
          array (
            'name' => '0.9.4',
            'release' => '2017-04-02 12:50:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 12,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/0.9.4',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/0.9.4',
          ),
          19 => 
          array (
            'name' => '0.9.5',
            'release' => '2017-04-03 01:38:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 1,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/0.9.5',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/0.9.5',
          ),
          20 => 
          array (
            'name' => '0.9.6',
            'release' => '2017-04-03 01:54:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 4,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/0.9.6',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/0.9.6',
          ),
          21 => 
          array (
            'name' => '0.9.7',
            'release' => '2017-04-03 02:30:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 9,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/0.9.7',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/0.9.7',
          ),
          22 => 
          array (
            'name' => '0.9.8',
            'release' => '2017-04-03 06:32:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 13,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/0.9.8',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/0.9.8',
          ),
          23 => 
          array (
            'name' => '0.9.9',
            'release' => '2017-04-03 12:38:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 1,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/0.9.9',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/0.9.9',
          ),
          24 => 
          array (
            'name' => '1.0.0',
            'release' => '2017-04-03 13:00:05',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 11,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.0.0',
          ),
          25 => 
          array (
            'name' => '1.0.1',
            'release' => '2017-04-04 03:00:05',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 3,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.0.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.0.1',
          ),
          26 => 
          array (
            'name' => '1.0.2',
            'release' => '2017-04-04 03:18:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 42,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.0.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.0.2',
          ),
          27 => 
          array (
            'name' => '1.0.3',
            'release' => '2017-04-05 01:42:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 6,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.0.3',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.0.3',
          ),
          28 => 
          array (
            'name' => '1.0.4',
            'release' => '2017-04-05 02:54:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 3,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.0.4',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.0.4',
          ),
          29 => 
          array (
            'name' => '1.0.5',
            'release' => '2017-04-05 03:36:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 10,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.0.5',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.0.5',
          ),
          30 => 
          array (
            'name' => '1.0.6',
            'release' => '2017-04-05 06:56:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 5,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.0.6',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.0.6',
          ),
          31 => 
          array (
            'name' => '1.0.7',
            'release' => '2017-04-05 07:42:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 3,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.0.7',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.0.7',
          ),
          32 => 
          array (
            'name' => '1.0.8',
            'release' => '2017-04-05 08:16:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 4,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.0.8',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.0.8',
          ),
          33 => 
          array (
            'name' => '1.0.9',
            'release' => '2017-04-05 09:28:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 4,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.0.9',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.0.9',
          ),
          34 => 
          array (
            'name' => '1.1.0',
            'release' => '2017-04-05 09:46:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 3,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.1.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.1.0',
          ),
          35 => 
          array (
            'name' => '1.1.2',
            'release' => '2017-04-05 10:18:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 3,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.1.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.1.2',
          ),
          36 => 
          array (
            'name' => '1.1.3',
            'release' => '2017-04-05 10:52:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 5,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.1.3',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.1.3',
          ),
          37 => 
          array (
            'name' => '1.1.4',
            'release' => '2017-04-05 11:08:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 29,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.1.4',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.1.4',
          ),
          38 => 
          array (
            'name' => '1.1.6',
            'release' => '2017-04-06 09:54:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 6,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.1.6',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.1.6',
          ),
          39 => 
          array (
            'name' => '1.1.7',
            'release' => '2017-04-06 10:34:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 14,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.1.7',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.1.7',
          ),
          40 => 
          array (
            'name' => '1.1.8',
            'release' => '2017-04-07 02:54:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 15,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.1.8',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.1.8',
          ),
          41 => 
          array (
            'name' => '1.1.9',
            'release' => '2017-04-07 12:02:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 56,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.1.9',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.1.9',
          ),
          42 => 
          array (
            'name' => '1.2.0',
            'release' => '2017-04-10 06:00:05',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 48,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.2.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.2.0',
          ),
          43 => 
          array (
            'name' => '1.2.1',
            'release' => '2017-04-12 05:22:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 11,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.2.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.2.1',
          ),
          44 => 
          array (
            'name' => '1.2.2',
            'release' => '2017-04-12 11:02:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 9,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.2.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.2.2',
          ),
          45 => 
          array (
            'name' => '1.2.3',
            'release' => '2017-04-12 13:40:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 0,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.2.3',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.2.3',
          ),
          46 => 
          array (
            'name' => '1.2.4',
            'release' => '2017-04-12 13:58:05',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 26,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.2.4',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.2.4',
          ),
          47 => 
          array (
            'name' => '1.2.5',
            'release' => '2017-04-13 02:56:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 3,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.2.5',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.2.5',
          ),
          48 => 
          array (
            'name' => '1.2.6',
            'release' => '2017-04-13 03:48:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 8,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.2.6',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.2.6',
          ),
          49 => 
          array (
            'name' => '1.2.7',
            'release' => '2017-04-13 07:50:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 49,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.2.7',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.2.7',
          ),
          50 => 
          array (
            'name' => '1.2.8',
            'release' => '2017-04-14 08:48:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 71,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.2.8',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.2.8',
          ),
          51 => 
          array (
            'name' => '1.2.9',
            'release' => '2017-04-17 01:28:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 4,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.2.9',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.2.9',
          ),
          52 => 
          array (
            'name' => '1.3.0',
            'release' => '2017-04-17 03:02:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 3,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.3.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.3.0',
          ),
          53 => 
          array (
            'name' => '1.3.1',
            'release' => '2017-04-17 03:44:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 13,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.3.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.3.1',
          ),
          54 => 
          array (
            'name' => '1.3.2',
            'release' => '2017-04-17 10:18:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.1-stable,<4.0.0',
            ),
            'numDownloads' => 4656,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/TWConnect/piwikPlugin/commits/1.3.2',
            'readmeHtml' => 
            array (
              'description' => '

<p>This plugin is customized for MyThoughtWorks. We want to track user search action and generate some custom reports.</p>

<p>This plugin will include reports:
get search result by role and region
get pace time on search result page for tendency and distribution</p>',
              'faq' => '<p><strong>My question?</strong></p>

<p>My answer</p>',
              'documentation' => '<h2>Document</h2>

<h1>Matomo (Piwik) SearchMonitor Plugin</h1>

<h2>Description</h2>

<p>This plugin is customized for MyThoughtWorks. We want to track user search action and generate some custom reports.</p>

<p>This plugin will include reports:
get pace time on search result page for tendency and distribution.</p>

<h2>Graphic “Pace Time on Search Result Content”</h2>

<h2>Time of Reading Search Result Content</h2>

<p>When user click on a search result, how long did he/she spend on reading the content. From click the link until user leaves the page. If user click more than one link, then calculate the total reading time as one search result time.
Graphics contain two parts: “Tendency” and “Distribution”</p>

<h2>Tendency</h2>

<p>a graphic shows the average of “Pace Time on Search Result Content” on every date in a dateRange. When mouse hovers on the curve, it will show the value of the average page time on a single day.</p>

<h2>Distribution</h2>

<p>a graphic shows the distribution of time sections. When mouse hovers on the bar, it will show the value of percentage and times of search. Time section: 1-5s, 5-10s, 10-30s, 30-60s, 60s above</p>',
              'changelog' => '<p>Here goes the changelog text.</p>',
            ),
            'download' => '/api/2.0/plugins/SearchMonitor/download/1.3.2',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/SearchMonitor/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      87 => 
      array (
        'name' => 'ApiGetWithSitesInfo',
        'displayName' => 'Api Get With Sites Info',
        'owner' => 'mattab',
        'description' => 'Modifies the \'API.get\' output to also list the website name and main website URL',
        'homepage' => 'https://github.com/mattab/piwik-plugin-ApiGetWithSitesInfo',
        'createdDateTime' => '2014-12-09 03:50:03',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Matthieu Aubry',
            'email' => 'matt@piwik.org',
            'homepage' => 'http://matthieu.net',
          ),
        ),
        'repositoryUrl' => 'https://github.com/mattab/piwik-plugin-ApiGetWithSitesInfo',
        'lastUpdated' => '2017-03-27 21:30:04',
        'latestVersion' => '0.1.6',
        'numDownloads' => 9380,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/ApiGetWithSitesInfo/images/0.1.6/Sample_Api_get_output_when_plugin_activated.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '32',
          'numContributors' => '3',
          'lastCommitDate' => '2017-03-27 21:28:27',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '0.1.4',
            'release' => '2016-10-04 01:06:03',
            'requires' => 
            array (
              'piwik' => '>=2.11.0,<4.0.0-b1',
            ),
            'numDownloads' => 1,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/mattab/piwik-plugin-ApiGetWithSitesInfo/commits/0.1.4',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/ApiGetWithSitesInfo/download/0.1.4',
          ),
          1 => 
          array (
            'name' => '0.1.5',
            'release' => '2016-10-04 01:24:03',
            'requires' => 
            array (
              'piwik' => '>=2.11.0,<4.0.0-b1',
            ),
            'numDownloads' => 1371,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/mattab/piwik-plugin-ApiGetWithSitesInfo/commits/0.1.5',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/ApiGetWithSitesInfo/download/0.1.5',
          ),
          2 => 
          array (
            'name' => '0.1.6',
            'release' => '2017-03-27 21:30:04',
            'requires' => 
            array (
              'piwik' => '>=2.11.0,<4.0.0-b1',
            ),
            'numDownloads' => 4257,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/mattab/piwik-plugin-ApiGetWithSitesInfo/commits/0.1.6',
            'readmeHtml' => 
            array (
              'description' => '

<p>Modifies the \'API.get\' output to also list the website name and main website URL.</p>

<p>When calling the API method <code>API.get</code> it will be enriched with the following new fields for each website:</p>

<ul><li><code>idsite</code> - Website ID</li>
<li><code>site_url</code> - Website URL</li>
<li><p><code>site_name</code> - Website name</p>

<p>If you specify <code>&amp;idSite=all</code> it will decorate each website in the response with the new fields.</p></li>
</ul><p>The output will look as follows:</p>

<pre><code>&lt;?xml version="1.0" encoding="utf-8" ?&gt;
&lt;result&gt;
    &lt;idsite&gt;2&lt;/idsite&gt;
    &lt;site_url&gt;http://blog.shacklefordvetclinic.com&lt;/site_url&gt;
    &lt;site_name&gt;Shackleford Road Veterinary Clinic&lt;/site_name&gt;
    &lt;nb_uniq_visitors&gt;2397&lt;/nb_uniq_visitors&gt;
    &lt;nb_visits&gt;2758&lt;/nb_visits&gt;
    &lt;nb_actions&gt;7943&lt;/nb_actions&gt;
    &lt;bounce_count&gt;1421&lt;/bounce_count&gt;
    &lt;nb_conversions&gt;987&lt;/nb_conversions&gt;
    &lt;nb_visits_converted&gt;838&lt;/nb_visits_converted&gt;
    &lt;revenue&gt;0&lt;/revenue&gt;
    &lt;nb_pageviews&gt;6370&lt;/nb_pageviews&gt;
    &lt;nb_uniq_pageviews&gt;5330&lt;/nb_uniq_pageviews&gt;
    &lt;nb_downloads&gt;368&lt;/nb_downloads&gt;
    &lt;nb_uniq_downloads&gt;305&lt;/nb_uniq_downloads&gt;
    &lt;nb_outlinks&gt;951&lt;/nb_outlinks&gt;
    &lt;nb_uniq_outlinks&gt;871&lt;/nb_uniq_outlinks&gt;
    &lt;nb_searches&gt;27&lt;/nb_searches&gt;
    &lt;nb_keywords&gt;25&lt;/nb_keywords&gt;
    &lt;nb_hits_with_time_generation&gt;5635&lt;/nb_hits_with_time_generation&gt;
    &lt;conversion_rate&gt;30.38%&lt;/conversion_rate&gt;
    &lt;bounce_rate&gt;52%&lt;/bounce_rate&gt;
    &lt;nb_actions_per_visit&gt;2.9&lt;/nb_actions_per_visit&gt;
    [...]
</code></pre>

',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<ul><li>0.1.3 - Piwik 3 compatibility</li>
<li>0.1.2 - Fixed bug <code>Call to a member function getRowsCount() on a non-object</code></li>
<li>0.1.0 - Initial release</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/ApiGetWithSitesInfo/download/0.1.6',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/ApiGetWithSitesInfo/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      88 => 
      array (
        'name' => 'IntranetGeoIP',
        'displayName' => 'Intranet Geo IP',
        'owner' => 'ThaDafinser',
        'description' => 'Matomo (Piwik) plugin to locate all locale data of a user based on the IP address/subnetwork (country, region, city, latitude, longitude, provider, ...)',
        'homepage' => 'https://github.com/ThaDafinser/Piwik-IntranetGeoIP',
        'createdDateTime' => '2014-06-12 08:04:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'ipv4',
          1 => 'ipv6',
          2 => 'Subnet',
          3 => 'Intranet',
          4 => 'GeoIP',
          5 => 'ThaDafinser',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Martin Keckeis',
            'email' => NULL,
            'homepage' => 'https://github.com/thadafinser',
          ),
        ),
        'repositoryUrl' => 'https://github.com/ThaDafinser/Piwik-IntranetGeoIP',
        'lastUpdated' => '2017-03-20 06:40:04',
        'latestVersion' => '3.0.1',
        'numDownloads' => 22584,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/IntranetGeoIP/images/3.0.1/data.jpg',
          1 => 'https://plugins.matomo.org/IntranetGeoIP/images/3.0.1/realtime.jpg',
          2 => 'https://plugins.matomo.org/IntranetGeoIP/images/3.0.1/visitorMap.jpg',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '81',
          'numContributors' => '4',
          'lastCommitDate' => '2018-10-26 09:23:48',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2017-03-08 12:34:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
              'php' => '>=7.0.0,<8.0.0',
            ),
            'numDownloads' => 254,
            'license' => 
            array (
              'name' => 'GPL v3',
              'url' => 'https://plugins.matomo.org/IntranetGeoIP/3.0.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/ThaDafinser/Piwik-IntranetGeoIP/commits/v3.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/IntranetGeoIP/download/3.0.0',
          ),
          1 => 
          array (
            'name' => '3.0.1',
            'release' => '2017-03-20 06:40:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
              'php' => '>=7.0.0,<8.0.0',
            ),
            'numDownloads' => 8270,
            'license' => 
            array (
              'name' => 'GPL v3',
              'url' => 'https://plugins.matomo.org/IntranetGeoIP/3.0.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/ThaDafinser/Piwik-IntranetGeoIP/commits/v3.0.1',
            'readmeHtml' => 
            array (
              'description' => '

<p>Matomo (Piwik) plugin to locate all locale data of a user based on the IP address/subnetwork (country, region, city, latitude, longitude, provider, ...)</p>

<p><strong><em>Please use it only for INTRANET tracking</em></strong> everything else just dont make sense :-)</p>

',
              'faq' => '<p><strong>What does this plugin do?</strong></p>

<p>It adds visitor information based on the matched IP address from your configuration. Not more and not less.
The database schema and UI stays untouched, so all Matomo (Piwik) statistics can be used like you would use a internet GeoIP database.</p>

<p><strong>How to configure/install this plugin / the networks?</strong></p>

<p>After installation and activation of the plugin, open the file <code>piwik/config/IntranetGeoIP.data.php</code></p>

<p>You can their add your location information and their subnetworks.</p>

<p>See the file <code>piwik/config/IntranetGeoIP.data.php</code> or see the readme on github https://github.com/ThaDafinser/IntranetGeoIp</p>

<p><strong>What statistics are available?</strong></p>

<p>If you create a full configuration data file, you\'ll see
* Visitor -&gt; Realtime visitor map
* Visitor -&gt; Location and provider
* and many more...(in generall all statistics are available like using a internet GeoIP database)</p>

<p><strong>Why there stands provider "unknown" in my visitor log?</strong></p>

<p>If your installation is stock, all visitors will get this "flag" to show you, what IPs are not matched.
You can adjust or remove this, by changing the "noMatch" block in your <code>IntranetGeoIP.data.php</code> file.
If you remove the complete block, none matched visitors will be skipped by this plugin.
But you can also fill all possible visitorInfos like you are used for matched IP addresses.</p>

<p><strong>Can i use this plugin with a internet GeoIP database side by side?</strong></p>

<p>Yes you can.
Just remove or comment out the <code>noMatch</code> block in your configuration file.</p>

<p><strong>Note about the configuration?</strong></p>

<p>Inside the array key <code>visitorInfo</code> you can freely add/remove all available columns from the <code>log_visit</code> table you want.
The keys below are just a suggestion, since they are the only one which make sense currently IMO.
All available fields, see here: http://developer.piwik.org/guides/persistence-and-the-mysql-backend#visits</p>

<p>Inside they key <code>networks</code> add all subnetworks which apply to this location.</p>

<pre><code>return [
    /*
     * If the IP was not matched, apply these data to visitorInfo
     * You can also apply here all possible visitorInformation data if you want
     */
    \'noMatch\' =&gt; [
        \'visitorInfo\' =&gt; [
            // Provider requires the "Provider" Plugin to be active. (Disabled by default in Version 2.15 and above)
            //\'location_provider\' =&gt; \'unknown\'
        ]
    ],

    [
        \'visitorInfo\' =&gt; [
            //ISO-3166 alpha-2 code http://en.wikipedia.org/wiki/ISO_3166-1
            \'location_country\' =&gt; \'at\',

            //the region code (i take them from piwik/libs/MaxMindGeoIp/geoipregionvars.php
            \'location_region\' =&gt; \'08\',

            //should be freetext
            \'location_city\' =&gt; \'Muntlix\',

            //get this from a picker, e.g. http://www.tytai.com/gmap/
            \'location_latitude\' =&gt; \'47.282024\',
            \'location_longitude\' =&gt; \'9.662304\',

            //enter your company name or do it based on your domain hierarchy
            // Provider requires the "Provider" Plugin to be active. (Disabled by default in Version 2.15 and above)
            //\'location_provider\' =&gt; \'myCompany\'
        ],
        \'networks\' =&gt; [
            //enter here all subnetworks for this location
            //use a subnetwork calculator, e.g. http://jodies.de/ipcalc
            \'10.59.0.0/19\',
            \'170.56.251.200/29\'
        ]
    ],

    //add more blocks live above
];
</code></pre>',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => '/api/2.0/plugins/IntranetGeoIP/download/3.0.1',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/IntranetGeoIP/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      89 => 
      array (
        'name' => 'LdapVisitorInfo',
        'displayName' => 'Ldap Visitor Info',
        'owner' => 'ThaDafinser',
        'description' => 'Matomo (Piwik) plugin to get visitor details (thumbnail, description) from LDAP',
        'homepage' => 'https://github.com/ThaDafinser/Piwik-LdapVisitorInfo',
        'createdDateTime' => '2014-08-06 07:50:42',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'ldap',
          1 => 'Intranet',
          2 => 'ThaDafinser',
          3 => 'Visitor',
          4 => 'thumbnail',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Martin Keckeis',
            'email' => NULL,
            'homepage' => 'https://github.com/thadafinser',
          ),
        ),
        'repositoryUrl' => 'https://github.com/ThaDafinser/Piwik-LdapVisitorInfo',
        'lastUpdated' => '2017-03-14 09:50:03',
        'latestVersion' => '3.0.1',
        'numDownloads' => 10992,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/LdapVisitorInfo/images/3.0.1/visitorInfo.jpg',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '21',
          'numContributors' => '1',
          'lastCommitDate' => '2017-03-14 09:49:51',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2017-03-08 12:00:04',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
              'php' => '>=7.0.0,<8.0.0',
            ),
            'numDownloads' => 50,
            'license' => 
            array (
              'name' => 'GPL v3',
              'url' => 'https://plugins.matomo.org/LdapVisitorInfo/3.0.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/ThaDafinser/Piwik-LdapVisitorInfo/commits/v3.0.0',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/LdapVisitorInfo/download/3.0.0',
          ),
          1 => 
          array (
            'name' => '3.0.1',
            'release' => '2017-03-14 09:50:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
              'php' => '>=7.0.0,<8.0.0',
            ),
            'numDownloads' => 4635,
            'license' => 
            array (
              'name' => 'GPL v3',
              'url' => 'https://plugins.matomo.org/LdapVisitorInfo/3.0.1/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/ThaDafinser/Piwik-LdapVisitorInfo/commits/v3.0.1',
            'readmeHtml' => 
            array (
              'description' => '

<p>Configurable piwik plugin to view a visitor thumbnail and description live from LDAP.</p>

<p><strong><em>This plugin requires https://github.com/ThaDafinser/LdapConnection to work!</em></strong></p>

',
              'faq' => '<p><strong>Why is PIWIK 2.5 required?</strong></p>

<p>Because the configuration (to be explicit accountFilterFormat) is destroyed in the previous version
See the ticket here: https://github.com/piwik/piwik/issues/5890</p>

<p><strong>What does this plugin do?</strong></p>

<p>It displays live a thumbnail and a description in the visitor detail page from LDAP</p>

<p><strong>How to tell Matomo (Piwik) which user is currently using your website?</strong></p>

<p>You need so track a custom user (username, mail, ...) visitor variable, so this plugin know which user shall be fetched from LDAP.
Please see the official documentation: http://piwik.org/docs/custom-variables/ or http://developer.piwik.org/api-reference/tracking-javascript#custom-variables</p>

<p>Example:
<code>_paq.push(["setCustomVariable", 1, "username", "&lt;?php echo $usenamer; ?&gt;", "visit"]);</code></p>

<p><strong>NEW: Use the userId from Matomo itself</strong></p>

<p>Now you can use the piwik UserId: http://piwik.org/docs/user-id/
Just change the plugin settings to use the piwik UserId instead of a custom variable!</p>',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => '/api/2.0/plugins/LdapVisitorInfo/download/3.0.1',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/LdapVisitorInfo/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      90 => 
      array (
        'name' => 'Ip2Hostname',
        'displayName' => 'IP 2 Hostname',
        'owner' => 'ThaDafinser',
        'description' => 'Matomo (Piwik) plugin to get the hostname from the visitor IP',
        'homepage' => 'https://github.com/ThaDafinser/Piwik-Ip2Hostname',
        'createdDateTime' => '2015-01-28 11:44:03',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'ip2hostname',
          1 => 'plugin',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Martin Keckeis',
            'email' => NULL,
            'homepage' => 'https://github.com/thadafinser',
          ),
        ),
        'repositoryUrl' => 'https://github.com/ThaDafinser/Piwik-Ip2Hostname',
        'lastUpdated' => '2017-03-08 12:00:11',
        'latestVersion' => '3.0.0',
        'numDownloads' => 13211,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '22',
          'numContributors' => '2',
          'lastCommitDate' => '2017-03-08 11:59:55',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2017-03-08 12:00:11',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
              'php' => '>=7.0.0,<8.0.0',
            ),
            'numDownloads' => 6384,
            'license' => 
            array (
              'name' => 'GPL v3',
              'url' => 'https://plugins.matomo.org/Ip2Hostname/3.0.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/ThaDafinser/Piwik-Ip2Hostname/commits/v3.0.0',
            'readmeHtml' => 
            array (
              'description' => '

<p>This plugin (try) to get the hostname of the visitor and write it into the <code>log_visitor</code> table.</p>

<p>There are currently <strong><em>no reports or any views available</em></strong>, to see a result. <strong><em>You need to directly query the table!</em></strong>
I currently dont have the time and need of such a view, and therefor maybe you\'ll never see one...if nobody else create oen :-)</p>

<p>NOTE:
<strong><em>I use it currently only in an intranet enviroment</em></strong> to detect computers which have old enviroment, because the IP might change i log the hostname.</p>

<p>I never tried it and probably wont use it for internet...</p>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => '/api/2.0/plugins/Ip2Hostname/download/3.0.0',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/Ip2Hostname/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      91 => 
      array (
        'name' => 'LdapConnection',
        'displayName' => 'Ldap Connection',
        'owner' => 'ThaDafinser',
        'description' => 'Plugin to make a LDAP connection, which can be used by various LDAP plugins',
        'homepage' => 'https://github.com/ThaDafinser/Piwik-LdapConnection',
        'createdDateTime' => '2014-08-06 07:50:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'ldap',
          1 => 'ThaDafinser',
          2 => 'connection',
          3 => 'ActiveDirectory',
          4 => 'AD',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Martin Keckeis',
            'email' => NULL,
            'homepage' => 'https://github.com/thadafinser',
          ),
        ),
        'repositoryUrl' => 'https://github.com/ThaDafinser/Piwik-LdapConnection',
        'lastUpdated' => '2017-03-08 12:00:08',
        'latestVersion' => '3.0.0',
        'numDownloads' => 9901,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '14',
          'numContributors' => '1',
          'lastCommitDate' => '2017-03-08 11:59:25',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2017-03-08 12:00:08',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
              'php' => '>=7.0.0,<8.0.0',
            ),
            'numDownloads' => 3870,
            'license' => 
            array (
              'name' => 'GPL v3',
              'url' => 'https://plugins.matomo.org/LdapConnection/3.0.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/ThaDafinser/Piwik-LdapConnection/commits/v3.0.0',
            'readmeHtml' => 
            array (
              'description' => '

<p>Configurable piwik plugin to create an LDAP connection, which can be reused by other plugins.
Is uses the ZF2 Ldap component: http://framework.zend.com/manual/2.3/en/index.html#zend-ldap</p>

<p>Currently used by https://github.com/ThaDafinser/LdapVisitorInfo</p>

',
              'faq' => '<p><strong>Why is PIWIK 2.5 required?</strong></p>

<p>Because the configuration (to be explicit accountFilterFormat) is destroyed in the previous version
See the ticket here: https://github.com/piwik/piwik/issues/5890</p>

<p><strong>What does this plugin do?</strong></p>

<p>It creates based on your configuration a connection to LDAP. Not more and not less :-)</p>

<p><strong>How can i use this LDAP connection in another plugin?</strong></p>

<p>This is an example to retrieve the connection.
For documentation please see http://framework.zend.com/manual/2.3/en/index.html#zend-ldap</p>

<pre><code>namespace Matomo (Piwik)\\Plugins\\YourPlugin;

use Matomo\\Plugin;
use Matomo\\Plugins\\LdapConnection\\API as APILdapConnection;
use Zend\\Ldap\\Ldap;

class YourPlugin extends Plugin
{
    private function doSomething()
    {
        /* @var $ldap \\Zend\\Ldap\\Ldap */
        $ldap = APILdapConnection::getInstance()-&gt;getConnection();
        $ldap-&gt;connect();

        $filter = sprintf(\'(&amp;(objectclass=user)(samAccountName=%s))\', $visitorUsername);
        $collection = $ldap-&gt;search($filter, null, Ldap::SEARCH_SCOPE_SUB, [\'displayname\']);

        if ($collection-&gt;count() &gt;= 1) {
            $result = $collection-&gt;getFirst();
            //do something with the result...
        }
    }
}
</code></pre>',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => '/api/2.0/plugins/LdapConnection/download/3.0.0',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/LdapConnection/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      92 => 
      array (
        'name' => 'SiteUrlTrackingID',
        'displayName' => 'Site Url Tracking ID',
        'owner' => 'KaanErturk',
        'description' => 'Enables to use any of the site URLs of a website as the tracking ID in addition to the numeric site ID.',
        'homepage' => 'https://github.com/KaanErturk/piwik-SiteUrlTrackingID',
        'createdDateTime' => '2016-12-21 20:20:03',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'kaanerturk@gmail.com',
            'type' => 'email',
          ),
          1 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/KaanErturk/piwik-SiteUrlTrackingID/issues',
            'type' => 'url',
          ),
          2 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/KaanErturk/piwik-SiteUrlTrackingID',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'tracking',
          1 => 'domain',
          2 => 'domain name',
          3 => 'site url',
          4 => 'site id',
          5 => 'tracking id',
          6 => 'idsite',
          7 => 'main_url',
          8 => 'site_url',
          9 => 'url',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Kaan Erturk',
            'email' => 'kaanerturk@gmail.com',
            'homepage' => 'https://kaanerturk.net',
          ),
        ),
        'repositoryUrl' => 'https://github.com/KaanErturk/piwik-SiteUrlTrackingID',
        'lastUpdated' => '2017-02-02 23:10:03',
        'latestVersion' => '1.0.3',
        'numDownloads' => 6235,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '5',
          'numContributors' => '1',
          'lastCommitDate' => '2019-02-05 21:57:04',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '1.0.2',
            'release' => '2016-12-21 20:20:03',
            'requires' => 
            array (
              'piwik' => '>=2.15.0,<4.0.0-b1',
              'php' => '>=5.4.0',
            ),
            'numDownloads' => 455,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/SiteUrlTrackingID/1.0.2/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/KaanErturk/piwik-SiteUrlTrackingID/commits/1.0.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/SiteUrlTrackingID/download/1.0.2',
          ),
          1 => 
          array (
            'name' => '1.0.3',
            'release' => '2017-02-02 23:10:03',
            'requires' => 
            array (
              'piwik' => '>=2.15.0,<4.0.0-b1',
              'php' => '>=5.4.0',
            ),
            'numDownloads' => 5780,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/SiteUrlTrackingID/1.0.3/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/KaanErturk/piwik-SiteUrlTrackingID/commits/1.0.3',
            'readmeHtml' => 
            array (
              'description' => '

<p>If you have many websites that serve the very same web page with a single tracking code, and you just want to use the site URL automatically, then this plugin is for you.</p>

<p>Once the plugin is activated Matomo (Piwik) will start to accept site URL via <code>idsite</code> parameter as part of the tracking requests. You may still use the numeric site ID since that functionality will continue to work. New tracking code generated on Matomo will include the main site URL instead of the numeric site ID. You may as well use one of the other URLs of a website as the tracking ID.</p>

<p>This plugin is for a very simple use case. I\'m not planning to add any more functionality. However please do feel free to contact me if there are any issues.</p>

<p><strong>Note: There may be issues if multiple tracking ID plugins (ones that modify the site ID in the tracking code) are enabled. Only one of those plugins should be activated.</strong></p>

',
              'faq' => '<p><strong>Are there any settings?</strong></p>

<p>No. Once the plugin is activated, it starts to do its job.</p>

<p><strong>Is it going to break my existing tracking codes?</strong></p>

<p>No. Matomo (Piwik) will continue to work as normal with the numeric site IDs in the tracking requests.</p>

<p><strong>I have a website with two additional URLs, can I use those as well?</strong></p>

<p>Yes. Matomo will generate the tracking code with only the main URL. However you may modify the tracking code to use any of the site URLs of a website.</p>

<p><strong>Can I use variations of a site URL in the tracking code?</strong></p>

<p>You may use any of the site URLs of a website, as long as they are defined in the website configuration. If there are additional variations, please add them to your configuration first before modifying the tracking code.</p>',
              'documentation' => '',
              'changelog' => '<ul><li>1.0.3 Fixed a bug where table prefix, when defined, was being ignored</li>
<li>1.0.2 Plugin name change &amp; re-publish on marketplace</li>
<li>1.0.1 Updates to plugin description</li>
<li>1.0.0 Initial release</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/SiteUrlTrackingID/download/1.0.3',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/SiteUrlTrackingID/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      93 => 
      array (
        'name' => 'JsTrackerForceAsync',
        'displayName' => 'Js Tracker Force Async',
        'owner' => 'innocraft',
        'description' => 'Forces the JavaScript Tracker to always load asynchronous when embedding the Tracking Code via HTTP API automatically in your website.',
        'homepage' => 'https://www.innocraft.com',
        'createdDateTime' => '2017-01-23 05:00:03',
        'donate' => 
        array (
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/innocraft/plugin-JsTrackerForceAsync/issues',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/innocraft/plugin-JsTrackerForceAsync',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'tracker',
          1 => 'javascript',
          2 => 'async',
          3 => 'a/b testing',
          4 => 'experiment',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'InnoCraft',
            'email' => 'contact@innocraft.com',
            'homepage' => 'https://www.innocraft.com',
          ),
        ),
        'repositoryUrl' => 'https://github.com/innocraft/plugin-JsTrackerForceAsync',
        'lastUpdated' => '2017-01-23 05:00:03',
        'latestVersion' => '3.0.0',
        'numDownloads' => 5799,
        'screenshots' => 
        array (
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '4',
          'numContributors' => '1',
          'lastCommitDate' => '2018-01-10 20:15:16',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2017-01-23 05:00:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
            ),
            'numDownloads' => 5799,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/innocraft/plugin-JsTrackerForceAsync/commits/3.0.0',
            'readmeHtml' => 
            array (
              'description' => '

<p>This plugin is especially useful in combination with our <a href="https://plugins.piwik.org/AbTesting">A/B Testing</a> feature
if you embed the tracking code directly in your website using the <code>SitesManager.getJavascriptTag</code> <a href="https://developer.piwik.org/api-reference/reporting-api">HTTP API</a> method.</p>

<p>When you use A/B Testing and have at least one active experiment for your website, the JavaScript code will load 
synchronously to prevent the content to flickr. If you still want to load the Matomo (Piwik) JavaScript Tracking code async,
you can install this plugin and it will make sure to always generate the async code.</p>

<h3>About InnoCraft</h3>

<p>We at <a href="https://www.innocraft.com">InnoCraft</a> are the creators of Matomo and know it better than anyone else. This means all plugins are perfectly integrated into Matomo and come with outstanding features and quality to grow your business. We help our clients get started, configure, monitor and make the most of their Matomo analytics service. We also offer unique analytics products and services that help grow your business and meet the needs of small, medium and large businesses alike.</p>',
              'faq' => '',
              'documentation' => '',
              'changelog' => '',
            ),
            'download' => '/api/2.0/plugins/JsTrackerForceAsync/download/3.0.0',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/JsTrackerForceAsync/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      94 => 
      array (
        'name' => 'DisableTracking',
        'displayName' => 'Disable Tracking',
        'owner' => 'lippoliv',
        'description' => 'Provides the ability to disable tracking for piwik sites. So you dont grow in data but keep old data for later reporting.',
        'homepage' => 'https://lw-scm.de/lipperts-web/piwik-plugin-disabletracking',
        'createdDateTime' => '2016-12-23 11:04:03',
        'donate' => 
        array (
          'paypal' => 'info@lipperts-web.de',
          'bitcoin' => NULL,
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'support@lipperts-web.de',
            'type' => 'email',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'tracking',
          1 => 'disable',
          2 => 'site',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Lipperts WEB',
            'email' => 'info@lipperts-web.de',
            'homepage' => 'http://lipperts-web.de',
          ),
        ),
        'repositoryUrl' => 'https://github.com/lippoliv/piwik-plugin-disabletracking',
        'lastUpdated' => '2016-12-23 11:34:03',
        'latestVersion' => '1.0.3',
        'numDownloads' => 5369,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/DisableTracking/images/1.0.3/Admin_View.jpg',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => NULL,
          'numContributors' => NULL,
          'lastCommitDate' => '2019-04-17 14:00:10',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '0.0.0',
            'release' => '2016-12-23 11:04:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-stable,<4.0.0',
              'php' => '>=5.5.0',
            ),
            'numDownloads' => 0,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/lippoliv/piwik-plugin-disabletracking/commits/1.0.1',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/DisableTracking/download/0.0.0',
          ),
          1 => 
          array (
            'name' => '1.0.2',
            'release' => '2016-12-23 11:16:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-stable,<4.0.0',
              'php' => '>=5.5.0',
            ),
            'numDownloads' => 5,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/lippoliv/piwik-plugin-disabletracking/commits/1.0.2',
            'readmeHtml' => 
            array (
              'description' => '',
              'faq' => '',
              'changelog' => '',
              'documentation' => '',
            ),
            'download' => '/api/2.0/plugins/DisableTracking/download/1.0.2',
          ),
          2 => 
          array (
            'name' => '1.0.3',
            'release' => '2016-12-23 11:34:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-stable,<4.0.0',
              'php' => '>=5.5.0',
            ),
            'numDownloads' => 5364,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/lippoliv/piwik-plugin-disabletracking/commits/1.0.3',
            'readmeHtml' => 
            array (
              'description' => '

<p>Disable Tracking for specific sites wihtout removing Tracking-Code.</p>

<p>In some cases it is pretty handy to disable tracking for selected Websites
of your Matomo (Piwik) instance, even for a short timespan as also forever. Working this way
you can keep the collected data and do later reports.</p>

<p>The Plugin is for free, feel free to send spend me a coffe and/or send me feedback.</p>',
              'faq' => '<p><strong>Will the Plugin initially disable all site tracking?</strong></p>

<p>No.</p>',
              'documentation' => '<h2>Documentation</h2>',
              'changelog' => '<ul><li>1.0.3 BUGFIX: Checking for ADMIN Permission</li>
<li>1.0.2 Version number set</li>
<li>1.0.1 Prepare for Marketplace</li>
<li>1.0.0 Initial release</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/DisableTracking/download/1.0.3',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/DisableTracking/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      95 => 
      array (
        'name' => 'RestrictLanguageSelection',
        'displayName' => 'Restrict Language Selection',
        'owner' => 'sgiehl',
        'description' => 'Allows you to modify the list of available languages in language selector.',
        'homepage' => 'http://github.com/sgiehl/piwik-plugin-RestrictLanguageSelection',
        'createdDateTime' => '2016-11-01 21:24:03',
        'donate' => 
        array (
          'paypal' => 'stefangiehl@web.de',
          'flattr' => 'https://flattr.com/thing/3787742/sgiehlpiwik-plugin-RestrictLanguageSelection-on-GitHub',
          'bitcoin' => NULL,
        ),
        'support' => 
        array (
          0 => 
          array (
            'name' => 'Wiki',
            'key' => 'wiki',
            'value' => 'https://github.com/sgiehl/piwik-plugin-RestrictLanguageSelection/issues',
            'type' => 'url',
          ),
          1 => 
          array (
            'name' => 'Email',
            'key' => 'email',
            'value' => 'stefan@piwik.org',
            'type' => 'email',
          ),
          2 => 
          array (
            'name' => 'Issues / Bugs',
            'key' => 'issues',
            'value' => 'https://github.com/sgiehl/piwik-plugin-RestrictLanguageSelection/issues',
            'type' => 'url',
          ),
          3 => 
          array (
            'name' => 'Source',
            'key' => 'source',
            'value' => 'https://github.com/sgiehl/piwik-plugin-RestrictLanguageSelection/issues',
            'type' => 'url',
          ),
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'language',
          1 => 'i18n',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Stefan Giehl',
            'email' => 'stefan@piwik.org',
            'homepage' => 'http://github.com/sgiehl',
          ),
        ),
        'repositoryUrl' => 'https://github.com/sgiehl/piwik-plugin-RestrictLanguageSelection',
        'lastUpdated' => '2016-11-01 21:56:03',
        'latestVersion' => '3.0.0',
        'numDownloads' => 5635,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/RestrictLanguageSelection/images/3.0.0/language_restriction.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '4',
          'numContributors' => '1',
          'lastCommitDate' => '2016-12-09 08:23:38',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2016-11-01 21:24:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
              'php' => '>=5.3.0',
            ),
            'numDownloads' => 1328,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => 'https://plugins.matomo.org/RestrictLanguageSelection/3.0.0/license',
            ),
            'repositoryChangelogUrl' => 'https://github.com/sgiehl/piwik-plugin-RestrictLanguageSelection/commits/3.0.0',
            'readmeHtml' => 
            array (
              'description' => '

<p>This plugin allows you to restrict the languages available in language selectors.</p>

<h3>Requirements</h3>

<p><a href="https://github.com/piwik/piwik">Piwik</a> 3.0.0-b1 or higher is required.</p>

',
              'faq' => '',
              'documentation' => '',
              'changelog' => '<p><strong>3.0</strong></p>

<ul><li>Initial version for Piwik 3</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/RestrictLanguageSelection/download/3.0.0',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/RestrictLanguageSelection/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      96 => 
      array (
        'name' => 'ProtectTrackID',
        'displayName' => 'Protect Track ID',
        'owner' => 'joubertredrat',
        'description' => 'Provides a option to protect idSite using hash instead default numeric',
        'homepage' => 'https://github.com/joubertredrat/Piwik-ProtectTrackID',
        'createdDateTime' => '2016-06-30 14:56:04',
        'donate' => 
        array (
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'hashid',
          1 => 'protectid',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Joubert RedRat',
            'email' => 'me+piwik@redrat.com.br',
            'homepage' => NULL,
          ),
        ),
        'repositoryUrl' => 'https://github.com/joubertredrat/Piwik-ProtectTrackID',
        'lastUpdated' => '2016-10-28 16:18:05',
        'latestVersion' => '1.0.0',
        'numDownloads' => 6835,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/ProtectTrackID/images/1.0.0/01_settings.png',
          1 => 'https://plugins.matomo.org/ProtectTrackID/images/1.0.0/02_javascript-tracking-code.png',
          2 => 'https://plugins.matomo.org/ProtectTrackID/images/1.0.0/03_image-tracking-code.png',
          3 => 'https://plugins.matomo.org/ProtectTrackID/images/1.0.0/04_api-request.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '37',
          'numContributors' => '1',
          'lastCommitDate' => '2016-12-01 17:41:25',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '1.0.0',
            'release' => '2016-10-28 16:18:05',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
              'php' => '>=5.4.0',
            ),
            'numDownloads' => 5478,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/joubertredrat/Piwik-ProtectTrackID/commits/1.0.0',
            'readmeHtml' => 
            array (
              'description' => '

<p>Provides a option to protect idSite using hash instead default numeric</p>

',
              'faq' => '<p><strong>Why isn\'t good to change configuration more times?</strong></p>

<p>Because if you change configurations (<code>base string</code>, <code>salt</code> and <code>length</code>), hashed string will change too, then old hashes will not work. ONLY change salt if you will change all JavaScript Tracking Code or Image Tracking Link after change configuration. Then is <strong>HIGHT RECOMMENDED to set configurations ONLY ONE TIME</strong>.</p>

<p><strong>How to I config plugin?</strong></p>

<p>On Administration &gt; Plugin Settings. For plugin work, is required all configurations defined, if only one or two defined, plugin will not work.</p>

<p>Plugin need 3 configurations, <code>base string</code>, <code>salt</code> and <code>length</code>.</p>

<p><code>base string</code> is string used to generate hash. Example, if you set <code>ABCDEFGHIJKLMNOPQRSTUVXWYZ</code>, plugin will use only this characters for build hash.</p>

<p><code>salt</code> is a radom string key for generate hash with <code>base string</code> and <code>length</code> configurations.</p>

<p><code>length</code> is a hash string size. If you set <code>10</code> as example, plugin will generete hash with 10 characters defined on <code>base string</code>.</p>

<p><strong>Why JavaScript Tracking Code and Image Tracking Link is blank?</strong></p>

<p>This plugin will hash siteId by configurations, but if you define small <code>base string</code>, <code>salt</code> or <code>length</code>, plugin wont haven\'t combinations enough for create hash string. Then you need incresease <code>base string</code>, <code>salt</code> and/or <code>length</code>.</p>',
              'documentation' => '',
              'changelog' => '<ul><li>Version 1.0.0 - New major version for new Piwik Major version, 3.0.0</li>
<li>Version 0.2.2 - Restrict Plugin only for Piwik 2.X.X</li>
<li>Version 0.2.0 - Production version, Portuguese Brazilian language added.</li>
<li>Version 0.1.0 - Beta version with base string on config.</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/ProtectTrackID/download/1.0.0',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/ProtectTrackID/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
      97 => 
      array (
        'name' => 'ExcludeByDDNS',
        'displayName' => 'Exclude By DDNS',
        'owner' => 'sgiehl',
        'description' => 'This plugin allows you to dynamically exclude a IP using DDNS update',
        'homepage' => 'http://github.com/sgiehl/piwik-plugin-ExcludeByDDNS',
        'createdDateTime' => '2015-02-08 22:10:03',
        'donate' => 
        array (
          'paypal' => 'stefangiehl@web.de',
          'flattr' => 'https://flattr.com/thing/2578144/sgiehl',
          'bitcoin' => NULL,
        ),
        'support' => 
        array (
        ),
        'isTheme' => false,
        'keywords' => 
        array (
          0 => 'ddns',
          1 => 'ipexclude',
        ),
        'basePrice' => 0,
        'authors' => 
        array (
          0 => 
          array (
            'name' => 'Stefan Giehl',
            'email' => 'stefan@piwik.org',
            'homepage' => 'http://github.com/sgiehl',
          ),
        ),
        'repositoryUrl' => 'https://github.com/sgiehl/piwik-plugin-ExcludeByDDNS',
        'lastUpdated' => '2016-09-17 16:46:03',
        'latestVersion' => '3.0.0',
        'numDownloads' => 9164,
        'screenshots' => 
        array (
          0 => 'https://plugins.matomo.org/ExcludeByDDNS/images/3.0.0/settings.png',
          1 => 'https://plugins.matomo.org/ExcludeByDDNS/images/3.0.0/superuser_status.png',
        ),
        'previews' => 
        array (
        ),
        'activity' => 
        array (
          'numCommits' => '55',
          'numContributors' => '1',
          'lastCommitDate' => '2018-11-25 15:59:27',
        ),
        'featured' => false,
        'isFree' => true,
        'isPaid' => false,
        'isBundle' => false,
        'isCustomPlugin' => false,
        'shop' => NULL,
        'bundle' => 
        array (
          'plugins' => 
          array (
          ),
        ),
        'specialOffer' => '',
        'versions' => 
        array (
          0 => 
          array (
            'name' => '3.0.0',
            'release' => '2016-09-17 16:46:03',
            'requires' => 
            array (
              'piwik' => '>=3.0.0-b1,<4.0.0-b1',
              'php' => '>=5.5.0',
            ),
            'numDownloads' => 5101,
            'license' => 
            array (
              'name' => 'GPL v3+',
              'url' => '',
            ),
            'repositoryChangelogUrl' => 'https://github.com/sgiehl/piwik-plugin-ExcludeByDDNS/commits/3.0.0',
            'readmeHtml' => 
            array (
              'description' => '

<p>This plugin allows the Matomo (Piwik) users to dynamically exclude their IP address using DDNS update.</p>

<h3>Requirements</h3>

<p><a href="https://github.com/piwik/piwik">Piwik</a> 3.0.0 or higher is required.</p>

<h3>Features</h3>

<ul><li>Exclude one IP for each Matomo user </li>
<li>Exclude and IP using an already updated hostname</li>
</ul>',
              'faq' => '<p><strong>Which update method should i use, <em>DDNS Update</em> or <em>DDNS Hostname</em>?</strong></p>

<p>If available, <strong><em>DDNS Update</em></strong> is recommended. This method is a bit more complicated to set up, but it leads to immediately updated IP\'s, as the client will trigger the update whenever a new IP is assigned.
But it may not be viable for all users, eg. 
* Not all DDNS clients allow custom update-URL\'s.
* The client may be already serving another Server and have no ability to talk to multiple Servers at the same time.</p>

<p>So, the <strong><em>DDNS Hostname</em></strong> can be an alternative. Use a DDNS Service that is compatible with your client and enter the hostname from there to have the plugin resolve your dynamic IP. The downside: Updating happens via a sheduled task every hour, so there might be small windows with the new IP still being tracked, but not the old one.</p>

<p><strong>What data do I need to set for DDNS Update</strong></p>

<p>You need to set a custom URL to be triggered for an update.
Your personal update-URL is shown in your piwik installation (user-menu &gt; Personal &gt; DDNS Settings).</p>

<p>The URL has the following scheme:</p>

<pre><code>http{s}://{piwik.url}/index.php?module=ExcludeByDDNS&amp;action=update&amp;token_auth={token_auth}
</code></pre>

<ul><li>{s} Use HTTPS if available.</li>
<li>{piwik.url}: The URL to your piwik installation.</li>
<li>{token_auth}: Your API auth token (user-menu &gt; Platform &gt; API).</li>
</ul><p>There is no need to set user, password or domain name.</p>',
              'documentation' => '',
              'changelog' => '<ul><li>Version 3.0.0 - Compatibility for Piwik &gt; 3.0.0</li>
<li>Version 0.4.0 - Compatibility for Piwik &gt; 2.4.0</li>
<li>Version 0.3.0 - Various improvements and translations</li>
<li>Version 0.2.0 - Beta Release</li>
<li>Version 0.1.0 - Alpha Release</li>
</ul>',
            ),
            'download' => '/api/2.0/plugins/ExcludeByDDNS/download/3.0.0',
          ),
        ),
        'isDownloadable' => true,
        'changelog' => 
        array (
          'url' => 'https://plugins.matomo.org/ExcludeByDDNS/changelog?matomoversion=3',
        ),
        'consumer' => 
        array (
          'license' => NULL,
        ),
      ),
    ),
  ),
);