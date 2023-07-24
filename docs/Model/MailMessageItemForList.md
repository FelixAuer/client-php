# # MailMessageItemForList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the mail message. | [optional]
**from** | [**\Pipedrive\Model\MailParticipant[]**](MailParticipant.md) | The array of mail message sender (object) | [optional]
**to** | [**\Pipedrive\Model\MailParticipant[]**](MailParticipant.md) | The array of mail message receiver (object) | [optional]
**cc** | [**\Pipedrive\Model\MailParticipant[]**](MailParticipant.md) | The array of mail message copies (object) | [optional]
**bcc** | [**\Pipedrive\Model\MailParticipant[]**](MailParticipant.md) | The array of mail message blind copies (object) | [optional]
**body_url** | **string** | The mail message body URL | [optional]
**account_id** | **string** | The connection account ID | [optional]
**user_id** | **int** | ID of the user whom mail message will be assigned to | [optional]
**mail_thread_id** | **int** | ID of the mail message thread | [optional]
**subject** | **string** | The subject of mail message | [optional]
**snippet** | **string** | The snippet of mail message. Snippet length is up to 225 characters. | [optional]
**mail_tracking_status** | **string** | The status of tracking mail message. Value is &#x60;null&#x60; if tracking is not enabled. | [optional]
**mail_link_tracking_enabled_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether the link tracking in mail message body is enabled. | [optional]
**read_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether the mail message is read or not by the user | [optional]
**draft** | **string** | If the mail message has a draft status then the value is the mail message object as JSON formatted string, otherwise &#x60;null&#x60;. | [optional]
**draft_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether the mail message is a draft or not | [optional]
**synced_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether the mail message is synced with the provider or not | [optional]
**deleted_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether the mail message is deleted or not | [optional]
**has_body_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether the mail message has a body or not | [optional]
**sent_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether the mail message has been sent or not | [optional]
**sent_from_pipedrive_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether the mail message has been sent from Pipedrive app or not | [optional]
**smart_bcc_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether the mail message has been created by Smart Email BCC feature or not | [optional]
**message_time** | **\DateTime** | Creation or receival time of the mail message | [optional]
**add_time** | **\DateTime** | The insertion into the database time of the mail message | [optional]
**update_time** | **\DateTime** | The updating time in the database of the mail message | [optional]
**has_attachments_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether the mail message has an attachment or not | [optional]
**has_inline_attachments_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether the mail message has an inline attachment or not | [optional]
**has_real_attachments_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether the mail message has an attachment (which is not inline) or not | [optional]
**nylas_id** | **string** | The Mail Message ID assigned by the sync provider | [optional]
**s3_bucket** | **string** | The name of the S3 bucket | [optional]
**s3_bucket_path** | **string** | The path of the S3 bucket | [optional]
**external_deleted_flag** | **bool** | If the Mail Message has been deleted on the provider side or not | [optional]
**mua_message_id** | **string** | The Mail Message ID assigned by the mail user agent | [optional]
**template_id** | **int** | The ID of the mail template | [optional]
**timestamp** | **string** | The add date and time of the Mail Message | [optional]
**item_type** | **string** | The type of the data item | [optional]
**company_id** | **int** | The ID of the company | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)