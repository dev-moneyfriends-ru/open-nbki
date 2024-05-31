2.1
----
- Добавлена обработка событий EVENT_3_3, EVENT_4_2
- Добавлена поддержка RUTDF62
- В шаблоне формирования файла для передачи данных RutdfTemplate, теперь можно задать код события
- Метод \mfteam\nbch\models\AccountReplyRUTDF::setPastdueArrearArray переименован в setPastdueArrear
- Блок C29MonthAverPaymt теперь обязателен для передачи, но может не заполнятся. Однака в случае закрытия договора по ФЛ\ИП
Необходимо передавать показатель \mfteam\nbch\models\MonthAverPaymtRUTDF::$averPaymtAmt = 0

2.0
----

- Удален компонент tutdf
- \mfteam\nbch\models\Account теперь abstract class
- \mfteam\nbch\models\Business теперь abstract class
- Обновлены модели данных RUTDF, приведены в соответствие формату 6.0
- Объявлены deprecated классы, будут удалены в версии 3.0:

\mfteam\nbch\models\AccountRating более не используется;<br>
\mfteam\nbch\models\BalanceValue более не используется;<br>
\mfteam\nbch\models\BankGuarantee более не используется;<br>
\mfteam\nbch\models\BusinessClassification более не используется;<br>
\mfteam\nbch\models\Calc более не используется;<br>
\mfteam\nbch\models\LoanKind более не используется;<br>
\mfteam\nbch\models\NbchOfferInterface более не используется;<br>
\mfteam\nbch\models\NbchSubjectInterface более не используется;<br>
\mfteam\nbch\models\NbchSubjectPassportInterface более не используется;<br>
\mfteam\nbch\models\NbchUuid более не используется;<br>
\mfteam\nbch\models\NbchUuidQuery более не используется;<br>
\mfteam\nbch\models\Offer более не используется;<br>
\mfteam\nbch\models\PaymentFrequency более не используется;<br>
\mfteam\nbch\models\Phone более не используется;<br>
\mfteam\nbch\models\Subject более не используется;<br>

\mfteam\nbch\models\AccountReply заменен на AccountReplyRUTDF;<br>
\mfteam\nbch\models\Address заменен на AddressReplyRUTDF;<br>
\mfteam\nbch\models\Amendment заменен на AmendmentRUTDF;<br>
\mfteam\nbch\models\Collateral заменен на CollateralRUTDF;<br>
\mfteam\nbch\models\Consent заменен на ConsentReq;<br>
\mfteam\nbch\models\Guarantor заменен на GuarantorRUTDF;<br>
\mfteam\nbch\models\Identification заменен на IdReply;<br>
\mfteam\nbch\models\Inquiry заменен на InquiryReq;<br>
\mfteam\nbch\models\InquiryReply заменен на InquiryReplyRUTDF;<br>
\mfteam\nbch\models\Passport заменен на IdReply;<br>
\mfteam\nbch\models\Payment заменен на PaymentRUTDF;<br>
\mfteam\nbch\models\Person заменен на PersonReply;<br>
\mfteam\nbch\models\Requestor заменен на RequestorReq;<br>
\mfteam\nbch\models\Trade заменен на TradeRUTDF;<br>

\mfteam\nbch\models\BaseSendNbchRequestInterface следует использовать mfteam\nbch\models\rutdf\BaseSendNbchRequestInterface;<br>

\mfteam\nbch\models\NbchChRequest следует использовать mfteam\nbch\models\creditHistory\NbchChRequest;<br>

\mfteam\nbch\models\NbchChRequestQuery следует использовать mfteam\nbch\models\creditHistory\NbchChRequestQuery;<br>

\mfteam\nbch\models\NbchConsent следует использовать mfteam\nbch\models\creditHistory\NbchConsent;<br>

\mfteam\nbch\models\NbchConsentQuery следует использовать mfteam\nbch\models\creditHistory\NbchConsentQuery;<br>

\mfteam\nbch\models\NbchConsentRelations следует использовать mfteam\nbch\models\creditHistory\NbchConsentRelations;<br>

\mfteam\nbch\models\NbchConsentRelationsQuery следует использовать
mfteam\nbch\models\creditHistory\NbchConsentRelationsQuery;<br>

\mfteam\nbch\models\NbchConsentSearch следует использовать mfteam\nbch\models\creditHistory\NbchConsentSearch;<br>

\mfteam\nbch\models\NbchControl следует использовать mfteam\nbch\models\control\NbchControl;<br>

\mfteam\nbch\models\NbchControlQuery следует использовать mfteam\nbch\models\control\NbchControlQuery;<br>

- mfteam\nbch\models\rutdf\NbchEvents событие EVENT_1_4 удалено. Вместо него добавлены
  EVENT_1_4A,
  EVENT_1_4B,
  EVENT_1_4C
- mfteam\nbch\models\rutdf\NbchEvents событие EVENT_2_1 удалено. Вместо него добавлены
  EVENT_2_1A,
  EVENT_2_1B
- mfteam\nbch\models\rutdf\NbchEvents событие EVENT_2_2_1 удалено. Вместо него добавлены
  EVENT_2_2_1A,
  EVENT_2_2_1B
- mfteam\nbch\models\rutdf\NbchEvents добавлены события
  EVENT_1_10,
  EVENT_2_10,
  EVENT_2_11,
  EVENT_2_11_1A,
  EVENT_2_11_1B,
  EVENT_2_12,
- mfteam\nbch\models\rutdf\NbchEvents событие EVENT_2_3_1 заменено на EVENT_2_3A
- mfteam\nbch\models\rutdf\NbchEvents событие EVENT_2_3_2 заменено на EVENT_2_3B
- mfteam\nbch\models\rutdf\NbchEvents событие EVENT_2_5_1 заменено на EVENT_2_5A
- mfteam\nbch\models\rutdf\NbchEvents событие EVENT_2_5_2 заменено на EVENT_2_5B
- Методы признаны устаревшими \mfteam\nbch\components\creditHistory\CreditHistoryComponent::setAsBusiness
\mfteam\nbch\components\creditHistory\CreditHistoryComponent::setAsCustomer
\mfteam\nbch\components\creditHistory\CreditHistoryComponent::addInquiry
\mfteam\nbch\components\creditHistory\CreditHistoryComponent::addIdentification
\mfteam\nbch\components\creditHistory\CreditHistoryComponent::addRegnumReq
\mfteam\nbch\components\creditHistory\CreditHistoryComponent::addSNILSReq
и будут удалены в октябре, вместо них используется один метод \mfteam\nbch\components\creditHistory\CreditHistoryComponent::execute
- Добавлены сегменты шаблона для новых событий. Все сегменты обновлены под новый шаблон. 

1.3.0
-----

- В объекте `trade` в параметре `pastDueDt` если ранее указывались сведения о просроченной задолженности,
  указывается ближайшая прошедшая дата возникновения просроченной задолженности.
- Версия КИ изменена на 13
- Поддержка RUTDF 4.07