<?php

function execute($_5243, $_5855, $_7264) {

   if (match()) {

      return array(1, 200, render_3584($_5243, $_5855, select_6900($_5855['identity']), get_row_from_tabular_result(select_7599('HEIGHT_OF_BLOCKCHAIN'))));
   }

   if (match('add-merchandise-to-basket-8222')) {

      $_8086 = intval(ltrim(get_cell_from_tabular_result(select_1112(get_parameter('merchandise'), $_5855['identity']), 'quantity'), '0'));
      $_1085 = intval(get_parameter('quantity', 1)); /* This should be clipped. */

      if ($_8086 == 0) {

         insert_4370(get_pentadic_chronogram(time(), 'Asia/Singapore'), get_parameter('merchandise'), $_5855['identity'], $_1085, get_pentadic_chronogram(time(), 'Asia/Singapore'));
      }

      else {

         update_1918(get_pentadic_chronogram(time(), 'Asia/Singapore'), get_parameter('merchandise'), $_5855['identity'], $_8086 + $_1085);
      }

      return array(2, 302, '/view-basket');
   }

   if (match('allow-persistence')) {

   }

   if (match('allow-persistence', '')) {

   }

   if (match('allow-persistence', '', '')) {

   }

   if (match('allow-persistence', '', '', '')) {

   }

   if (match('browse-merchandise')) {

      foreach (($_7087 = select_3927('2022-01-01')) as $_2221 => $_9865) {

         $_7087[$_2221][8595] = substr($_9865['creation'], 0, 10);
         $_7087[$_2221][5161] = substr($_9865['expiration'], 0, 10);
         $_7087[$_2221][6643] = sprintf('%s/examine/%s', get_environmental_parameter('BASIC_LOCATION'), $_9865['identity']);
         $_7087[$_2221][7975] = sprintf('https://goerli.etherscan.io/address/%s', $_9865['contract']);
      }

      return array(1, 200, render_2337($_5243, $_5855, $_7087, select_6900($_5855['identity'])));
   }

   if (match('change-language', '')) {

      
   }

   if (match('change-language', '', '')) {


   }

   if (match('change-language', '', '', '')) {


   } 

   if (match('change-language', '', '', '', '')) {


   }

   if (match('change-password')) {

      if (! array_key_exists('identity', $_5243)) {

         return array(1, 400, 'Please login before you can change your password.', 'text/plain');
      }

      return array(1, 200, render_9915($_5243, $_5855, array(), select_6900($_5855['identity'])));
   }

   if (match('change-password', '')) {

      if (! array_key_exists('identity', $_5243)) {

         return array(1, 400, 'Please login before you can change your password.', 'text/plain');
      }

      return array(1, 200, render_9915($_5243, $_5855, select_6900($_5855['identity'])));
   }

   if (match('change-password-4427')) {

      if (! array_key_exists('identity', $_5243)) {

         return array(2, 302, '/log-in');
      }

      if (update_4899($_5243['identity'], md5($_7274 = get_parameter("b6d1"))) == 0) {

         return array(1, 500, 'For some reason, your password could not be updated.', 'text/plain');
      }

      return array(2, 302, sprintf('/change-password/%s', $_5460));
   }

   if (match('change-quantity-of-merchandise-6637')) {

      update_1918(get_pentadic_chronogram(time(), 'Asia/Singapore'), get_parameter('merchandise'), $_5855['identity'], get_parameter('quantity'));
      
      return array(2, 302, '/view-basket');
   }

   if (match('confirm-account', '')) {


   }

   if (match('recover-account')) {

      if (array_key_exists('identity', $_5243)) {
         // only for non-logged-in user
         return array(1, 400, 'Recover password is only for non-logged-in user', 'text/plain');
      }

      // redirect to recover account screen
      return array(1, 200, render_4384($_5243, $_5855, select_6900($_5855['identity'])));
   }

   if (match('recover-account', '')) {

      return array(1, 200, render_4385($_5243, $_5855, select_6900($_5855['identity'])));

   }

   if (match('recover-account-2217')) {

      // received login username
      $_5250 = get_parameter("b6d1");

      // find login name, if exists change the password and display
      $_5251 = select_5591($_5250);

      if ( count($_5251) == 0 ) {
         // mail user is not found
         return array(1,500,'User email is not found','text/plain');
      }

      // perform recovery account, set password to predefined
      $_5252 = "jakarta";

      if( (update_5102($_5250, md5($_5252)) == 0 )) {

         // update failed
         return array(1,500,'Your password is failed to update','text/plain');
      }

      // update sucessful
      // return array(1, 200,'Your password is set to "'.$_5252.'"','text/plain');
      return array(2, 302, '/recover-account');
   }

   if (match('register')) {


   }

   if (match('register', '')) {

   
   }

   if (match('robots.txt')) {

      return array(1, 200, sprintf('User-agent: *%c%cDisallow: /', 13, 10), 'text/plain');
   }

   if (match('examine', '')) {

      if (count($_8866 = get_row_from_tabular_result(select_3741(get_segment(1)))) == 0) {

         return array(2, 302, '/');
      }

      $_8866[6212] = substr($_8866['creation'], 0, 10);
      $_8866[5096] = substr($_8866['expiration'], 0, 10);
      $_8866[6629] = sprintf('https://goerli.etherscan.io/address/%s', $_8866['contract']);
      $_8866[1767] = $_8866['minimum'];
      $_8866[3761] = $_8866['supply'];
      $_8866[8024] = $_8866['price'];

      return array(1, 200, render_7989($_5243, $_5855, $_8866, select_6900($_5855['identity'])));
   }

   if (match('favicon.ico')) {

      return array(1, 200, base64_decode('AAABAAMAEBAAAAEAIABoBAAANgAAACAgAAABACAAKBEAAJ4EAAAwMAAAAQAgAGgmAADGFQAAKAAAABAAAAAgAAAAAQAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/30AAP/4AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD/+AAA/30AAP/4AAD//wAA//8vL///Y2P//wAA//8AAP//T0///0pK//8DA///AAD//wAA//8AAP//BAT//wIC//8AAP/4AAD//wAA//8AAP//Skr//56e//8ZGf//AAD//6Cg///Z2f//4uL//4CA//8AAP//V1f//9/f//9jY///AAD//wAA//8AAP//AAD//0pK//+fn///xMT//6+v//+env//YGD//xIS//9JSf//k5P//83N//8/P///AAD//wAA//8AAP//jIz//8fH///AwP//yMj//1hY//9oaP//7+///3Bw//8AAP//cnL//8fH///Ozv//Tk7//wAA//8AAP//AAD//wwM//8pKf//eXn//8rK//+Njf//Dg7//y4u///Fxf//bW3//9bW//8NDf//Jyf//7e3//8YGP//AAD//wAA//8AAP//AAD//0pK//+env//AAD//2tr///f3///zMz////////k5P//wcH//+fn//9KSv//AAD//wAA//8AAP//WVn//7W1///Kyv//4uL//6Gh//9ra///g4P//wwM//8MDP//DAz//wwM//+iov//Skr//wAA//8AAP//AAD//2Nj//+kpP//amr//6+v//8nJ///a2v//7S0//9ra///a2v//2tr//9ra///xsb//0pK//8AAP//AAD//wAA//8WFv//1tb//0pK//+env//AAD//ykp//9iYv//YmL//2Ji//9iYv//YmL//2Ji//8cHP//AAD//wAA//8AAP//AAD//8jI//9HR///SEj//x4e//+zs///s7P//7Oz//+zs///s7P//7Oz//+zs///s7P//zg4//8AAP//AAD//y0t//+urv//kJD//0pK//9RUf//KSn//ycn//8nJ///l5f//3x8//8nJ///Jyf//ycn//8MDP//AAD//wAA//9YWP//pKT//+bm//+QkP//kJD//zw8//+amv//mpr//87O///Bwf//mpr//5qa//87O///AAD//wAA//8AAP//AAD//wgI///r6///BQX//wAA//8XF///QED//0BA//+jo///i4v//0BA//9AQP//GRn//wAA//8AAP//AAD/+AAA//8AAP//dHT//xIS//8AAP//AAD//wAA//8AAP//TEz//zo6//8AAP//AAD//wAA//8AAP//AAD/+AAA/30AAP/4AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD/+AAA/30AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKAAAACAAAABAAAAAAQAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/wEAAP97AAD/5gAA//4AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP/+AAD/5gAA/3sAAP8BAAD/ewAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA/3sAAP/mAAD//wAA//8AAP//AAD//wAA//8AAP//Jyf//0ND//8QEP//AAD//wAA//8AAP//AAD//wAA//8fH///AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD/5gAA//4AAP//AAD//wAA//8AAP//AAD//wAA//+Vlf///////z09//8AAP//AAD//wAA//8AAP//Kyv///X1///Kyv//YWH//w0N//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//xAQ//8JCf//AAD//wAA//8AAP/+AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//5WV////////PT3//wAA//8AAP//AAD//wAA//9sbP//////////////////9vb//62t//9cXP//ERH//wAA//8AAP//AAD//xMT//+MjP//8/P//5WV//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//lZX///////89Pf//Fhb//1FR//8AAP//AAD//xgY////////19f//5GR///n5/////////////+UlP//AAD//wAA//9eXv//7e3/////////////2Nj//x8f//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//+Vlf///////z09//+srP///////7Oz//8cHP//ERH////////Bwf//AAD//wMD//9FRf//np7//4aG//8FBf//nZ3/////////////vLz//0ND//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//5WV////////Q0P//3t7///r6////////+/v//9sbP///////8HB//8AAP//AAD//wAA//8AAP//AwP//66u////////6Oj//09P//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//x8f///MzP//pKT//3x8//9VVf//ra3///////89Pf//AAD//w4O//+Fhf//9/f/////////////wcH//wAA//8AAP//AAD//wAA//+Li//////////////29v//gID//wkJ//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//R0f//////////////////////////////////+bm///Bwf//k5P//wAA//8mJv//wcH////////j4///Hh7//wAA//8AAP//QkL///39///f3///Pz///8bG////////39///1FR//8AAP//AAD//wAA//8AAP//AAD//wAA//8ICP//KSn//0RE//9gYP//fn7//9PT////////7e3///7+///5+f//AgL//wAA//8CAv//enr///v7///l5f//Li7//wUF///Y2P//+vr//zQ0//8AAP//AwP//3p6///6+v///////15e//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//lZX///////89Pf//DAz//zEx//8EBP//MzP//zw8//8AAP//Rkb///Dw///u7v//lJT///////+Jif//AAD//wAA//8GBv//GRn//0tL//+amv//AgL//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//+Vlf///////z09//8AAP//AAD//wAA///W1v///f3//4OD//+Dg///srL//////////////////5OT//+Dg///g4P//6Cg////////lZX//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//5WV////////PT3//wAA//8AAP//AAD//9bW//////////////////////////////////////////////////////////////////+Vlf//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//9qav//a2v//2tr//9ra///wcH///////+Ojv//a2v//1RU//8AAP//1tb///v7//8ZGf//GRn//xkZ//8ZGf//GRn//xkZ//8ZGf//GRn//xkZ//9QUP///////5WV//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD///z8////////////////////////////////////////ycn//wAA///W1v//+/v//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//zw8////////lZX//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//7e3///n5//9cXP//WVn//7q6////////gYH//1lZ//9GRv//AAD//9bW///7+///AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//PDz///////+Vlf//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//+fn////////z09//8AAP//lZX///////89Pf//AAD//wAA//8AAP//1tb///7+///X1///19f//9fX///X1///19f//9fX///X1///19f//9fX///g4P///////5WV//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//05O////////i4v//wAA//+Vlf///////z09//8AAP//AAD//wAA//+lpf//xcX//8XF///Fxf//xcX//8XF///Fxf//xcX//8XF///Fxf//xcX//8XF///Fxf//c3P//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//Cgr///b2///Y2P//AAD//5WV////////PT3//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//tbX///////8kJP//iYn//+vr//84OP//AAD//yMj//9nZ///Z2f//2dn//9nZ///Z2f//2dn//9nZ///Z2f//2dn//9nZ///Z2f//2dn//9nZ///Z2f//2dn//9nZ///QUH//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//9ubv///////29v//8AAP//AAD//wAA//8AAP//V1f///////////////////////////////////////////////////////////////////////////////////////+goP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//ykp////////uLj//wAA//8AAP//AAD//wAA//8bG///T0///09P//9PT///T0///09P//9PT///Vlb////////Z2f//T0///09P//9PT///T0///09P//9PT///T0///zEx//8AAP//AAD//wAA//8AAP//AAD//yIi//+Vlf//lZX///z8///29v//lZX//5WV//+Vlf//lZX//5WV//8ICP//AAD//wAA//8AAP//AAD//wAA//8JCf///////8jI//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//Ozv//////////////////////////////////////////////////w8P//8nJ///NTX//zU1//81Nf//NTX//z09////////1NT//zU1//81Nf//NTX//zU1//81Nf//KSn//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8HB///ISH//yEh//9xcf///////5yc//8hIf//ISH//yEh//8hIf//AQH//7q6///////////////////////////////////////////////////////////////////Fxf//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//yMj////////zs7//wAA//8AAP//AAD//wAA//8AAP//Xl7//4GB//+Bgf//gYH//4GB//+Ghv///////+Tk//+Bgf//gYH//4GB//+Bgf//gYH//2Rk//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//+Xl///9/f//FRX//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wkJ////////yMj//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//gAA//8AAP//AAD//wAA//8AAP//q6v///z8//9KSv//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//CQn////////IyP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//4AAP/mAAD//wAA//8AAP//AAD//wAA//8dHf//Dg7//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8BAf//KSn//yAg//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD/5gAA/3sAAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP97AAD/AQAA/3sAAP/mAAD//gAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//4AAP/mAAD/ewAA/wEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKAAAADAAAABgAAAAAQAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8QAAD/XQAA/8YAAP/2AAD//gAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//4AAP/2AAD/yQAA/2EAAP8QAAAAAAAA/woAAP+UAAD/9gAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//kAAP+UAAD/EAAA/1YAAP/5AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP/5AAD/YQAA/8QAAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8CAv//FRX//xkZ//8SEv//AgL//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8EBP//DQ3//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD/yAAA//UAAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8QEP//pKT//8PD//+QkP//ERH//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//9ERP//oKD//19f//8ZGf//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD/9gAA//4AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8WFv//19f///////+8vP//Fhb//wAA//8AAP//AAD//wAA//8AAP//AAD//xER///ExP///v7///f3///d3f//jo7//ygo//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//Li7//x0d//8AAP//AAD//wAA//8AAP//AAD//gAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8WFv//19f///////+8vP//Fhb//wAA//8AAP//AAD//wAA//8AAP//AAD//zg4///z8/////////////////////////v7//++vv//ZWX//ycn//8TE///AgL//wAA//8AAP//AAD//wAA//8AAP//Cwv//zQ0//+oqP//9/f//729//8ODv//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8WFv//19f///////+8vP//Fhb//wAA//8CAv//AQH//wAA//8AAP//AAD//wwM//+zs/////////z8///y8v///f3//////////////////+rq//+0tP//MTH//wAA//8AAP//AAD//wIC//82Nv//mJj//+zs//////////////f3//92dv//CAj//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8WFv//19f///////+8vP//Fhb//wkJ//+MjP//ZGT//wAA//8AAP//AAD//wQE//+Skv////////Dw//9ZWf//Wlr//7y8///7+///////////////////UFD//wAA//8AAP//AAD//2lp///n5////f3//////////////////9vb//9gYP//CAj//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8WFv//19f///////+8vP//Fxf//0pK///29v///////7a2//8uLv//BAT//wQE//+QkP///////+/v//9CQv//AAD//wEB//8rK///hob//9LS///r6///T0///wAA//8YGP//nJz//////////////////+/v//+5uf//UFD//wIC//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8WFv//19f///////+8vP//ISH//8DA///+/v////////7+///Y2P//cnL//xIS//+QkP///////+/v//9CQv//AAD//wAA//8AAP//AAD//xAQ//9MTP//IyP//xgY//+srP//+fn////////39///tLT//1ZW//8ODv//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8WFv//19f///////+8vP//GRn//x4e//+Fhf//8fH/////////////+Pj//8rK//+4uP///////+/v//9BQf//AAD//wAA//8AAP//AAD//wAA//8AAP//CQn//8DA///8/P////////X1//9ra///Dw///wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wUF//92dv//oqL//3h4//9LS///Li7//yIi//8tLf//2tr///////+8vP//Fhb//wAA//8AAP//JSX//6Wl///s7P///f3//////////////////+/v//9CQv//AAD//wAA//8AAP//AAD//wAA//8LC///oqL///////////////////v7//+oqP//MDD//wYG//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//w0N//+zs//////////////+/v//9PT//9zc///IyP//9PT////////X1///amr//0dH//8xMf//GBj//wUF//9QUP//trb///39//////////////Dw//9FRf//AAD//wAA//8AAP//AAD//wMD//9qav//8vL///7+///Y2P//xsb///7+////////4eH//4WF//8kJP//AQH//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//xMT///Ozv/////////////////////////////////////////////9/f//9vb///Hx///r6///x8f//wAA//8AAP//Dg7//19f///t7f////////39//+srP//ExP//wAA//8AAP//AAD//xoa///e3v///v7///Hx//9OTv//ERH//2ho///w8P////////z8///c3P//Y2P//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wMD//8pKf//SUn//2Vl//+Fhf//pKT//8PD///X1///+Pj////////7+///+Pj///7+////////8PD//wEB//8AAP//AAD//wAA//9AQP//y8v///z8////////u7v//x4e//8AAP//AwP//5mZ/////////Pz//4aG//8AAP//AAD//wEB//9DQ///y8v///z8/////////////6Sk//8ICP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8iIv//2tr////////V1f//eXn//4OD//+env//trb//wsL//8AAP//AAD//wAA//8AAP//IyP//5mZ///29v///////8fH//8zM///QkL///j4////////trb//woK//8AAP//AAD//wAA//8AAP//ISH//5KS///y8v//6Oj//01N//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8WFv//19f///////+8vP//Fhb//wEB//8HB///DQ3//wEB//8kJP//ZWX//2tr//80NP//AAD//woK//97e///9fX///39///S0v//3d3////////m5v//MTH//wAA//8AAP//AAD//wIC//8gIP//LCz//y8v//9gYP//QUH//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8WFv//19f///////+8vP//Fhb//wAA//8AAP//AAD//wAA//9WVv//7+////7+//+Xl///Njb//zY2//85Of//rKz///////////////////////+zs///Pz///zY2//82Nv//Njb//0JC///Kyv///////+Tk//8WFv//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8WFv//19f///////+8vP//Fhb//wAA//8AAP//AAD//wAA//9WVv//7+///////////////////////////////////////////////////////////////////////////////////////////////////+Tk//8WFv//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8WFv//19f///////+8vP//Fhb//wAA//8AAP//AAD//wAA//9WVv//7+///////////////////////////////////////////////////////////////////////////////////////////////////+Tk//8WFv//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8TE///KCj//ygo//8oKP//KCj//ygo//86Ov//3d3////////Hx///Ozv//ygo//8oKP//Ghr//wAA//9WVv//7+////7+//+Rkf//KSn//ykp//8pKf//KSn//ykp//8pKf//KSn//ykp//8pKf//KSn//ykp//8pKf//KSn//zY2///Gxv///////+Tk//8WFv//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//9zc///6ur//+vr///r6///6+v//+vr///s7P//+/v////////5+f//7Oz//+vr///r6///mpr//wAA//9WVv//7+////7+//98fP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//w8P//+8vP///////+Tk//8WFv//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//99ff///v7/////////////////////////////////////////////////////////////qKj//wAA//9WVv//7+////7+//98fP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//w8P//+8vP///////+Tk//8WFv//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//93d///+/v///39///Cwv//kZH//5GR//+amv//7e3////////i4v//m5v//5GR//+Rkf//X1///wAA//9WVv//7+////7+//98fP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//w8P//+8vP///////+Tk//8WFv//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//9KSv//6+v///7+//+Vlf//CQn//wAA//8WFv//19f///////+8vP//Fhb//wAA//8AAP//AAD//wAA//9WVv//7+////7+//+oqP//V1f//1dX//9XV///V1f//1dX//9XV///V1f//1dX//9XV///V1f//1dX//9XV///V1f//2Fh///T0////////+Tk//8WFv//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8REf//1NT////////Ly///HBz//wAA//8WFv//19f///////+8vP//Fhb//wAA//8AAP//AAD//wAA//9WVv//7+////7+///5+f//9fX///X1///19f//9fX///X1///19f//9fX///X1///19f//9fX///X1///19f//9fX///X1///8/P///////+Tk//8WFv//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//lJT////////39///ODj//wAA//8WFv//19f///////+8vP//Fhb//wAA//8AAP//AAD//wAA//9PT///29v//+np///p6f//6en//+np///p6f//6en//+np///p6f//6en//+np///p6f//6en//+np///p6f//6en//+np///p6f//6en//9HR//8UFP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//QED/////////////gYH//wAA//8WFv//19f///////+8vP//Fhb//wAA//8AAP//AAD//wAA//8XF///QUH//0VF//9FRf//RUX//0VF//9FRf//RUX//0VF//9FRf//RUX//0VF//9FRf//RUX//0VF//9FRf//RUX//0VF//9FRf//RUX//z4+//8GBv//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//BAT//+Pj////////19f//wAA//8WFv//19f///////+8vP//Fhb//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//5KS/////////////ysr//8VFf//0dH///f3//+2tv//Fhb//wAA//8AAP//FRX//yYm//8mJv//Jib//yYm//8mJv//Jib//yYm//8mJv//Jib//yYm//8mJv//Jib//yYm//8mJv//Jib//yYm//8mJv//Jib//yYm//8mJv//Jib//yYm//8mJv//Jib//yMj//8EBP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//0JC///8/P///////4GB//8JCf//Wlr//2tr//9PT///CQn//wAA//8AAP//gID//+fn///n5///5+f//+fn///n5///5+f//+fn///n5///5+f//+fn///n5///5+f//+fn///n5///5+f//+fn///n5///5+f//+fn///n5///5+f//+fn///n5///5+f//9HR//8dHf//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//xkZ///f3////////9PT//8EBP//AAD//wAA//8AAP//AAD//wAA//8AAP//jo7//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////+fn//8gIP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wwM//+zs////////+rq//8tLf//AAD//wAA//8AAP//AAD//wAA//8AAP//R0f//4GB//+Bgf//gYH//4GB//+Bgf//gYH//4GB//+Bgf//gYH//4KC///ExP////////j4//+lpf//gYH//4GB//+Bgf//gYH//4GB//+Bgf//gYH//4GB//+Bgf//gYH//3V1//8QEP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wEB//8PD///FRX//xgY//+UlP///f3///b2//9nZ///FRX//xUV//8VFf//FRX//xUV//8VFf//FRX//wIC//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wIC//+Jif////////Hx//9JSf//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//w0N//+np///5OT//+Tk///x8f///v7///7+///v7///5OT//+Tk///k5P//5OT//+Tk///k5P//5OT//xcX//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wIC//+Jif////////Hx//9JSf//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//w4O//+6uv///////////////////////////////////////////////////////////////////////xoa//8EBP//EhL//xQU//8UFP//FBT//xQU//8UFP//FBT//xYW//+Skv////////Ly//9XV///FBT//xQU//8UFP//FBT//xQU//8UFP//FBT//xIS//8FBf//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wkJ//91df//oaH//6Gh//+hof//4eH////////9/f//s7P//6Gh//+hof//oaH//6Gh//+hof//oaH//xAQ//8pKf//oqL//7W1//+1tf//tbX//7W1//+1tf//tbX//7W1///c3P////////v7///Kyv//tbX//7W1//+1tf//tbX//7W1//+1tf//tbX//6qq//8xMf//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8GBv//CAj//wgI//8ICP//ior////////+/v//XV3//wgI//8ICP//CAj//wgI//8ICP//CAj//wAA//87O///5eX///////////////////////////////////////////////////////////////////////////////////////////////////Dw//9GRv//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//SEj/////////////np7//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8wMP//urr//8/P///Pz///z8///8/P///Pz///z8///9DQ///p6f////////z8///d3f//z8///8/P///Pz///z8///8/P///Pz///z8///8TE//85Of//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//EBD///X1////////4uL//wQE//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AQH//wIC//8CAv//AgL//wIC//8CAv//AgL//wQE//+Kiv////////Hx//9KSv//AgL//wIC//8CAv//AgL//wIC//8CAv//AgL//wEB//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//7+//////////v7//zk5//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wIC//+Jif////////Hx//9JSf//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//4AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//3x8/////////f3//319//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wIC//+Jif////////Hx//9JSf//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//gAA//UAAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//zQ0//+oqP//goL//0RE//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wEB//9aWv//qan//5+f//8wMP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD/9gAA/8EAAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wIC//8KCv//AQH//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8FBf//Cgr//wkJ//8CAv//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD/xQAA/1EAAP/2AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP/2AAD/XAAA/woAAP+UAAD/9gAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//kAAP+UAAD/EAAAAAAAAP8KAAD/UgAA/8AAAP/1AAD//gAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//4AAP/1AAD/wwAA/1cAAP8KAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=='), 'image/x-icon');
   }

   if (match('log-in')) {

      return array(1, 200, render_8304($_5243, $_5855, select_6900($_5855['identity'])));
   }

   if (match('log-in', '')) {

      return array(1, 200, render_8304($_5243, $_5855, select_6900($_5855['identity'])));
   }

   if (match('log-in-1429')) {

      while (insert_8703($_3836 = rand(1000000000, 2147483647)) == 0) {

         continue;
      }

      if (count($_9988 = get_row_from_tabular_result(select_2975(md5(get_parameter(3806)), get_parameter(4555)))) == 0) {

         return array(2, 302, '/log-in');
      }

      if (insert_4752($_9988['identity'], get_pentadic_chronogram(time(), 'Asia/Singapore'), $_3836, get_regulative_address(get_environmental_parameter('ADDRESS_OF_VISITOR')), 1) == 0) {

         die();
      }

      return array(2, 302, '/', $_3836);
   }

   if (match('log-out')) {

      while (insert_8703($_9337 = rand(1000000000, 2147483647)) == 0) {

         continue;
      }

      if (insert_4752('0000000000', get_pentadic_chronogram(time(), 'Asia/Singapore'), $_9337, get_regulative_address(get_environmental_parameter('ADDRESS_OF_VISITOR')), 1) == 0) {

         die();
      }

      return array(2, 302, '/', $_9337);
   }

   if (match('remove-merchandise-from-basket-5351')) {

      delete_8981(get_parameter('merchandise'), $_5855['identity']);

      return array(2, 302, '/view-basket');
   }

   if (match('send-message-5871')) {

      $_6383 = array('recipient' => get_parameter('recipient'), 'sender' => array('identity' => $_5243['identity'], 'name' => $_5243['name']), 'text' => get_parameter('text'));
      $_9110 = send_3960('period-0000000000', 'event-1', json_encode($_6383));

      return array(1, 200, '', 'text/plain');
   }

   if (match('submit-merchandise')) {

      return array(1, 200, render_3061($_5243, $_5855, select_6900($_5855['identity'])));
   }

   if (match('submit-merchandise-1020')) {

      while (insert_8703($_7401 = rand(1000000000, 2147483647)) == 0) {

         continue;
      }

      /* expiration */
      /* image */
      /* minimum */
      /* price */
      /* supply */
      /* summary */
      /* title */

      $_8542 = substr(get_pentadic_chronogram(@strtotime(get_parameter('expiration', '2022-12-31')), 'Asia/Singapore'), 0, 10) . '-2359-59';
      $_3716 = get_parameter('image', 'https://i.imgur.com/C3yxCLA.png');
      $_2734 = str_pad(intval(get_parameter('minimum', '1')), 4, 0, 0);
      $_6546 = str_pad(intval(get_parameter('price', '1')), 7, 0, 0);
      $_5506 = get_parameter('summary');
      $_6214 = str_pad(intval(get_parameter('supply', '1')), 4, 0, 0);
      $_9587 = get_parameter('title');

      if (insert_4097('0x25884b5248d612737089f26fee7163206ff79301', get_pentadic_chronogram(time(), 'Asia/Singapore'), $_8542, $_7401, $_3716, $_2734, $_6546, $_5506, $_6214, $_9587, '0x25884b5248d612737089f26fee7163206ff79301') == 0) {

         return array(1, 500, 'There was an internal error.', 'text/plain');
      }

      return array(2, 302, sprintf('/examine/%s', $_7401));
   }

   if (match('submit-order-6014')) {


   }

   if (match('update-cache')) {

      if (rand(1, 9) == 4) {

         $_8386 = get_cell_from_tabular_result(select_7599('ORDERS'), 'value');
         update_7957(get_pentadic_chronogram(time(), 'Asia/Singapore'), 'ORDERS', $_8386 + 1);
         close_storage();
         send_3960('period-0000000000', 'event-2', json_encode(array('name' => 'ORDERS', 'value' => $_8386 + 1)));
      }

      if (rand(1, 9) == 4) {

         $_8386 = get_cell_from_tabular_result(select_7599('COMMENTS'), 'value');
         update_7957(get_pentadic_chronogram(time(), 'Asia/Singapore'), 'COMMENTS', $_8386 + 1);
         close_storage();
         send_3960('period-0000000000', 'event-2', json_encode(array('name' => 'COMMENTS', 'value' => $_8386 + 1)));
      }

      $_7678 = 0;

      foreach (($_3403 = select_3927(get_pentadic_chronogram(time(), 'Asia/Singapore'))) as $_3461) {

         $_7678 += intval(ltrim($_3461['supply'], '0'));
      }

      if (get_cell_from_tabular_result(select_7599('TOTAL_SUPPLY_OF_MERCHANDISE'), 'value') != $_7678) {

         update_7957(get_pentadic_chronogram(time(), 'Asia/Singapore'), 'TOTAL_SUPPLY_OF_MERCHANDISE', $_7678);
         close_storage();
         send_3960('period-0000000000', 'event-2', json_encode(array('name' => 'TOTAL_SUPPLY_OF_MERCHANDISE', 'value' => $_7678)));
      }

      if (get_cell_from_tabular_result(select_7599('KINDS_OF_MERCHANDISE'), 'value') != count($_3403)) {

         update_7957(get_pentadic_chronogram(time(), 'Asia/Singapore'), 'KINDS_OF_MERCHANDISE', count($_3403));
         close_storage();
         send_3960('period-0000000000', 'event-2', json_encode(array('name' => 'KINDS_OF_MERCHANDISE', 'value' => count($_3403))));
      }

      delete_7421($_5855['identity']);
      delete_9750($_7264);
      $_8386 = get_cell_from_tabular_result(select_7599('HEIGHT_OF_BLOCKCHAIN'), 'value');

      close_storage();
      $_4740 = hexdec(substr(json_decode(send_4243()[2], true)['result'], 2));
      update_7957(get_pentadic_chronogram(time(), 'Asia/Singapore'), 'HEIGHT_OF_BLOCKCHAIN', $_4740);
      close_storage();
      send_3960('period-0000000000', 'event-2', json_encode(array('name' => 'HEIGHT_OF_BLOCKCHAIN', 'value' => $_4740)));

      
      die();
   }

   if (match('view-basket')) {

      foreach (($_2702 = select_6900($_5855['identity'])) as $_6824 => $_7401) {

         if (count($_1812 = get_row_from_tabular_result(select_3741($_7401['merchandise']))) == 0) {

            unset($_2702[$_6824]); continue;
         }

         $_2836 += ltrim($_1812['price'], '0') * ltrim($_7401['quantity'], '0');

         $_2702[$_6824][5788] = 'a' . rand(1000000, 9999999); /* */
         $_2702[$_6824][8228] = 'a' . rand(1000000, 9999999); /* */

         $_2702[$_6824][3584] = sprintf('%s/remove-merchandise-from-basket-5351?merchandise=%s', get_environmental_parameter('BASIC_LOCATION'), $_1812['identity']);
         $_2702[$_6824][9821] = $_1812['image'];
         $_2702[$_6824][3989] = $_1812['price'];
         $_2702[$_6824][2862] = $_1812['title'];
         $_2702[$_6824][6753] = $_1812['identity'];
      }

      return array(1, 200, render_3623($_5243, $_5855, $_2702, $_2836));
   }

   return array(1, 404, render_2877($_5243, $_5855, select_6900($_5855['identity'])), 'text/html');
}

