<?php

function render_3623($_9602, $_8371, $_2998, $_3503) {

   $_2430 = file_get_contents(sprintf('%s/view-basket.html', get_environmental_parameter('PATH_OF_PAGES')));
   $_2430 = prerender($_2430, $_9602, $_8371, $_2998);

   $_5408 = array();


   $_3990 = json_encode($_5408);

   for (list($_2327, $_9986) = array(0, ''); $_2327 < count($_2998); $_2327++) {

      $_5408[] = array($_2998[$_2327]['merchandise'], $_6469 = 'a' . rand(1000000, 9999999), $_2647 = 'a' . rand(1000000, 9999999));

      $_5953 = sprintf('<input class="b97d" id="%s" value="%s">', $_6469, ltrim($_2998[$_2327]['quantity'], 0));
      $_7837 = sprintf('<a class="c865" href="%s" id="%s">Update</a>', sprintf('/add-merchandise-to-basket-8222?merchandise=%s', $_2998[$_2327][6753]), $_2647);
      $_6229 = sprintf('<div class="cda5">Quantity</div>');
      $_2092 = sprintf('<div class="b7e8">%s%s</div>', $_5953, $_7837);
      $_5488 = sprintf('<div class="cda5">Price of Unit</div>');
      $_8600 = sprintf('<input class="b25a" value="%s">', number_format(ltrim($_2998[$_2327][3989], 0)) . ' IDR');
      $_3367 = sprintf('<div class="cda5">Subtotal</div>');
      $_9627 = sprintf('<input class="b25a" value="%s">', number_format(ltrim($_2998[$_2327]['quantity'], 0) * ltrim($_2998[$_2327][3989], 0)) . ' IDR');
      $_6534 = sprintf('<div class="ac3d f37c">%s%s</div>', $_6229, $_2092);
      $_1798 = sprintf('<div class="ac3d f37c">%s%s</div>', $_5488, $_8600);
      $_3641 = sprintf('<div class="ac3d">%s%s</div>', $_3367, $_9627);
//
      $_5031 = sprintf('<div class="a4b2"><a class="a784" href="%s">%s</a></div>', '', $_2998[$_2327][2862]);
      $_7739 = sprintf('<div class="bbda">%s%s%s</div>', $_6534, $_1798, $_3641);
      $_3151 = sprintf('<a class="c171" href="%s"><img class="fe64" src="%s"></a>', '', $_2998[$_2327][9821]);
      $_7887 = sprintf('<div class="a16e">%s%s</div>', $_5031, $_7739);
      $_7987 = sprintf('<a class="e236" href="%s"><img class="fc4c" src="https://2047.yuan.engineering/03bf1e2512e3bf1be696ba5f4e150cc637d5571527e738966dee1a413a971b78"></a>', $_2998[$_2327][3584]);
      $_6113 = sprintf('<div class="eb6d dbe7">%s%s%s</div>', $_3151, $_7887, $_7987);

      $_9986 = $_9986 . $_6113;
   }

   $_2430 = inject(sprintf('%s IDR', number_format(intval(ltrim($_3503, '0')))), $_2430, '<span id="fea1">', '</span>');

   $_2430 = str_replace('/* 7710 */', sprintf('overview = \'%s\'; merchandise = %s;', serialize($_2998), json_encode($_5408)), $_2430);

   $_2430 = inject($_9986, $_2430, '<!-- 4451 -->', '<!-- 9484 -->');
   
// 4451 9484

   return $_2430;
}

function render_2337($_5087, $_7747, $_9261, $_4389) {

   $_8424 = file_get_contents(sprintf('%s/browse-merchandise.html', get_environmental_parameter('PATH_OF_PAGES')));
   $_9823 = prerender($_8424, $_5087, $_7747, $_4389);

   for (list($_6454, $_2184) = array(0, ''); $_6454 < count($_9261); $_6454++) {

      $_2757 = sprintf('<div class="cbfb">Beginning: %s</div>', $_9261[$_6454][8595]);
      $_4729 = sprintf('<div class="d8c2">End: %s</div>', $_9261[$_6454][5161]);
      $_9010 = sprintf('<div class="c7b6"><a class="dc76" href="%s">%s</a></div>', $_9261[$_6454][6643], $_9261[$_6454]['title']);
      $_8810 = sprintf('<div class="f6f8"><a class="db5c" href="%s">%s</a></div>', $_9261[$_6454][7975], $_9261[$_6454]['contract']);
      $_9513 = sprintf('<div class="ce23">%s%s</div>', $_2757, $_4729);
      $_8724 = sprintf('<a class="de87" href="%s"><img class="d6a9" src="%s"></a>', $_9261[$_6454][6643], $_9261[$_6454]['image']);
      $_3138 = sprintf('<div class="d9a7">%s%s%s</div>', $_9010, $_8810, $_9513);
      $_3323 = sprintf('<div class="c0d3 eded">%s%s</div>', $_8724, $_3138);

      $_2184 = $_2184 . $_3323;
   }

   $_9823 = inject($_2184, $_9823, '<!-- 9048 -->', '<!-- 5016 -->');

   return $_9823;
}

function render_9915($_3754, $_4117, $_6363, $_8031) {

   $_4727 = file_get_contents(sprintf('%s/change-password.html', get_environmental_parameter('PATH_OF_PAGES')));
   $_2660 = prerender($_4727, $_3754, $_4117, $_8031);

   return $_2660;
}

