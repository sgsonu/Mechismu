<?php
$menu = array(
    'home'   => array('text'=>'Home',  'url'=>'?url=home',  'icon'=>'home'),
    'about'  => array('text'=>'About FSAE',  'url'=>'?url=about',  'icon'=>'home'),
    'cars'   => array('text'=>'Cars', 'url'=>'?url=cars',  'icon'=>'home'),
    'team'   => array('text'=>'Team', 'url'=>'?url=team',  'icon'=>'home'),
    'sponsors' => array('text'=>'Sponsors', 'url'=>'?url=sponsors',  'icon'=>'home'),
    'contact' => array('text'=>'Contact Us', 'url'=>'?url=contact',  'icon'=>'home'),
  );
  class Navigation {
    public static function GenerateMenu($items) {
      $html = '<ul class="navbar-nav">';
      foreach($items as $key => $item) {
        $selected = (isset($_GET['url'])) && $_GET['url'] == $key ? 'active' : null;
        $html .= "<li class='nav-item {$selected}'>
        <a class='nav-link' href='{$item['url']}'>
        <i class='{$item['icon']}'></i>
        {$item['text']}
        </a>
        </li>
        </a>\n";
      }
      $html .= "  </ul>\n";
      return $html;
    }
  };
?>