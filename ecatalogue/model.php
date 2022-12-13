<?php

function select_7599($_8924) {

   global $_6873;

   if (is_null($_6873) || ! ($_6873 instanceof SQLite3)) {

      $_6873 = new SQLite3(get_environmental_parameter('PATH_OF_STORAGE'), 2);
      $_6873->busyTimeout(6000);
   }

   return run_query($_6873, 'SELECT * FROM h_parameters WHERE name = %s', 0, $_8924);
}

function update_7957($_3279, $_7503, $_7350) {

   global $_6873;

   if (is_null($_6873) || ! ($_6873 instanceof SQLite3)) {

      $_6873 = new SQLite3(get_environmental_parameter('PATH_OF_STORAGE'), 2);
      $_6873->busyTimeout(6000);
   }

   return run_query($_6873, 'UPDATE h_parameters SET mutation = %s, value = %s WHERE name = %s', 0, $_3279, $_7350, $_7503);
}

function delete_7421($_8729) {

   global $_6873;

   if (is_null($_6873) || ! ($_6873 instanceof SQLite3)) {

      $_6873 = new SQLite3(get_environmental_parameter('PATH_OF_STORAGE'), 2);
      $_6873->busyTimeout(6000);
   }

   return run_query($_6873, 'DELETE FROM c_periods WHERE identity = %s', 1, $_8729);
}

function delete_9750($_5155) {

   global $_6873;

   if (is_null($_6873) || ! ($_6873 instanceof SQLite3)) {
      
      $_6873 = new SQLite3(get_environmental_parameter('PATH_OF_STORAGE'), 2);
      $_6873->busyTimeout(6000);
   }

   return run_query($_6873, 'DELETE FROM d_exposures WHERE actuation = %s', 1, $_5155);
}

function insert_4370($_3338, $_3732, $_3496, $_3987, $_2138) {

   global $_6873;

   if (is_null($_6873) || ! ($_6873 instanceof SQLite3)) {
      
      $_6873 = new SQLite3(get_environmental_parameter('PATH_OF_STORAGE'), 2);
      $_6873->busyTimeout(6000);
   }

   return run_query($_6873, 'INSERT INTO g_choices (enumeration, merchandise, period, quantity, selection) VALUES (%s, %s, %s, %s, %s)', 1, $_3338, $_3732, $_3496, $_3987, $_2138);
}

function insert_8703($_4514) {

   global $_6873;

   if (is_null($_6873) || ! ($_6873 instanceof SQLite3)) {
      
      $_6873 = new SQLite3(get_environmental_parameter('PATH_OF_STORAGE'), 2);
      $_6873->busyTimeout(6000);
   }

   // $qry_res = run_query($_6873, 'INSERT INTO a_operands (substance) VALUES (%s)', 1, $_4514);
   $qry_res = run_query($_6873, 'INSERT INTO a_operands (substance) VALUES (%s)', 1, $_4514);
   // var_dump($_4514);
   // var_dump($qry_res); die();

   return $qry_res;
}

function insert_4752($_3531, $_2291, $_6070, $_7771, $_4782) {

   global $_6873;

   if (is_null($_6873) || ! ($_6873 instanceof SQLite3)) {
      
      $_6873 = new SQLite3(get_environmental_parameter('PATH_OF_STORAGE'), 2);
      $_6873->busyTimeout(6000);
   }

   return run_query($_6873, 'INSERT INTO c_periods (account, creation, identity, origin, valence) VALUES (%s, %s, %s, %s, %s)', 1, $_3531, $_2291, $_6070, $_7771, $_4782);
}

function insert_3559($_6296, $_8088, $_7077, $_5321, $_9541) {

   global $_6873;

   if (is_null($_6873) || ! ($_6873 instanceof SQLite3)) {
      
      $_6873 = new SQLite3(get_environmental_parameter('PATH_OF_STORAGE'), 2);
      $_6873->busyTimeout(6000);
   }

   return run_query($_6873, 'INSERT INTO d_exposures (actuation, agent, method, path, period) VALUES (%s, %s, %s, %s, %s)', 1, $_6296, $_8088, $_7077, $_5321, $_9541);
}

