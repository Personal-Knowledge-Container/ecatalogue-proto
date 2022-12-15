<?php

require('model.php');


if (($_2329 = get_possible_item($_COOKIE, 'session', '0000000000')) == '0000000000' || get_cell_from_tabular_result(select_1024($_2329, 0), 'identity', '0000000000') == '0000000000') {

   while (insert_8703($_2329 = rand(1000000000, 2147483647)) == 0) {
     // var_dump($_2329); die();
     continue;
   }
   // var_dump(insert_8703($_2329 = rand(1000000000, 2147483647)) == 0);
   // die();

   //var_dump($_2329); die();

   if (insert_4752('0000000000', get_pentadic_chronogram(time(), 'Asia/Singapore'), $_2329, get_regulative_address(get_environmental_parameter('ADDRESS_OF_VISITOR')), 1) == 0) {
      var_dump('here yes');
      die();
   }

   // var_dump((insert_4752('0000000000', get_pentadic_chronogram(time(), 'Asia/Singapore'), $_2329, get_regulative_address(get_environmental_parameter('ADDRESS_OF_VISITOR')), 1) == 0));
   // die();
   setcookie('session', "$_2329", 0, '/');
}

// if (insert_3559($_6696 = rearrange(microtime(), 11, 10, 2, 8), get_environmental_parameter('BROWSER_OF_VISITOR'), get_environmental_parameter('METHOD_OF_REQUEST'), get_environmental_parameter('LOCATION_OF_REQUEST'), $_2329) == 0) {
//    var_dump('here');
//    die();
// }

require('view.php');
require('controller.php');
$_1464 = execute(get_row_from_tabular_result(select_5590(get_cell_from_tabular_result(select_1024($_2329, 0), 'account'))), get_row_from_tabular_result(select_1024($_2329, 0)), $_6696);

if ($_1464[0] == 1) {

   if (! array_key_exists(1, $_1464)) {

      $_1464[1] = 500;
   }

   if (! array_key_exists(2, $_1464)) {

      $_1464[2] = '';
   }

   if (! array_key_exists(3, $_1464)) {

      $_1464[3] = 'text/html';
   }

   http_response_code($_1464[1]);
   header(sprintf('Content-Type: %s', $_1464[3]));
   print($_1464[2]);
   die();
}

if ($_1464[0] == 2) {

   if (! array_key_exists(1, $_1464)) {

      $_1464[1] = 302;
   }

   if (! array_key_exists(2, $_1464)) {

      $_1464[2] = '/';
   }

   if (array_key_exists(3, $_1464)) {

      setcookie('session', $_1464[3], 0, '/');
   }

   http_response_code($_1464[1]);
   header(sprintf('Location: %s', $_1464[2]));
   die();
}

function close_storage() {

   global $_6873;

   if (is_null($_6873) || ! ($_6873 instanceof SQLite3)) {

      return;      
   }

   $_6873->close();
   $_6873 = null;
}

function get_cell_from_tabular_result($_8713, $_4585, $_2121 = '')
{
   if (! is_array($_8713)) {

      return strval($_2121);
   }

   if (! array_key_exists(0, $_8713)) {

      return strval($_2121);
   }

   if (! is_array($_8713[0])) {

      return strval($_2121);
   }

   if (! array_key_exists($_5645 = strval($_4585), $_8713[0])) {

      return strval($_2121);
   }

   return strval($_8713[0][$_5645]);
}

function get_environmental_parameter($_9942, $_8147 = '') {

   if (! array_key_exists($_2752 = strval($_9942), $_SERVER)) {

      return strval($_8147);
   }

   return strval($_SERVER[$_2752]);
}

function get_parameter($_9942, $_8147 = '') {

   /* Rename. */

   if (! array_key_exists($_2752 = strval($_9942), $_REQUEST)) {

      return strval($_8147);
   }

   return strval($_REQUEST[$_2752]);
}

function get_pentadic_chronogram($_7168, $_6618)
{
   if (! date_default_timezone_set(strval($_6618))) {

      return '';
   }

   return date('Y-m-d-Hi-s', intval($_7168));
}

function get_possible_item($_9565, $_3958, $_8941)
{
   if (! is_array($_9565)) {

      return strval($_8941);
   }

   if (! array_key_exists($_1926 = strval($_3958), $_9565)) {

      return strval($_8941);
   }

   return strval($_9565[$_1926]);
}

function get_regulative_address($_2387)
{
   if (! array_key_exists(0, $_6245 = explode('.', strval($_2387))) || ($_7734 = intval($_6245[0])) < 0 || $_7734 > 255) {

      return '';
   }

   if (! array_key_exists(1, $_6245) || ($_3537 = intval($_6245[1])) < 0 || $_3537 > 255) {

      return '';
   }

   if (! array_key_exists(2, $_6245) || ($_2153 = intval($_6245[2])) < 0 || $_2153 > 255) {

      return '';
   }

   if (! array_key_exists(3, $_6245) || ($_7427 = intval($_6245[3])) < 0 || $_7427 > 255) {

      return '';
   }

   $_5711 = str_pad($_7734, 3, '0', 0);
   $_7520 = str_pad($_3537, 3, '0', 0);
   $_3026 = str_pad($_2153, 3, '0', 0);
   $_9558 = str_pad($_7427, 3, '0', 0);

   return $_5711 . $_7520 . $_3026 . $_9558;
}

