1) file1: catalog/model/checkout/order.php
search:
$emails = explode(',', $this->config->get('config_alert_email'));

replace:
$emails = explode(',', $this->config->get('config_mail_alert_email'));


2) File2: admin/controller/setting/setting.php
search:
if (isset($this->request->post['config_alert_email'])) {

replace:
if (isset($this->request->post['config_mail_alert_email'])) {
	$data['config_mail_alert_email'] = $this->request->post['config_mail_alert_email'];
} else {
	$data['config_mail_alert_email'] = $this->config->get('config_mail_alert_email');
}


3) File3: admin/view/template/setting/setting.tpl
Search:
$config_alert_email;

replace:
$config_mail_alert_email;