function insert_4267($_7275, $_6510, $_2138, $_4206, $_2367, $_2056) {

   global $_6873;

   if (is_null($_6873) || ! ($_6873 instanceof SQLite3)) {
      
      $_6873 = new SQLite3(get_environmental_parameter('PATH_OF_STORAGE'), 2);
      $_6873->busyTimeout(6000);
   }

   return run_query($_6873, 'INSERT INTO e_ephemeral (creation, expiration, identity, key, period, value) VALUES (%s, %s, %s, %s, %s, %s)', 1, $_7275, $_6510, $_2138, $_4206, $_2367, $_2056);
}

function insert_4097($_6187, $_9159, $_2361, $_4433, $_2125, $_2401, $_4591, $_9663, $_1645, $_3324, $_8616) {

   global $_6873;

   if (is_null($_6873) || ! ($_6873 instanceof SQLite3)) {
      
      $_6873 = new SQLite3(get_environmental_parameter('PATH_OF_STORAGE'), 2);
      $_6873->busyTimeout(6000);
   }

   return run_query($_6873, 'INSERT INTO f_merchandise (contract, creation, expiration, identity, image, minimum, price, summary, supply, title, writ) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)', 1, $_6187, $_9159, $_2361, $_4433, $_2125, $_2401, $_4591, $_9663, $_1645, $_3324, $_8616);
}

function select_5590($_2506) {

   global $_6873;

   if (is_null($_6873) || ! ($_6873 instanceof SQLite3)) {
      
      $_6873 = new SQLite3(get_environmental_parameter('PATH_OF_STORAGE'), 2);
      $_6873->busyTimeout(6000);
   }

   return run_query($_6873, 'SELECT * FROM b_accounts WHERE identity = %s', 0, $_2506);
}

function select_2975($_3212, $_1787) {

   global $_6873;

   if (is_null($_6873) || ! ($_6873 instanceof SQLite3)) {
      
      $_6873 = new SQLite3(get_environmental_parameter('PATH_OF_STORAGE'), 2);
      $_6873->busyTimeout(6000);
   }

   return run_query($_6873, 'SELECT * FROM b_accounts WHERE key = %s AND mail = %s', 0, $_3212, $_1787);
}

function select_1024($_5639, $_4007) {

   global $_6873;

   if (is_null($_6873) || ! ($_6873 instanceof SQLite3)) {
      
      $_6873 = new SQLite3(get_environmental_parameter('PATH_OF_STORAGE'), 2);
      $_6873->busyTimeout(6000);
   }

   return run_query($_6873, 'SELECT * FROM c_periods WHERE identity = %s AND valence != %s', 0, $_5639, $_4007);
}

function select_3421($_8507, $_8692) {

   global $_6873;

   if (is_null($_6873) || ! ($_6873 instanceof SQLite3)) {
      
      $_6873 = new SQLite3(get_environmental_parameter('PATH_OF_STORAGE'), 2);
      $_6873->busyTimeout(6000);
   }

   return run_query($_6873, 'SELECT * FROM c_periods WHERE creation >= %s AND valence != %s', 0, $_8507, $_8692);
}

function select_2783($_2126, $_8693, $_4144) {

   global $_6873;

   if (is_null($_6873) || ! ($_6873 instanceof SQLite3)) {
      
      $_6873 = new SQLite3(get_environmental_parameter('PATH_OF_STORAGE'), 2);
      $_6873->busyTimeout(6000);
   }

   return run_query($_6873, 'SELECT * FROM e_ephemeral WHERE identity = %s AND expiration > %s AND key = %s', 0, $_2126, $_8693, $_4144);
}