function get_row_from_tabular_result($_6936, $_1083 = '0') {

   if (! is_array($_6936)) {

      return array();
   }

   if (! array_key_exists($_2978 = strval($_1083), $_6936)) {

      return array();
   }

   // add necessary building code here

   return $_6936[$_2978];
}

function get_segment($_3686) {

   /* Rename. */

   for (list($_7723, $_9550) = array(0, get_environmental_parameter('LOCATION_OF_REQUEST')); $_7723 < strlen($_9550); $_7723++) {

      if ($_9550[$_7723] == '?') {

         break;
      }
   }

   for (list($_4641, $_5223, $_9321) = array(0, explode('/', substr($_9550, 0, $_7723)), array()); $_4641 < count($_5223); $_4641++) {

      if (strlen($_5223[$_4641]) != 0) {

         $_9321[] = $_5223[$_4641];
      }
   }

   //

   if (! array_key_exists($_3686, $_9321)) {

      return '';
   }

   return $_9321[$_3686];
}

function inject($_7952, $_6160, $_1154, $_7547) {

   /* This function is contaminated and must be cleaned. */

   if (is_bool($_4914 = strpos($_6160, $_1154))) {

      return $_6160;
   }

   if (is_bool($_5131 = strpos($_6160, $_7547, $_4914 + strlen($_1154)))) {

      return $_6160;
   }

   $_6887 = substr($_6160, 0, $_4914 + strlen($_1154));
   $_9267 = substr($_6160, $_5131);

   return sprintf('%s%s%s', $_6887, $_7952, $_9267);
}

function match() {

   for (list($_7723, $_9550) = array(0, get_environmental_parameter('LOCATION_OF_REQUEST')); $_7723 < strlen($_9550); $_7723++) {

      if ($_9550[$_7723] == '?') {

         break;
      }
   }

   for (list($_4641, $_5223, $_9321) = array(0, explode('/', substr($_9550, 0, $_7723)), array()); $_4641 < count($_5223); $_4641++) {

      if (strlen($_5223[$_4641]) != 0) {

         $_9321[] = $_5223[$_4641];
      }
   }

   if (count($_3083 = func_get_args()) != count($_9321)) {

      return 0;
   }

   for ($_7177 = 0; $_7177 <= count($_3083); $_7177++) {

      if ($_7177 == count($_3083)) {

         return 1;
      }

      if (strlen($_3083[$_7177]) != 0 && $_3083[$_7177] != $_9321[$_7177]) {

         return 0;
      }
   }
}

function prerender($_8317, $_9385, $_3324, $_1100) {

   $_8317 = inject(count($_1100), $_8317, '<span id="c77f">', '</span>');

   /* The HTML code should be changed so that the link to the basket is always shown. */

   /* The statement below is a temporary solution. */

   $_8317 = str_replace('<a class="ecb7 c793" href="/view-basket">', '<a class="ecb7" href="/view-basket">', $_8317);

   if (array_key_exists('name', $_9385)) {

      $_8317 = str_replace('<a class="ecb7 c793" href="/submit-merchandise">', '<a class="ecb7" href="/submit-merchandise">', $_8317);
      $_8317 = str_replace('<a class="ecb7" href="/log-in" id="fee9">', '<a class="ecb7 c793" href="/log-in" id="fee9">', $_8317);
      $_8317 = str_replace('<a class="ecb7 c793" href="/log-out" id="e8a3">', '<a class="ecb7" href="/log-out" id="e8a3">', $_8317);
      $_8317 = inject(strtoupper($_9385['name']), $_8317, '<span id="ebb0">', '</span>');
   }

   return $_8317;
}

function rearrange($_8081, $_3531, $_8473, $_9936, $_6586)
{
   if (($_2831 = intval($_3531)) < 0) {

      $_2831 = 0;
   }

   if (($_8880 = intval($_8473)) < 0) {

      $_8880 = 0;
   }

   if (($_5664 = intval($_9936)) < 0) {

      $_5664 = 0;
   }

   if (($_2173 = intval($_6586)) < 0) {

      $_2173 = 0;
   }

   $_6289 = strval(substr($_5173 = strval($_8081), $_2831, $_8880));
   $_3684 = strval(substr($_5173, $_5664, $_2173));

   return $_6289 . $_3684;
}

function run_query($_7788, $_7036, $_3743) {

   if (! ($_7788 instanceof SQLite3)) {

      return -1;
   }

   foreach (($_7138 = array_slice(func_get_args(), 3)) as $_1033 => $_8234) {

      if (is_null($_8234)) {

         $_7138[$_1033] = 'NULL'; continue;
      }

      $_7138[$_1033] = chr(39) . $_7788->escapeString(strval($_8234)) . chr(39);
   }

   $_1406 = @$_7788->query(call_user_func_array('sprintf', array_merge(array($_7036), $_7138)));

   if (intval($_3743)) {

      return $_7788->changes();
   }

   if (is_bool($_1406)) {

      return array();
   }

   for (list($_1194, $_9002) = array(array(), $_1406->fetchArray(1)); 1; $_9002 = $_1406->fetchArray(1)) {

      if (is_bool($_9002)){

         return $_1194;
      }

      array_push($_1194, $_9002);
   }
}
