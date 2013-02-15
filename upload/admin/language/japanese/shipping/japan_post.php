<?php
///////////////////////////////////////////////////////////////////////////////////////
// opencart1.4.7【日本語版】
// opencart.jp
// japan_post.php
// このファイルは、日本郵便のゆうパックの配送モジュールです。(admin/language/japanese/shipping)
// ver 1.0.0 Coding By sae
// GPL ver 3
///////////////////////////////////////////////////////////////////////////////////////
// Heading
$_['heading_title']    = 'ゆうパック';

// Text
$_['text_shipping']    = '配送';
$_['text_success']     = 'ゆうパックの設定変更に成功しました。:';
$_['text_shipping']    = '配送業者設定';
$_['text_exe']         = '購入金額が5000円未満が送料500円、5000円以上10000円未満が800円、1万円以上が無料の場合は以下の例のように入力します。
                    <div style="padding:10px; background-color:#FFCCCC;">例）<input type="text" size="50" disabled="disabled" value="0:5000:500,5000:10000:800,10000:10000000:0" />&nbsp;円</div>以上の例でもわかるように、無料にする場合は、購入金額としてはありえない金額をいれてますよね・・そのように設定して下さい。';
$_['text_stop']        = '郵便局留めを利用する';
// Entry
$_['entry_zone']       = '配送元の都道府県:';
$_['entry_district']   = '地方別設定:';
$_['entry_evenly']     = '全国一律料金:';
$_['entry_purchase']   = '購入金額別:';
$_['entry_time']       = '配送時間帯:';
$_['entry_postcode']   = 'ポストコード:';
$_['entry_handling']   = '手数料:';
$_['entry_estimate']   = '送出予想表示:';
$_['entry_tax']        = '税区分:';
$_['entry_geo_zone']   = 'Geoゾーン:';
$_['entry_status']     = 'ステータス:';
$_['entry_sort_order'] = '表示順:';
$_['entry_district_free'] = '送料を無料にする金額:';
$_['entry_evenly_free'] = '送料を無料にする金額（' . $_['entry_evenly'] . '）:';
//zone
$_['hokkaido']         = '北海道:';
$_['touhoku']          = '東　北:';
$_['kantou']           = '関　東:';
$_['shinetsu']         = '信　越:';
$_['hokuriku']         = '北　陸:';
$_['toukai']           = '東　海:';
$_['kinki']            = '近　畿:';
$_['chugoku']          = '中　国:';
$_['shikoku']          = '四　国:';
$_['kyusyu']           = '九　州:';
$_['okinawa']          = '沖　縄:';
$_['zenkoku']          = '全　国:';

// Error
$_['error_permission'] = 'ゆうパックを修正する許可がありません。';
$_['error_postcode']   = 'ポストコードは4桁必要です。';

//select
$_['selected_default'] = '選択してください';
?>