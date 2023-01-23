<?php // $file = F:/laragon/www/edouard/templates/yootheme/vendor/yootheme/theme-joomla/config/customizer.json

return [
  'id' => $config->get('theme.id'), 
  'title' => $config->get('theme.title'), 
  'cookie' => $config->get('theme.cookie'), 
  'default' => $config->get('theme.default'), 
  'template' => $config->get('theme.template'), 
  'admin' => $config->get('app.isAdmin'), 
  'root' => $config->get('req.baseUrl'), 
  'site' => sprintf('%s/index.php', $config->get('req.rootUrl')), 
  'token' => $config->get('session.token'), 
  'user_id' => $config->get('user.id'), 
  'config' => [
    'yootheme_apikey' => $config->get('app.apikey')
  ], 
  'sections' => [
    'layout' => [
      'help' => [[
          'title' => 'Using the Sidebar', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=xhirjJm3SJo&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '0:50', 
          'documentation' => 'support/yootheme-pro/joomla/customizer#save,-cancel-and-close', 
          'support' => 'support/search?tags=125&q=customizer%20save'
        ], [
          'title' => 'Using the Contextual Help', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=5JwikV4qaow&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '0:39', 
          'documentation' => 'support/yootheme-pro/joomla/customizer#contextual-help', 
          'support' => 'support/search?tags=125&q=contextual%20help'
        ], [
          'title' => 'Using the Device Preview Buttons', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=_y12mOqUc-E&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '0:39', 
          'documentation' => 'support/yootheme-pro/joomla/customizer#device-preview-buttons', 
          'support' => 'support/search?tags=125&q=customizer%20device%20preview'
        ], [
          'title' => 'Hide and Adjust the Sidebar', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=9vC2NP-7TqE&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '0:36', 
          'documentation' => 'support/yootheme-pro/joomla/customizer#hide-and-adjust-sidebar', 
          'support' => 'support/search?tags=125&q=customizer%20hide%20sidebar'
        ]]
    ], 
    'builder-templates' => [
      'help' => [
        'Templates' => [[
            'title' => 'Managing Templates', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=tNpo1YYWWas&list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:46', 
            'documentation' => 'support/yootheme-pro/joomla/templates', 
            'support' => 'support/search?tags=125&q=templates'
          ], [
            'title' => 'Assigning Templates to Pages', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=VMNaA2JE-i8&list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '4:13', 
            'documentation' => 'support/yootheme-pro/joomla/templates#page-assignment', 
            'support' => 'support/search?tags=125&q=template%20page'
          ], [
            'title' => 'Setting the Template Loading Priority', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=03aUKEABQNQ&list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:41', 
            'documentation' => 'support/yootheme-pro/joomla/templates#loading-priority', 
            'support' => 'support/search?tags=125&q=template%20priority'
          ], [
            'title' => 'Setting the Template Status', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=VxuDCh-NE_U&list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:02', 
            'documentation' => 'support/yootheme-pro/joomla/templates#status', 
            'support' => 'support/search?tags=125&q=template%20status'
          ]]
      ]
    ], 
    'settings' => [
      'help' => [[
          'title' => 'Using the Sidebar', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=xhirjJm3SJo&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '0:50', 
          'documentation' => 'support/yootheme-pro/joomla/customizer#save,-cancel-and-close', 
          'support' => 'support/search?tags=125&q=customizer%20save'
        ], [
          'title' => 'Using the Contextual Help', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=5JwikV4qaow&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '0:39', 
          'documentation' => 'support/yootheme-pro/joomla/customizer#contextual-help', 
          'support' => 'support/search?tags=125&q=contextual%20help'
        ], [
          'title' => 'Using the Device Preview Buttons', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=_y12mOqUc-E&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '0:39', 
          'documentation' => 'support/yootheme-pro/joomla/customizer#device-preview-buttons', 
          'support' => 'support/search?tags=125&q=customizer%20device%20preview'
        ], [
          'title' => 'Hide and Adjust the Sidebar', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=9vC2NP-7TqE&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '0:36', 
          'documentation' => 'support/yootheme-pro/joomla/customizer#hide-and-adjust-sidebar', 
          'support' => 'support/search?tags=125&q=customizer%20hide%20sidebar'
        ]]
    ]
  ], 
  'panels' => [
    'site' => [
      'help' => [
        'Site' => [[
            'title' => 'Adding the Logo', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=DX6IimH2_Z0&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:32', 
            'documentation' => 'support/yootheme-pro/joomla/site-and-logo#logo', 
            'support' => 'support/search?tags=125&q=logo'
          ], [
            'title' => 'Setting the Page Layout', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=XQOn28sUy3A&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '0:52', 
            'documentation' => 'support/yootheme-pro/joomla/site-and-logo#layout', 
            'support' => 'support/search?tags=125&q=site%20layout'
          ], [
            'title' => 'Using the Toolbar', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=E8vWOWbxB-I&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '0:40', 
            'documentation' => 'support/yootheme-pro/joomla/site-and-logo#toolbar', 
            'support' => 'support/search?tags=125&q=toolbar'
          ], [
            'title' => 'Displaying the Breadcrumbs', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=8ExEAIneVqg&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:06', 
            'documentation' => 'support/yootheme-pro/joomla/site-and-logo#breadcrumbs', 
            'support' => 'support/search?tags=125&q=breadcrumbs'
          ]], 
        'Image Field' => [[
            'title' => 'Using Images', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=QGYQuCZtZi0&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:12', 
            'documentation' => 'support/yootheme-pro/joomla/files-and-images#images', 
            'support' => 'support/search?tags=125&q=image%20field'
          ], [
            'title' => 'Using the Media Manager', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=2Sgp4BBMTc8&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:32', 
            'documentation' => 'support/yootheme-pro/joomla/files-and-images#media-manager', 
            'support' => 'support/search?tags=125&q=media%20manager'
          ], [
            'title' => 'Using the Unsplash Library', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=6piYezAI4dU&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:50', 
            'documentation' => 'support/yootheme-pro/joomla/files-and-images#unsplash-library', 
            'support' => 'support/search?tags=125&q=unsplash'
          ]]
      ]
    ], 
    'header' => [
      'help' => [[
          'title' => 'Setting the Header Layout', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=aaNPXqxZdGk&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '4:17', 
          'documentation' => 'support/yootheme-pro/joomla/header-and-navbar#header-layout', 
          'support' => 'support/search?tags=125&q=header%20layout'
        ], [
          'title' => 'Setting the Navbar', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=TuCHE3XM73I&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '0:56', 
          'documentation' => 'support/yootheme-pro/joomla/header-and-navbar#navbar', 
          'support' => 'support/search?tags=125&q=navbar'
        ], [
          'title' => 'Adding Navbar Subtitles', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=ut1SL2UhyJ8&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '0:18', 
          'documentation' => 'support/yootheme-pro/joomla/header-and-navbar#subtitles', 
          'support' => 'support/search?tags=125&q=navbar%20subtitles'
        ], [
          'title' => 'Using the Dropdown Menu', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=AHRP3SIfgJw&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '1:43', 
          'documentation' => 'support/yootheme-pro/joomla/header-and-navbar#dropdown-layout', 
          'support' => 'support/search?tags=125&q=navbar%20dropdown%20layout'
        ], [
          'title' => 'Using the Offcanvas Menu', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=vJEBCmUpcCU&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '1:02', 
          'documentation' => 'support/yootheme-pro/joomla/header-and-navbar#offcanvas-layout', 
          'support' => 'support/search?tags=125&q=navbar%20offcanvas%20layout'
        ], [
          'title' => 'Using the Modal Menu', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=lPUWxdoruwU&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '0:26', 
          'documentation' => 'support/yootheme-pro/joomla/header-and-navbar#modal-layout', 
          'support' => 'support/search?tags=125&q=navbar%20modal%20layout'
        ], [
          'title' => 'Adding the Search', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=2dX9guAFnj8&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '0:32', 
          'documentation' => 'support/yootheme-pro/joomla/header-and-navbar#search', 
          'support' => 'support/search?tags=125&q=header%20search'
        ], [
          'title' => 'Adding the Social Icons', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=Q6SXUrNlltA&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '1:12', 
          'documentation' => 'support/yootheme-pro/joomla/header-and-navbar#social-icons', 
          'support' => 'support/search?tags=125&q=header%20social'
        ]]
    ], 
    'mobile' => [
      'help' => [[
          'title' => 'Displaying the Mobile Header', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=DDay7Cw6yAE&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '0:37', 
          'documentation' => 'support/yootheme-pro/joomla/mobile-header#breakpoint', 
          'support' => 'support/search?tags=125&q=mobile%20header%20breakpoint'
        ], [
          'title' => 'Setting the Navbar', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=JUesh19x644&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '0:41', 
          'documentation' => 'support/yootheme-pro/joomla/mobile-header#navbar', 
          'support' => 'support/search?tags=125&q=mobile%20header%20navbar'
        ], [
          'title' => 'Displaying the Logo and Menu Toggle', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=MaGkhx4-b2U&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '0:46', 
          'documentation' => 'support/yootheme-pro/joomla/mobile-header#logo-and-menu-toggle', 
          'support' => 'support/search?tags=125&q=mobile%20header%20logo'
        ], [
          'title' => 'Setting the Menu Style', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=xPp3L8ekHQw&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '0:27', 
          'documentation' => 'support/yootheme-pro/joomla/mobile-header#menu-style', 
          'support' => 'support/search?tags=125&q=mobile%20header%20menu%20style'
        ], [
          'title' => 'Using the Offcanvas Menu Animation', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=Lc86BIbjn9E&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '1:04', 
          'documentation' => 'support/yootheme-pro/joomla/mobile-header#offcanvas', 
          'support' => 'support/search?tags=125&q=mobile%20header%20offcanvas'
        ], [
          'title' => 'Using the Modal Menu Animation', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=q3-Wquo2VLs&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '0:25', 
          'documentation' => 'support/yootheme-pro/joomla/mobile-header#modal', 
          'support' => 'support/search?tags=125&q=mobile%20header%20modal'
        ], [
          'title' => 'Using the Dropdown Menu Animation', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=JqVOASAD4gk&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '0:25', 
          'documentation' => 'support/yootheme-pro/joomla/mobile-header#dropdown', 
          'support' => 'support/search?tags=125&q=mobile%20header%20dropdown'
        ]]
    ], 
    'top' => [
      'help' => [
        'Top and Bottom' => [[
            'title' => 'Setting the Top and Bottom Positions', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=aTsFHYaS9Z8&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:42', 
            'documentation' => 'support/yootheme-pro/joomla/top-bottom-and-sidebar#top-and-bottom', 
            'support' => 'support/search?tags=125&q=top%20bottom%20position%20settings'
          ]], 
        'Image Field' => [[
            'title' => 'Using Images', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=QGYQuCZtZi0&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:12', 
            'documentation' => 'support/yootheme-pro/joomla/files-and-images#images', 
            'support' => 'support/search?tags=125&q=image%20field'
          ], [
            'title' => 'Using the Media Manager', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=2Sgp4BBMTc8&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:32', 
            'documentation' => 'support/yootheme-pro/joomla/files-and-images#media-manager', 
            'support' => 'support/search?tags=125&q=media%20manager'
          ], [
            'title' => 'Using the Unsplash Library', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=6piYezAI4dU&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:50', 
            'documentation' => 'support/yootheme-pro/joomla/files-and-images#unsplash-library', 
            'support' => 'support/search?tags=125&q=unsplash'
          ]], 
        'Builder' => [[
            'title' => 'The Position Element', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=DsFY9zkG7Vk&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:55', 
            'documentation' => 'support/yootheme-pro/joomla/system-elements#position-element', 
            'support' => 'support/search?tags=125&q=position%20element'
          ], [
            'title' => 'Collapsing Layouts', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=UT6PODf7p3o&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:44', 
            'documentation' => 'support/yootheme-pro/joomla/collapsing-layouts', 
            'support' => 'support/search?tags=125&q=collapsing'
          ]]
      ]
    ], 
    'sidebar' => [
      'help' => [
        'Sidebar' => [[
            'title' => 'Setting the Sidebar Position', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=_U5BgaiM4RI&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:31', 
            'documentation' => 'support/yootheme-pro/joomla/top-bottom-and-sidebar#sidebar', 
            'support' => 'support/search?tags=125&q=sidebar%20position%20settings'
          ]], 
        'Builder' => [[
            'title' => 'The Position Element', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=DsFY9zkG7Vk&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:55', 
            'documentation' => 'support/yootheme-pro/joomla/system-elements#position-element', 
            'support' => 'support/search?tags=125&q=position%20element'
          ], [
            'title' => 'Collapsing Layouts', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=UT6PODf7p3o&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:44', 
            'documentation' => 'support/yootheme-pro/joomla/collapsing-layouts', 
            'support' => 'support/search?tags=125&q=collapsing'
          ]]
      ]
    ], 
    'bottom' => [
      'help' => [
        'Top and Bottom' => [[
            'title' => 'Setting the Top and Bottom Positions', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=aTsFHYaS9Z8&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:42', 
            'documentation' => 'support/yootheme-pro/joomla/top-bottom-and-sidebar#top-and-bottom', 
            'support' => 'support/search?tags=125&q=top%20bottom%20position%20settings'
          ]], 
        'Image Field' => [[
            'title' => 'Using Images', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=QGYQuCZtZi0&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:12', 
            'documentation' => 'support/yootheme-pro/joomla/files-and-images#images', 
            'support' => 'support/search?tags=125&q=image%20field'
          ], [
            'title' => 'Using the Media Manager', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=2Sgp4BBMTc8&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:32', 
            'documentation' => 'support/yootheme-pro/joomla/files-and-images#media-manager', 
            'support' => 'support/search?tags=125&q=media%20manager'
          ], [
            'title' => 'Using the Unsplash Library', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=6piYezAI4dU&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:50', 
            'documentation' => 'support/yootheme-pro/joomla/files-and-images#unsplash-library', 
            'support' => 'support/search?tags=125&q=unsplash'
          ]], 
        'Builder' => [[
            'title' => 'The Position Element', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=DsFY9zkG7Vk&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:55', 
            'documentation' => 'support/yootheme-pro/joomla/system-elements#position-element', 
            'support' => 'support/search?tags=125&q=position%20element'
          ], [
            'title' => 'Collapsing Layouts', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=UT6PODf7p3o&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:44', 
            'documentation' => 'support/yootheme-pro/joomla/collapsing-layouts', 
            'support' => 'support/search?tags=125&q=collapsing'
          ]]
      ]
    ], 
    'footer-builder' => [
      'help' => [
        'Footer Builder' => [[
            'title' => 'Using the Footer Builder', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=vcfQUk7uDlQ&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '0:59', 
            'documentation' => 'support/yootheme-pro/joomla/footer-builder', 
            'support' => 'support/search?tags=125&q=footer%20builder'
          ]], 
        'Builder Module' => [[
            'title' => 'Using the Builder Module', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=CbRtIuzkgP8&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:49', 
            'documentation' => 'support/yootheme-pro/joomla/widgets-and-modules#builder-module', 
            'support' => 'support/search?tags=125&q=builder%20module'
          ], [
            'title' => 'Creating Advanced Module Layouts', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=s199sw_mjEQ&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '4:20', 
            'documentation' => 'support/yootheme-pro/joomla/widgets-and-modules#advanced-layouts', 
            'support' => 'support/search?tags=125&q=builder%20module'
          ]]
      ]
    ], 
    'api-key' => [
      'help' => [[
          'title' => 'Updating YOOtheme Pro', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=enS8RR_JFrI&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '1:26', 
          'documentation' => 'support/yootheme-pro/joomla/updating#api-key', 
          'support' => 'support/search?tags=125&q=update%20yootheme%20pro'
        ], [
          'title' => 'Setting the Minimum Stability', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=QfBFHAuaCb8&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '0:51', 
          'documentation' => 'support/yootheme-pro/joomla/updating#minimum-stability', 
          'support' => 'support/search?tags=125&q=minimum%20stability'
        ]]
    ], 
    'advanced' => [
      'fields' => [
        'child_theme' => [
          'label' => 'Child Theme', 
          'description' => 'Select a child theme. Note that different template files will be loaded, and theme settings will be updated respectively. To create a child theme, add a new folder yootheme_NAME in the templates directory, for example yootheme_mytheme.', 
          'type' => 'select', 
          'options' => $config->get('theme.child_themes')
        ], 
        'media_folder' => [
          'label' => 'Media Folder', 
          'description' => 'This folder stores images that you download when using layouts from the YOOtheme Pro library. It\'s located inside the Joomla images folder.', 
          'type' => 'text'
        ], 
        'search_module' => [
          'label' => 'Search Component', 
          'description' => 'Select whether the default Search or Smart Search is used by the search module and builder element.', 
          'type' => 'select', 
          'options' => [
            'Search' => 'mod_search', 
            'Smart Search' => 'mod_finder'
          ]
        ], 
        'bootstrap' => [
          'label' => 'Bootstrap', 
          'description' => 'Bootstrap is only required when default Joomla template files are loaded, for example for the Joomla frontend editing.', 
          'text' => 'Load Bootstrap', 
          'type' => 'checkbox'
        ]
      ], 
      'help' => [[
          'title' => 'Lazy Loading', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=3Ze6OT_Q46E&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '0:59', 
          'documentation' => 'support/yootheme-pro/joomla/settings#lazy-loading', 
          'support' => 'support/search?tags=125&q=lazy%20loading'
        ], [
          'title' => 'Serving WebP Images', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=BjJBCmezJls&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '1:46', 
          'documentation' => 'support/yootheme-pro/joomla/settings#next-gen-images', 
          'support' => 'support/search?tags=125&q=webp'
        ]]
    ], 
    'about' => [
      'help' => [[
          'title' => 'Opening the Changelog', 
          'src' => 'https://www.youtube-nocookie.com/watch?v=uNiwQXUS9OY&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
          'duration' => '0:34', 
          'documentation' => 'support/yootheme-pro/joomla/updating#changelog', 
          'support' => 'support/search?tags=125&q=changelog'
        ]]
    ], 
    'system-post' => [
      'title' => 'Post', 
      'width' => 400, 
      'fields' => [
        'post.width' => [
          'label' => 'Width', 
          'description' => 'Set the post width. The image and content can\'t expand beyond this width.', 
          'type' => 'select', 
          'options' => [
            'XSmall' => 'xsmall', 
            'Small' => 'small', 
            'Default' => 'default', 
            'Large' => 'large', 
            'XLarge' => 'xlarge', 
            'Expand' => 'expand', 
            'None' => ''
          ]
        ], 
        'post.padding' => [
          'label' => 'Padding', 
          'description' => 'Set the vertical padding.', 
          'type' => 'select', 
          'options' => [
            'Default' => '', 
            'XSmall' => 'xsmall', 
            'Small' => 'small', 
            'Large' => 'large', 
            'XLarge' => 'xlarge'
          ]
        ], 
        'post.padding_remove' => [
          'type' => 'checkbox', 
          'text' => 'Remove top padding'
        ], 
        'post.content_width' => [
          'label' => 'Content Width', 
          'description' => 'Set an optional content width which doesn\'t affect the image.', 
          'type' => 'select', 
          'options' => [
            'Auto' => '', 
            'XSmall' => 'xsmall', 
            'Small' => 'small'
          ], 
          'enable' => 'post.width != \'xsmall\''
        ], 
        'post.image_align' => [
          'label' => 'Image Alignment', 
          'description' => 'Align the image to the top or place it between the title and the content.', 
          'type' => 'select', 
          'options' => [
            'Top' => 'top', 
            'Between' => 'between'
          ]
        ], 
        'post.image_margin' => [
          'label' => 'Image Margin', 
          'description' => 'Set the top margin if the image is aligned between the title and the content.', 
          'type' => 'select', 
          'options' => [
            'Small' => 'small', 
            'Default' => 'default', 
            'Medium' => 'medium', 
            'Large' => 'large', 
            'X-Large' => 'xlarge', 
            'None' => 'remove'
          ], 
          'enable' => 'post.image_align == \'between\''
        ], 
        'post.image_dimension' => [
          'type' => 'grid', 
          'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically and where possible, high resolution images will be auto-generated.', 
          'fields' => [
            'post.image_width' => [
              'label' => 'Image Width', 
              'width' => '1-2', 
              'attrs' => [
                'placeholder' => 'auto', 
                'lazy' => true
              ]
            ], 
            'post.image_height' => [
              'label' => 'Image Height', 
              'width' => '1-2', 
              'attrs' => [
                'placeholder' => 'auto', 
                'lazy' => true
              ]
            ]
          ]
        ], 
        'post.header_align' => [
          'label' => 'Alignment', 
          'description' => 'Align the title and meta text.', 
          'type' => 'checkbox', 
          'text' => 'Center the title and meta text'
        ], 
        'post.title_margin' => [
          'label' => 'Title Margin', 
          'description' => 'Set the top margin.', 
          'type' => 'select', 
          'options' => [
            'Small' => 'small', 
            'Default' => 'default', 
            'Medium' => 'medium', 
            'Large' => 'large', 
            'X-Large' => 'xlarge', 
            'None' => 'remove'
          ]
        ], 
        'post.meta_margin' => [
          'label' => 'Meta Margin', 
          'description' => 'Set the top margin.', 
          'type' => 'select', 
          'options' => [
            'Small' => 'small', 
            'Default' => 'default', 
            'Medium' => 'medium', 
            'Large' => 'large', 
            'X-Large' => 'xlarge', 
            'None' => 'remove'
          ]
        ], 
        'post.meta_style' => [
          'label' => 'Meta Style', 
          'description' => 'Display the meta text in a sentence or a horizontal list.', 
          'type' => 'select', 
          'options' => [
            'List' => 'list', 
            'Sentence' => 'sentence'
          ]
        ], 
        'post.content_margin' => [
          'label' => 'Content Margin', 
          'description' => 'Set the top margin.', 
          'type' => 'select', 
          'options' => [
            'Small' => 'small', 
            'Default' => 'default', 
            'Medium' => 'medium', 
            'Large' => 'large', 
            'X-Large' => 'xlarge', 
            'None' => 'remove'
          ]
        ], 
        'post.content_dropcap' => [
          'label' => 'Drop Cap', 
          'description' => 'Set a large initial letter that drops below the first line of the first paragraph.', 
          'type' => 'checkbox', 
          'text' => 'Show drop cap'
        ]
      ], 
      'help' => [
        'Post' => [[
            'title' => 'Setting the Post Layout', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=pb9MCdJOz7U&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '0:48', 
            'documentation' => 'support/yootheme-pro/joomla/blog-and-post#post-layout', 
            'support' => 'support/search?tags=125&q=post'
          ], [
            'title' => 'Setting the Post Image', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=6EZtYya-gEY&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '0:54', 
            'documentation' => 'support/yootheme-pro/joomla/blog-and-post#post-image', 
            'support' => 'support/search?tags=125&q=post'
          ], [
            'title' => 'Setting the Post Content', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=R-d6cuP0l9Y&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '0:50', 
            'documentation' => 'support/yootheme-pro/joomla/blog-and-post#post-content', 
            'support' => 'support/search?tags=125&q=post'
          ]], 
        'Post Builder' => [[
            'title' => 'Opening the Post Builder', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=zs18rm4__R0&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '2:40', 
            'documentation' => 'support/yootheme-pro/joomla/pages-and-posts#posts', 
            'support' => 'support/search?tags=125&q=builder'
          ]]
      ]
    ], 
    'system-blog' => [
      'title' => 'Blog', 
      'width' => 400, 
      'fields' => [
        'blog.width' => [
          'label' => 'Width', 
          'description' => 'Set the blog width.', 
          'type' => 'select', 
          'options' => [
            'Default' => 'default', 
            'Small' => 'small', 
            'Large' => 'large', 
            'XLarge' => 'xlarge', 
            'Expand' => 'expand'
          ]
        ], 
        'blog.padding' => [
          'label' => 'Padding', 
          'description' => 'Set the vertical padding.', 
          'type' => 'select', 
          'options' => [
            'Default' => '', 
            'XSmall' => 'xsmall', 
            'Small' => 'small', 
            'Large' => 'large', 
            'XLarge' => 'xlarge'
          ]
        ], 
        'blog.grid_column_gap' => [
          'label' => 'Column Gap', 
          'description' => 'Set the size of the gap between the grid columns. Define the number of columns in the <a href="index.php?option=com_config&view=component&component=com_content#blog_default_parameters">Blog/Featured Layout</a> settings in Joomla.', 
          'type' => 'select', 
          'options' => [
            'Small' => 'small', 
            'Medium' => 'medium', 
            'Default' => '', 
            'Large' => 'large', 
            'None' => 'collapse'
          ]
        ], 
        'blog.grid_row_gap' => [
          'label' => 'Row Gap', 
          'description' => 'Set the size of the gap between the grid rows.', 
          'type' => 'select', 
          'options' => [
            'Small' => 'small', 
            'Medium' => 'medium', 
            'Default' => '', 
            'Large' => 'large', 
            'None' => 'collapse'
          ]
        ], 
        'blog.grid_breakpoint' => [
          'label' => 'Breakpoint', 
          'description' => 'Set the breakpoint from which grid items will stack.', 
          'type' => 'select', 
          'options' => [
            'Small (Phone Landscape)' => 's', 
            'Medium (Tablet Landscape)' => 'm', 
            'Large (Desktop)' => 'l', 
            'X-Large (Large Screens)' => 'xl'
          ]
        ], 
        'blog.grid_masonry' => [
          'label' => 'Masonry', 
          'description' => 'The masonry effect creates a layout free of gaps even if grid items have different heights. ', 
          'type' => 'checkbox', 
          'text' => 'Enable masonry effect'
        ], 
        'blog.grid_parallax' => [
          'label' => 'Parallax', 
          'description' => 'The parallax effect moves single grid columns at different speeds while scrolling. Define the vertical parallax offset in pixels.', 
          'type' => 'range', 
          'attrs' => [
            'min' => 0, 
            'max' => 600, 
            'step' => 10
          ]
        ], 
        'blog.image_align' => [
          'label' => 'Image Alignment', 
          'description' => 'Align the image to the top or place it between the title and the content.', 
          'type' => 'select', 
          'options' => [
            'Top' => 'top', 
            'Between' => 'between'
          ]
        ], 
        'blog.image_margin' => [
          'label' => 'Image Margin', 
          'description' => 'Set the top margin if the image is aligned between the title and the content.', 
          'type' => 'select', 
          'options' => [
            'Small' => 'small', 
            'Default' => 'default', 
            'Medium' => 'medium', 
            'Large' => 'large', 
            'X-Large' => 'xlarge', 
            'None' => 'remove'
          ], 
          'enable' => 'blog.image_align == \'between\''
        ], 
        'blog.image_dimension' => [
          'type' => 'grid', 
          'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically and where possible, high resolution images will be auto-generated.', 
          'fields' => [
            'blog.image_width' => [
              'label' => 'Image Width', 
              'width' => '1-2', 
              'attrs' => [
                'placeholder' => 'auto', 
                'lazy' => true
              ]
            ], 
            'blog.image_height' => [
              'label' => 'Image Height', 
              'width' => '1-2', 
              'attrs' => [
                'placeholder' => 'auto', 
                'lazy' => true
              ]
            ]
          ]
        ], 
        'blog.header_align' => [
          'label' => 'Alignment', 
          'description' => 'Align the title and meta text as well as the continue reading button.', 
          'type' => 'checkbox', 
          'text' => 'Center the title, meta text and button'
        ], 
        'blog.title_style' => [
          'label' => 'Title Style', 
          'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.', 
          'type' => 'select', 
          'options' => [
            'None' => '', 
            'H1' => 'h1', 
            'H2' => 'h2', 
            'H3' => 'h3', 
            'H4' => 'h4'
          ]
        ], 
        'blog.title_margin' => [
          'label' => 'Title Margin', 
          'description' => 'Set the top margin.', 
          'type' => 'select', 
          'options' => [
            'Small' => 'small', 
            'Default' => 'default', 
            'Medium' => 'medium', 
            'Large' => 'large', 
            'X-Large' => 'xlarge', 
            'None' => 'remove'
          ]
        ], 
        'blog.meta_margin' => [
          'label' => 'Meta Margin', 
          'description' => 'Set the top margin.', 
          'type' => 'select', 
          'options' => [
            'Small' => 'small', 
            'Default' => 'default', 
            'Medium' => 'medium', 
            'Large' => 'large', 
            'X-Large' => 'xlarge', 
            'None' => 'remove'
          ]
        ], 
        'blog.content_length' => [
          'label' => 'Content Length', 
          'description' => 'Limit the content length to a number of characters. All HTML elements will be stripped.', 
          'type' => 'number', 
          'attrs' => [
            'placeholder' => 'No limit.'
          ]
        ], 
        'blog.content_margin' => [
          'label' => 'Content Margin', 
          'description' => 'Set the top margin.', 
          'type' => 'select', 
          'options' => [
            'Small' => 'small', 
            'Default' => 'default', 
            'Medium' => 'medium', 
            'Large' => 'large', 
            'X-Large' => 'xlarge', 
            'None' => 'remove'
          ]
        ], 
        'blog.content_align' => [
          'label' => 'Content Alignment', 
          'type' => 'checkbox', 
          'text' => 'Center the content'
        ], 
        'blog.button_style' => [
          'label' => 'Button', 
          'description' => 'Select a style for the continue reading button.', 
          'type' => 'select', 
          'options' => [
            'Default' => 'default', 
            'Primary' => 'primary', 
            'Secondary' => 'secondary', 
            'Danger' => 'danger', 
            'Text' => 'text'
          ]
        ], 
        'blog.button_margin' => [
          'label' => 'Button Margin', 
          'description' => 'Set the top margin.', 
          'type' => 'select', 
          'options' => [
            'Small' => 'small', 
            'Default' => 'default', 
            'Medium' => 'medium', 
            'Large' => 'large', 
            'X-Large' => 'xlarge', 
            'None' => 'remove'
          ]
        ], 
        'blog.navigation' => [
          'label' => 'Navigation', 
          'description' => 'Use a numeric pagination or previous/next links to move between blog pages.', 
          'type' => 'select', 
          'options' => [
            'Pagination' => 'pagination', 
            'Previous/Next' => 'previous/next'
          ]
        ], 
        'blog.pagination_startend' => [
          'type' => 'checkbox', 
          'text' => 'Show Start/End links', 
          'show' => 'blog.navigation == \'pagination\''
        ]
      ], 
      'help' => [
        'Blog' => [[
            'title' => 'Setting the Blog Layout', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=ZFRieS43jv8&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '2:14', 
            'documentation' => 'support/yootheme-pro/joomla/blog-and-post#blog-layout', 
            'support' => 'support/search?tags=125&q=blog'
          ], [
            'title' => 'Setting the Blog Image', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=vCx5khrkzuc&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '0:54', 
            'documentation' => 'support/yootheme-pro/joomla/blog-and-post#blog-image', 
            'support' => 'support/search?tags=125&q=blog'
          ], [
            'title' => 'Setting the Blog Content', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=h6zX_rMe1K4&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:05', 
            'documentation' => 'support/yootheme-pro/joomla/blog-and-post#blog-content', 
            'support' => 'support/search?tags=125&q=blog'
          ], [
            'title' => 'Setting the Blog Navigation', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=mT0hItNR4C8&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '0:18', 
            'documentation' => 'support/yootheme-pro/joomla/blog-and-post#blog-navigation', 
            'support' => 'support/search?tags=125&q=navigation'
          ], [
            'title' => 'Displaying the Excerpt', 
            'src' => 'https://www.youtube-nocookie.com/watch?v=96pqkDnG74g&amp;list=PLrqT0WH0HPdPfykSwhMt6Jl2_RgJ6ixU-', 
            'duration' => '1:14', 
            'documentation' => 'support/yootheme-pro/joomla/blog-and-post#excerpt', 
            'support' => 'support/search?tags=125&q=excerpt'
          ]]
      ]
    ]
  ]
];