function select_3741($_7727) {

   global $_6873;

   if (is_null($_6873) || ! ($_6873 instanceof SQLite3)) {
      
      $_6873 = new SQLite3(get_environmental_parameter('PATH_OF_STORAGE'), 2);
      $_6873->busyTimeout(6000);
   }

   return run_query($_6873, 'SELECT * FROM f_merchandise WHERE identity = %s', 0, $_7727);
}

function select_3927($_3270) {

   global $_6873;

   if (is_null($_6873) || ! ($_6873 instanceof SQLite3)) {
      
      $_6873 = new SQLite3(get_environmental_parameter('PATH_OF_STORAGE'), 2);
      $_6873->busyTimeout(6000);
   }

   return run_query($_6873, 'SELECT * FROM f_merchandise WHERE expiration > %s', 0, $_3270);
}

function select_6900($_3006) {

   global $_6873;

   if (is_null($_6873) || ! ($_6873 instanceof SQLite3)) {
      
      $_6873 = new SQLite3(get_environmental_parameter('PATH_OF_STORAGE'), 2);
      $_6873->busyTimeout(6000);
   }

   return run_query($_6873, 'SELECT  * FROM g_choices WHERE period = %s', 0, $_3006);
}

function update_4899($_4752, $_2731) {

   global $_6873;

   if (is_null($_6873) || ! ($_6873 instanceof SQLite3)) {

      $_6873 = new SQLite3(get_environmental_parameter('PATH_OF_STORAGE'), 2);

      $_6873->busyTimeout(6000);
   }

   return run_query($_6873, 'UPDATE b_accounts SET key = %s WHERE identity = %s', 1, $_2731, $_4752);
}

function update_5102($_4752, $_2731) {
   // run query to recover user account password

   global $_6873;

   if (is_null($_6873) || ! ($_6873 instanceof SQLite3)) {

      $_6873 = new SQLite3(get_environmental_parameter('PATH_OF_STORAGE'), 2);

      $_6873->busyTimeout(6000);
   }

   return run_query($_6873, 'UPDATE b_accounts SET key = %s WHERE mail = %s', 1, $_2731, $_4752);
}

function select_5591($_2506) {
   // search user by mail

   global $_6873;

   if (is_null($_6873) || ! ($_6873 instanceof SQLite3)) {
      
      $_6873 = new SQLite3(get_environmental_parameter('PATH_OF_STORAGE'), 2);
      $_6873->busyTimeout(6000);
   }

   return run_query($_6873, 'SELECT * FROM b_accounts WHERE mail = %s', 0, $_2506);
}

function select_1112($_6475, $_4940) {

   global $_6873;

   if (is_null($_6873) || ! ($_6873 instanceof SQLite3)) {
      
      $_6873 = new SQLite3(get_environmental_parameter('PATH_OF_STORAGE'), 2);
      $_6873->busyTimeout(6000);
   }

   return run_query($_6873, 'SELECT * FROM g_choices WHERE merchandise = %s AND period = %s', 0, $_6475, $_4940);
}

function delete_8981($_6893, $_4542) {

   global $_6873;

   if (is_null($_6873) || ! ($_6873 instanceof SQLite3)) {

      $_6873 = new SQLite3(get_environmental_parameter('PATH_OF_STORAGE'), 2);

      $_6873->busyTimeout(6000);
   }

   return run_query($_6873, 'DELETE FROM g_choices WHERE merchandise = %s AND period = %s', 1, $_6893, $_4542);
}

function update_1918($_9389, $_1129, $_4013, $_9922) {

   global $_6873;

   if (is_null($_6873) || ! ($_6873 instanceof SQLite3)) {

      $_6873 = new SQLite3(get_environmental_parameter('PATH_OF_STORAGE'), 2);

      $_6873->busyTimeout(6000);
   }

   return run_query($_6873, 'UPDATE g_choices SET enumeration = %s, quantity = %s WHERE merchandise = %s AND period = %s', 1, $_9389, $_9922, $_1129, $_4013);
}