function render_7989($_4489, $_1195, $_3443, $_9308) {

   $_8930 = file_get_contents(sprintf('%s/examine.html', get_environmental_parameter('PATH_OF_PAGES')));
   $_8930 = prerender($_8930, $_4489, $_1195, $_9308);

   $_8930 = str_replace('/*<!-- 9533 -->*/', sprintf('merchandise = "%s";', $_3443['identity']), $_8930);

   $_8930 = inject(htmlentities($_3443['title']), $_8930, '<div id="c3fb">', '</div>');
   $_8930 = str_replace('<img alt="" id="d8af" src="https://i.imgur.com/C3yxCLA.png">', sprintf('<img alt="" id="d8af" src="%s">', $_3443['image']), $_8930);
   $_8930 = inject($_3443[6212], $_8930, '<td class="b437" id="e12f">', '</td>');
   $_8930 = inject($_3443[5096], $_8930, '<td class="b437" id="fd67">', '</td>');
   $_8930 = inject($_3443['contract'], $_8930, '<a class="ec5b" href="/" id="c782">', '</a>');
   $_8930 = str_replace('<a class="ec5b" href="/" id="c782">', sprintf('<a class="ec5b" href="%s" id="c782">', $_3443[6629]), $_8930);
   $_8930 = inject(number_format(ltrim($_3443[1767], '0')), $_8930, '<td class="b437" id="cb4b">', '</td>');
   $_8930 = inject(number_format(ltrim($_3443[3761], '0')), $_8930, '<td class="b437" id="cddb">', '</td>');
   $_8930 = inject(number_format(ltrim($_3443[8024], '0')), $_8930, '<td class="b437" id="a17a">', '</td>');

   return $_8930;
}

function render_3584($_7215, $_6077, $_7609, $_8772) {

   $_9031 = file_get_contents(sprintf('%s/greet.html', get_environmental_parameter('PATH_OF_PAGES')));
   $_1025 = prerender($_9031, $_7215, $_6077, $_7609);

   $_1563 = intval(get_cell_from_tabular_result(select_7599('ORDERS'), 'value'));
   $_1161 = intval(get_cell_from_tabular_result(select_7599('TOTAL_SUPPLY_OF_MERCHANDISE'), 'value'));
   $_8088 = intval(get_cell_from_tabular_result(select_7599('COMMENTS'), 'value'));
   $_1796 = intval(get_cell_from_tabular_result(select_7599('KINDS_OF_MERCHANDISE'), 'value'));

   $_1025 = str_replace('/* 5941 */', sprintf('account = ["%s", "%s"]; orders[1] = %s; totalSupply[1] = %s; comments[1] = %s; mercantileKinds[1] = %s;', $_7215['identity'], $_7215['name'], $_1563, $_1161, $_8088, $_1796), $_1025);

   $_1025 = inject(number_format($_8772['value']), $_1025, '<span id="b935">', '</span>');

   if (count($_7215) == 0) {

      $_1025 = str_replace('<div id="bf9b">', '<div id="bf9b" style="display: none">', $_1025);
   }

   return $_1025;
}

function render_8304($_4801, $_4949, $_6611) {

   $_1115 = file_get_contents(sprintf('%s/log-in.html', get_environmental_parameter('PATH_OF_PAGES')));
   $_9619 = prerender($_1115, $_4801, $_4949, $_6611);

   return $_9619;
}

function render_3061($_2832, $_3787, $_2869) {

   $_6521 = file_get_contents(sprintf('%s/submit-merchandise.html', get_environmental_parameter('PATH_OF_PAGES')));
   $_6521 = prerender($_6521, $_2832, $_3787, $_2869);

   $_6521 = str_replace('<input class="d6d9" id="a6e2">', '<input class="d6d9" id="a6e2" value="https://i.imgur.com/C3yxCLA.png">', $_6521);
   $_6521 = str_replace('<input class="d6d9" id="b14c">', '<input class="d6d9" id="b14c" value="2022-12-31">', $_6521);
   $_6521 = str_replace('<input class="d6d9" id="d7c6">', '<input class="d6d9" id="d7c6" value="1">', $_6521);
   $_6521 = str_replace('<input class="d6d9" id="d16b">', '<input class="d6d9" id="d16b" value="1">', $_6521);
   $_6521 = str_replace('<input class="d6d9" id="a3dd">', sprintf('<input class="d6d9" id="a3dd" value="%s">', rand(1, 999999)), $_6521);

   return $_6521;
}

function render_2877($_6785, $_1584, $_8214) {

   $_2471 = file_get_contents(sprintf('%s/warn.html', get_environmental_parameter('PATH_OF_PAGES')));
   $_7213 = prerender($_2471, $_6785, $_1584, $_8214);

   return $_7213;
}

function render_4384($_4384, $_3366, $_7669) {

   $_3650 = file_get_contents(sprintf('%s/recover-account-1.html', get_environmental_parameter('PATH_OF_PAGES')));
   $_4477 = prerender($_3650, $_4384, $_3366, $_7669);

   return $_4477;

}

function render_4385($_4384, $_3366, $_5715) {

   $_3650 = file_get_contents(sprintf('%s/recover-account-4.html', get_environmental_parameter('PATH_OF_PAGES')));
   $_4477 = prerender($_3650, $_4384, $_3366, $_5715);

   return $_4478;

}
