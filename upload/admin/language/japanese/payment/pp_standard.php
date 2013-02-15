<?php
// Heading
$_['heading_title']						= 'PayPalスタンダード';

// Text
$_['text_payment']						= '支払設定';
$_['text_success']						= '完了: PayPalスタンダードの編集をいたしました。';
$_['text_pp_standard']					= '<a onclick="window.open(\'https://cms.paypal.com/jp/cgi-bin/marketingweb?cmd=_render-content&content_ID=marketing_jp/WebsitePaymentsStandard&nav=3.1.2\');"><img src="view/image/payment/paypal.png" alt="PayPal" title="PayPal" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorization']				= 'Authorization';
$_['text_sale']							= 'Sale';

// Entry
$_['entry_email']						= 'Ｅメール:<br /><span class="help">もちろんペイパルのアカウントで登録しているメルアドです。</span>';
$_['entry_test']						= 'Sandbox モード(テストモード):';
$_['entry_transaction']					= 'トランザクション(承認と回収):';
$_['entry_debug']						= 'デバッグモード:<br/><span class="help">システムログにログを残します。</span>';
$_['entry_total']						= '総額:<br /><span class="help">支払総額がこの金額以上になった場合に有効になります。</span>';
$_['entry_canceled_reversal_status']	= 'Canceled Reversal Status:<br /><span class="help">キャンセルが取消になった場合のステータス。</span>';
$_['entry_completed_status']			= 'Completed Status:<br /><span class="help">支払いが正常に完了した場合のステータス。</span>';
$_['entry_denied_status']				= 'Denied Status:<br /><span class="help">顧客からの送金を拒否した場合のステータス。</span>';
$_['entry_expired_status']				= 'Expired Status:<br /><span class="help">支払期限が切れた場合のステータス。</span>';
$_['entry_failed_status']				= 'Failed Status:<br /><span class="help">支払いが失敗した場合のステータス。</span>';
$_['entry_pending_status']				= 'Pending Status:<br /><span class="help">受取人が口座へクレジットカードを登録していないため、送金が完了していない場合のステータス。</span>';
$_['entry_processed_status']			= 'Processed Status:';
$_['entry_refunded_status']				= 'Refunded Status:<br /><span class="help">払い戻しの場合のステータス。</span>';
$_['entry_reversed_status']				= 'Reversed Status:<br /><span class="help">支払いがチャージバックまたは他のタイプでも返金された場合のステータス。金額は顧客に返されます。返金の理由は、reason_code変数によって与えられます。</span>';
$_['entry_voided_status']				= 'Voided Status:';
$_['entry_geo_zone']					= 'ジオゾーン:';
$_['entry_status']						= 'ステータス:';
$_['entry_sort_order']					= '表示順:';

// Error
$_['error_permission']					= 'エラー: PayPalを編集する権限がありません。';
$_['error_email']						= 'メールアドレスは必須項目です。';
?>
