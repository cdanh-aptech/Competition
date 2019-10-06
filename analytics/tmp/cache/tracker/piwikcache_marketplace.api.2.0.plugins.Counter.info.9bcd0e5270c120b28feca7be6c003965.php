<?php return array (
  'lifetime' => 1569700197,
  'data' => 
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
    'numDownloads' => 20634,
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
        'numDownloads' => 5910,
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
        'numDownloads' => 528,
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
);