function send_3960($_8407, $_1933, $_6968) {

   $_4592 = json_encode(array('channel' => $_8407, 'data' => $_6968, 'name' => $_1933));
   $_8394 = array('auth_key' => '03f1e5103b3bb81c9ccd', 'auth_timestamp' => $_7861 = time(), 'auth_version' => '1.0', 'body_md5' => md5($_4592));

   for (list($_4532, $_9842, $_5235) = array(0, array_keys($_8394), ''); $_4532 <= count($_9842); $_4532++) {

      if ($_4532 == count($_9842)) {

         $_5235 = substr($_5235, 1); break;
      }

      $_5235 = $_5235 . sprintf('&%s=%s', $_9842[$_4532], $_8394[$_9842[$_4532]]);
   }

   $_8394['auth_signature'] = hash_hmac('sha256', sprintf('POST%c%s%c%s', 10, '/apps/1497684/events', 10, $_5235), 'c6a64d462da4143dfaab');

   for (list($_7837, $_2539, $_2556) = array(0, array_keys($_8394), ''); $_7837 <= count($_2539); $_7837++) {

      if ($_7837 == count($_2539)) {

         $_2556 = substr($_2556, 1); break;
      }

      $_2556 = $_2556 . sprintf('&%s=%s', urlencode($_2539[$_7837]), urlencode($_8394[$_2539[$_7837]]));
   }

   $_8978 = curl_init();
   curl_setopt($_8978, 12, 60);
   curl_setopt($_8978, 32, 6);
   curl_setopt($_8978, 52, 1);
   curl_setopt($_8978, 64, 0);
   curl_setopt($_8978, 78, 60);
   curl_setopt($_8978, 81, 0);
   curl_setopt($_8978, 10002, sprintf('https://api-ap1.pusher.com/apps/1497684/events?%s', $_2556));
   curl_setopt($_8978, 10015, $_4592);
   curl_setopt($_8978, 10023, array('Content-Type: application/json'));
   curl_setopt($_8978, 19913, 1);
   $_5465 = curl_exec($_8978);

   if (($_8643 = curl_errno($_8978)) != 0) {

      $_2078 = curl_error($_8978);
      curl_close($_8978);

      return array($_8643, 0, $_2078);
   }

   $_1845 = curl_getinfo($_8978, 2097154);
   curl_close($_8978);

   return array(0, $_1845, $_5465);
}

function send_4243() {

   /* Rename. */

   $_8978 = curl_init();
   curl_setopt($_8978, 12, 60);
   curl_setopt($_8978, 32, 6);
   curl_setopt($_8978, 52, 1);
   curl_setopt($_8978, 64, 0);
   curl_setopt($_8978, 78, 60);
   curl_setopt($_8978, 81, 0);
   curl_setopt($_8978, 10002, 'https://goerli.infura.io/v3/fe53d0a0a9854efc8a654151b399b7c8');
   curl_setopt($_8978, 10015, json_encode(array('id' => 1, 'jsonrpc' => '2.0', 'method' => 'eth_blockNumber', 'params' => array())));
   curl_setopt($_8978, 10023, array('Content-Type: application/json'));
   curl_setopt($_8978, 19913, 1);
   $_5465 = curl_exec($_8978);

   if (($_8643 = curl_errno($_8978)) != 0) {

      $_2078 = curl_error($_8978);
      curl_close($_8978);

      return array($_8643, 0, $_2078);
   }

   $_1845 = curl_getinfo($_8978, 2097154);
   curl_close($_8978);

   return array(0, $_1845, $_5465);
}
