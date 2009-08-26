<?php
/* GERMAN language */
/* 
Translator: Tobias Zeumer
Version:		Senayan3 Stable10 Patch1
Date:       2009-08-20
Contact:    tzeumer@verweisungsform.de

Notes:      - Some translations are "hidden" in the sysconfig.inc.php file.
            - See end of this file for some kind of "rough" dictionary
            - If you want to change anything: make your life easier by looking (searching) for the longest phrase ;)
            - "Aller Anfang ist schwer" ;)
*/


/* COMMON */
define('lang_sys_common_data_not_exists', 'FEHLER! Daten sind nicht vorhanden');
define('lang_sys_common_unauthorized', 'Sie sind nicht authorisiert diesen Bereich einzusehen');
define('lang_sys_common_no_privilege', 'Sie verf�gen nicht �ber ausreichende Rechte um diesen Bereich einzusehen');
define('lang_sys_common_timeout', 'Die Sitzungsdauer ihrer Anmeldung ist inzwischen abgelaufen!');
define('lang_sys_common_welcome', 'Willkommen im Bibliotheksmanagementsystem. Sie sind derzeitig angmeldet als ');
define('lang_sys_common_overdue', 'Derzeit fallen bei <strong>{num_overdue}</strong> Bibliotheksmitgliederen Mahngeb�hren an. N�here Informationen entnehmen Sie bitte dem Punkt <b>Mahngeb�hren</b> im Modul <b>Ausleihe</b>');
define('lang_sys_common_gd_not_loaded', '<strong>PHP GD</strong>-Erweiterung ist nicht installiert. Wenn die Anwendung Vorschaubilder und Barcodes erzeugen k�nnen soll, installieren Sie diese Erweiterung bitte.');
define('lang_sys_common_gd_freetype_not_loaded', '<strong>Freetype</strong>-Unterst�tzung ist nicht aktiviert in der PHP GD-Erweiterung. Verwenden oder erstellen Sie bitte eine Version (Build) der PHP GD-Erweiterung mit Freetype-Unterst�tzung, da die Anwendung andernfalls keine Barcodes erstellen kann.');
define('lang_sys_common_imagedir_unwritable', '<strong>Images</strong>-Verzeichnis und darunter liegende Verzeichnisse sind nicht beschreibbar. Bitte gestatten Sie den Schreibzugriff indem Sie die entsprechende Berechtigung setzen. Andernfalls ist es Ihnen nicht m�glich Bilder hochzuladen und Barcodes zu erstellen');
define('lang_sys_common_uploaddir_unwritable', '<strong>File upload</strong>-Verzeichnis ist nicht beschreibbar. Bitte gestatten Sie den Schreibzugriff (eingeschlossen der darunter liegenden Verzeichnisse) indem Sie die entsprechende Berechtigung setzen. Andernfalls ist es Ihnen nicht m�glich Dateien hochzuladen, sowie Berichtsdateien und Datenbanksicherungen zu erstellen.');
define('lang_sys_common_repodir_unwritable', '<strong>Repository</strong>-Verzeichnis ist nicht beschreibbar. Bitte gestatten Sie den Schreibzugriff (eingeschlossen der darunter liegenden Verzeichnisse) indem Sie die entsprechende Berechtigung setzen. Andernfalls ist es Ihnen nicht m�glich zu Titelaufnahmen Anh�nge hinzuzuf�gen.'); //? (bibliographic attachments)
define('lang_sys_common_dompdfdir_unwritable', '<strong>{dompdf_libdir}</strong>-Verzeichnis ist nicht beschreibbar. Bitte gestatten Sie den Schreibzugriff (eingeschlossen der darunter liegenden Verzeichnisse) indem Sie die entsprechende Berechtigung setzen, da die Anwendung andernfalls keine PDF-Dateien erstellen kann.');
define('lang_sys_common_mysqldump_not_found', 'Die Pfadangabe f�r die <strong>mysqldump</strong>-Anwendung ist inkorrekt! Bitte pr�fen Sie die Konfigurationsdatei, da Sie andernfalls keine Datenbanksicherungen durchf�hren k�nnen.');
define('lang_sys_common_tools', 'Werkzeuge');
define('lang_sys_common_confirm_delete_selected', 'Wollen Sie die ausgew�hlten Daten wirklich L�SCHEN?');
define('lang_sys_common_button_delete_selected', 'Auswahl l�schen');
define('lang_sys_common_holiday_set_error', 'H�chstens 6 Tage k�nnen als Ruhetage festgelegt sein!');
define('lang_sys_common_language_select', 'Sprache w�hlen');
define('lang_sys_common_no_privilage', 'Sie verf�gen nicht �ber ausreichende Rechte f�r den Zugriff auf diesen Bereich!');
define('lang_sys_common_year', 'Jahr');
define('lang_sys_common_month', 'Monat');
define('lang_sys_common_date', 'Datum');
# template
define('lang_template_topmenu_1','Startseite');
define('lang_template_topmenu_2','�ber die Bibliothek'); //? (Library Information)
define('lang_template_topmenu_3','Hilfe zur Suche');
define('lang_template_topmenu_4','Mitarbeiter-ANMELDUNG'); //? (Librarian LOGIN)
define('lang_template_simple_search','Einfache Suche');
define('lang_template_adv_search','Erweiterte Suche');
# login and logout
define('lang_sys_login_javastatus','Ihr Browser unterst�tzt keine JavaScript oder die Unterst�tzung wurde deaktiviert. JavaScript ist f�r diese Anwendung erforderlich!');
define('lang_sys_login_alert', 'Bitte geben Sie einen g�ltigen Benutzernamne und ein g�ltiges Passwort an');
define('lang_sys_login_alert_ok', 'Willkommen im Bibliotheksmanagementsystem, ');
define('lang_sys_login_alert_fail', 'Benutzername oder Passwort sind inkorrekt. ZUGRIFF VERWEIGERT');
define('lang_sys_logout_alert', 'Sie wurden vom Bibliotheksmanagementsystem abgemeldet');
# system module submenu
define('lang_sys_mod', 'System');
define('lang_sys_configuration', 'Systemkonfiguration');
define('lang_sys_configuration_titletag', 'Globale Systemeinstellungen konfigurieren');
define('lang_sys_configuration_description', 'Globale Anwendungseinstellungen anpassen');
define('lang_sys_modules', 'Module');
define('lang_sys_modules_titletag', 'Anwendungsmodule konfigurieren');
define('lang_sys_modules_new_add', 'Neues Modul');
define('lang_sys_modules_list', 'Module ansehen');
define('lang_sys_user', 'Systembenutzer');
define('lang_sys_user_titletag', 'Systembenutzer oder Bibliotheksangestellte verwalten');
define('lang_sys_user_new_add', 'Neuer Benutzer');
define('lang_sys_user_list', 'Benutzer ansehen');
define('lang_sys_group', 'Benutzergruppe');
define('lang_sys_group_titletag', 'Benutzergruppen f�r Systembenutzer verwalten');
define('lang_sys_group_new_add', 'Neue Benutzergruppe');
define('lang_sys_group_list', 'Benutzergruppen ansehen');
define('lang_sys_holiday', 'Ruhetageinstellungen');
define('lang_sys_holiday_titletag', 'Legen sie Ruhetage oder -zeitr�ume fest, an denen die Bibliothek geschlossen ist (und w�hrend derer Leihfristen nicht �berzogen werden k�nnen)');
define('lang_sys_barcodes', 'Barcodegenerator');
define('lang_sys_barcodes_titletag', 'Barcodegenerator');
define('lang_sys_barcodes_description', 'Geben Sie Barcodebezeichnungen in eines oder mehrere der Textfelder ein und klicken Sie dann den Button');
define('lang_sys_syslog', 'Systemlog');
define('lang_sys_syslog_titletag', 'System Log der Anwendung betrachten');
define('lang_sys_backup', 'Datenbanksicherung');
define('lang_sys_backup_titletag', 'Datenbank der Anwendung sichern');
define('lang_sys_backup_new_add', 'Neue Sicherung erstellen');
define('lang_sys_content', 'Inhaltsbereiche'); //? (Content)
define('lang_sys_content_titletag', 'Inhaltsbereiche der Webseite');
# form button
define('lang_sys_common_form_save', 'Speichern');
define('lang_sys_common_form_update', 'Aktualisieren');
define('lang_sys_common_form_cancel', 'Abbrechen');
define('lang_sys_common_form_delete', 'Datensatz l�schen');
define('lang_sys_common_form_search', 'Suche'); /* proposed */
define('lang_sys_common_form_search_field', 'Suchen'); /* proposed */
define('lang_sys_common_form_save_change', 'Speichern'); /* proposed */
define('lang_sys_common_form_report','Bericht herunterladen');
# datagrid form
define('lang_sys_common_form_checkbox_all', 'Alle anw�hlen');
define('lang_sys_common_form_uncheckbox_all', 'Alle abw�hlen');
define('lang_sys_common_form_delete_selected', 'Ausgew�hlte Daten l�schen');
define('lang_sys_common_form_confirm_delete', 'Wollen Sie die ausgew�hlten Daten wirklich l�schen?');
define('lang_sys_common_edit_titletag', 'Click for detail or edit this Record'); //? //-
# display search data
define('lang_sys_common_search_result_info', '<strong>{result->num_rows}</strong> Ergebnisse gefunden f�r die Suchbegriffe');
define('lang_sys_common_paging_first', 'Erste Seite');
define('lang_sys_common_paging_last', 'Letzte Seite');
define('lang_sys_common_paging_prev', 'Vorherige');
define('lang_sys_common_paging_next', 'N�chste');
# application user form
define('lang_sys_user_field_login_username', 'Anmeldename');
define('lang_sys_user_field_realname', 'Name');
define('lang_sys_user_field_password', 'Passwort');
define('lang_sys_user_field_password_confirm', 'Passwort best�tigen');
# content form
define('lang_sys_content_field_title', 'Titel der Seite');
define('lang_sys_content_field_path', 'Pfad (darf nicht bereits verwendet werden)');
define('lang_sys_content_field_desc', 'Seiteninhalt');
define('lang_sys_content_new_add', 'Neue Seite');
define('lang_sys_content_list', 'Seiten ansehen');
define('lang_sys_content_alert_noempty', 'Titel und Pfad m�ssen angegeben sein!');
define('lang_sys_content_common_last_update', 'Letzte Aktualisierung ');
define('lang_sys_content_common_edit_info', 'Sie sind im Begriff folgende Seite zu aktualisieren ');
define('lang_sys_content_alert_save_ok', 'Seite wurde gespeichert');
define('lang_sys_content_alert_save_fail', 'Speicherung der Seite FEHLGESCHLAGEN!');
define('lang_sys_content_alert_update_ok', 'Seite wurde aktualisiert');
define('lang_sys_content_alert_update_fail', 'Aktualisierung der Seite FEHLGESCHLAGEN!');

/* Global Configuration */
define('lang_sys_conf_alert_save', 'Einstellungen gespeichert. Seite wird aktualisiert');
define('lang_sys_conf_form_button_save', 'Einstellungen speichern');
define('lang_sys_conf_form_field_library', 'Bibliotheksname');
define('lang_sys_conf_form_field_library_subname', 'Namenszusatz');
define('lang_sys_conf_form_field_public_template', 'Template �ffentlicher Bereich');
define('lang_sys_conf_form_field_admin_template', 'Template administrativer Bereich');
define('lang_sys_conf_form_field_language', 'Standardsprache'); //?
define('lang_sys_conf_form_field_opac_result', 'Zahl anzuzeigender Sammlungen in der OPAC-Ergebnisliste');
define('lang_sys_conf_form_field_quick_return', 'Schnellr�cknahme');
define('lang_sys_conf_form_field_limit_overide', 'Ausleihlimit ignorieren k�nnen'); //?
define('lang_sys_conf_form_field_opac_xml', 'OPAC XML-Detail');
define('lang_sys_conf_form_field_xml_result', 'OPAC XML-Ergebnis');
define('lang_sys_conf_form_field_xml_file', 'Herunterladen von Dateien im OPAC zulassen');
define('lang_sys_conf_form_option_enable', 'Aktivieren');
define('lang_sys_conf_form_option_disable', 'Deaktivieren');
define('lang_sys_conf_form_option_allow', 'Zulassen');
define('lang_sys_conf_form_option_forbid', 'Verweigern');
define('lang_sys_conf_form_field_session', 'Automatisch abmelden nach (Sekunden)');
define('lang_sys_conf_form_field_promote_titles', 'Propagierte Titel auf der Startseite anzeigen'); //?

/* Module Configuration */
define('lang_sys_conf_module_alert_noempty', 'Name und Pfad des Modules m�ssen angegeben sein');
define('lang_sys_conf_module_alert_save_ok', 'Daten des neuen Moduls erfolgreich gespeichert');
define('lang_sys_conf_module_alert_save_fail', 'Speicherung der Moduldaten FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_sys_conf_module_alert_update_ok', 'Moduldaten erfolgreich aktualisiert');
define('lang_sys_conf_module_alert_update_fail', 'Aktualisierung der Moduldaten FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_sys_conf_module_alert_not_exist', 'Fehler! Moduldaten sind nicht vorhanden!');
define('lang_sys_conf_module_common_edit_info', 'Sie sind im Begriff die Angaben f�r folgendes Modul zu bearbeiten');
define('lang_sys_conf_module_common_alert_delete_success', 'Alle Daten erfolgreich gel�scht');
define('lang_sys_conf_module_common_alert_delete_fail', 'Einige oder alle Daten wurden NICHT erfolgreich gel�scht!\nBitte kontaktieren Sie den Systemadministrator');
define('lang_sys_conf_module_common_alert_delete_group_ok', 'Benutzergruppe erfolgreich gel�scht');
define('lang_sys_conf_module_common_alert_delete_group_fail', 'L�schung der Benutzergruppe fehlgeschlagen');
define('lang_sys_conf_module_field_name', 'Modulname');
define('lang_sys_conf_module_field_path', 'Modulpfad');
define('lang_sys_conf_module_field_description', 'Modulbeschreibung');

/* User Configuration */
define('lang_sys_conf_user_alert_noempty', 'Anmeldename und Name m�ssen angegeben sein');
define('lang_sys_conf_user_alert_forbid', 'Anmeldename oder Name nicht zul�ssig!');
define('lang_sys_conf_user_alert_nopassword', 'Es muss ein Passwort angegeben werden!');
define('lang_sys_conf_user_alert_nomatch', 'Passwort stimmt nicht mit Passwortbest�tigung �berein. Pr�fen Sie, ob versehentlich die Shift-Lock-Taste aktiviert wurde!');
define('lang_sys_conf_user_alert_save_ok', 'Neue Benutzerdaten erfolgreich gespeichert');
define('lang_sys_conf_user_alert_save_fail', 'Speicherung der Benutzerdaten FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_sys_conf_user_alert_update_ok', 'Benutzerdaten erfolgreich aktualisiert');
define('lang_sys_conf_user_alert_update_fail', 'Aktualisierung der Benutzerdaten FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_sys_conf_user_alert_not_exist', 'Fehler! Benutzerdaten sind nicht vorhanden!');
define('lang_sys_conf_user_common_edit_info', 'Sie sind im Begriff die Angaben f�r folgendes Benutzerprofil zu bearbeiten');
define('lang_sys_conf_user_common_last_update', 'Letzte Aktualisierung ');
define('lang_sys_conf_user_common_info_1', 'F�llen Sie das Passwortfeld nicht aus, wenn Sie das Passwort nicht �ndern wollen');
define('lang_sys_conf_user_common_alert_delete_success', 'Alle Daten erfolgreich gel�scht');
define('lang_sys_conf_user_common_alert_delete_fail', 'Einige oder alle Daten wurden NICHT erfolgreich gel�scht!\nBitte kontaktieren Sie den Systemadministrator');
define('lang_sys_conf_user_common_alert_delete_record_ok', 'Benutzer erfolgreich gel�scht');
define('lang_sys_conf_user_common_alert_delete_record_fail', 'L�schung des Benutzers fehlgeschlagen');
define('lang_sys_conf_user_field_login_name', 'Anmeldename');
define('lang_sys_conf_user_field_real', 'Name');
define('lang_sys_conf_user_field_group', 'Benutzergruppe(n)');
define('lang_sys_conf_user_field_password_1', 'Passwort');
define('lang_sys_conf_user_field_password_2', 'Passwort best�tigen');
define('lang_sys_conf_user_field_password_3', 'Neues Passwort');
define('lang_sys_conf_user_field_password_4', 'Neues Passwort best�tigen');
define('lang_sys_conf_user_field_last_login', 'Letzte Anmeldung');

/* Group Configuration */
define('lang_sys_conf_group_alert_noempty', 'Benutzergruppenname muss angegeben sein');
define('lang_sys_conf_group_alert_save_ok', 'Neue Benutzergruppendaten erfolgreich gespeichert');
define('lang_sys_conf_group_alert_save_fail', 'Speicherung der Benutzergruppendaten FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_sys_conf_group_alert_update_ok', 'Benutzergruppendaten erfolgreich aktualisiert');
define('lang_sys_conf_group_alert_update_fail', 'Aktualisierung der Benutzergruppendaten FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_sys_conf_group_alert_not_exist', 'Fehler! Group data sind nicht vorhanden!');
define('lang_sys_conf_group_common_edit_info', 'Sie sind im Begriff die Angaben f�r folgende Benutzergruppe zu bearbeiten');
define('lang_sys_conf_group_common_last_update', 'Letzte Aktualisierung ');
define('lang_sys_conf_group_common_alert_delete_success', 'Alle Daten erfolgreich gel�scht');
define('lang_sys_conf_group_common_alert_delete_fail', 'Einige oder alle Daten wurden NICHT erfolgreich gel�scht!\nBitte kontaktieren Sie den Systemadministrator');
define('lang_sys_conf_group_common_alert_delete_record_ok', 'Benutzergruppe erfolgreich gel�scht');
define('lang_sys_conf_group_common_alert_delete_record_fail', 'L�schung der Benutzergruppe fehlgeschlagen');
define('lang_sys_conf_group_field_name', 'Benutzergruppenname');
define('lang_sys_conf_group_field_privileges', 'Rechte');
define('lang_sys_conf_group_privileges_modul_name', 'Modulname');
define('lang_sys_conf_group_privileges_modul_read', 'Lesen');
define('lang_sys_conf_group_privileges_modul_write', 'Schreiben');

/* Holiday Configuration */
define('lang_sys_holiday_set_day', 'Wochenruhetage festlegen');
define('lang_sys_holiday_add_day', 'Neuer Ruhezeitraum (Ferien, Feiertage)');
define('lang_sys_holiday_list', 'Ruhezeitr�ume ansehen');
define('lang_sys_conf_holiday_alert_noempty', 'Beschreibung des Ruhezeitraums muss angegeben sein');
define('lang_sys_conf_holiday_alert_save_ok', 'Neuer Ruhezeitraum erfolgreich gespeichert');
define('lang_sys_conf_holiday_alert_save_fail', 'Speicherung  des Ruhezeitraums FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_sys_conf_holiday_alert_update_ok', 'Ruhetag erfolgreich aktualisiert');
define('lang_sys_conf_holiday_alert_update_fail', 'Aktualisierung des Ruhetags FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_sys_conf_holiday_alert_not_exist', 'Fehler! Ruhetag ist nicht vorhanden!');
define('lang_sys_conf_holiday_alert_set_ok', 'Wochenruhetage gespeichert');
define('lang_sys_conf_holiday_common_edit_info', 'Sie sind im Begriff die Angaben f�r folgenden Ruhezeitraum (Tag davon) zu bearbeiten');
define('lang_sys_conf_holiday_common_alert_delete_success', 'Alle Daten erfolgreich gel�scht');
define('lang_sys_conf_holiday_common_alert_delete_fail', 'Einige oder alle Daten wurden NICHT erfolgreich gel�scht!\nBitte kontaktieren Sie den Systemadministrator');
define('lang_sys_conf_holiday_common_alert_delete_record_ok', 'Ruhezeitraum erfolgreich gel�scht'); //-
define('lang_sys_conf_holiday_common_alert_delete_record_fail', 'L�schung des Ruhezeitraums fehlgeschlagen'); //-
define('lang_sys_conf_holiday_form_save', 'Einstellungen speichern');
define('lang_sys_conf_holiday_field_date_day', 'Beginn des Ruhezeitraums');
define('lang_sys_conf_holiday_field_date_day_end', 'Ende des Ruhezeitraums');
define('lang_sys_conf_holiday_field_description', 'Ruhezeitraum Beschreibung');
define('lang_sys_conf_holiday_field_day_name', 'Name des Tages');
define('lang_sys_conf_holiday_field_day_1', 'Montag');
define('lang_sys_conf_holiday_field_day_2', 'Dienstag');
define('lang_sys_conf_holiday_field_day_3', 'Mittwoch');
define('lang_sys_conf_holiday_field_day_4', 'Donnerstag');
define('lang_sys_conf_holiday_field_day_5', 'Freitag');
define('lang_sys_conf_holiday_field_day_6', 'Samstag');
define('lang_sys_conf_holiday_field_day_7', 'Sonntag');

/* Barcode Generator */
define('lang_sys_conf_barcode_alert_print_fail', 'Fehler beim Erstellen des Barcodes!');
define('lang_sys_conf_barcode_alert_print_ok', 'Barcodeerstellung abgeschlossen');
define('lang_sys_conf_barcode_button_print', 'Barcodes erstellen');
define('lang_sys_conf_barcode_field_size', 'Barcodegr��e');
define('lang_sys_conf_barcode_field_option_1', 'Klein');
define('lang_sys_conf_barcode_field_option_2', 'Mittel');
define('lang_sys_conf_barcode_field_option_3', 'Gro�');

/* Log System */
define('lang_sys_conf_log_field_time', 'Zeit');
define('lang_sys_conf_log_field_location', 'Stelle');
define('lang_sys_conf_log_field_message', 'Nachricht');

/* OPAC */
define('lang_opac_search_result', 'Suchergebnis');
define('lang_opac_info', 'Bibliothekskatalog Online - Nutzen Sie die verschiedenen Suchm�glichkeiten um schnell das Gesuchte zu finden'); //? OAPC - a word patrons fear :D
define('lang_opac_rec_detail', 'Details zum Titel'); //? (Record Details); Translation more user friendly?
define('lang_opac_page_info', 'Sie befinden sich auf Seite <strong>{page}</strong> von <strong>{total_pages}</strong> Seiten(n)');
define('lang_opac_search_result_info', '<strong>{biblio_list->num_rows}</strong> Ergebnisse gefunden f�r die Suchbegriffe');
define('lang_opac_back_prev', 'Zur�ck zur vorherigen Seite');

/* DEFAULT MODULE */
define('lang_mod_default_home_panel', 'Schnellzugriff');
define('lang_mod_default_home_user_profile', 'Mein Profil �ndern');
define('lang_mod_default_home_user_profile_titletag', 'Aktuelles Benutzerprofil und -passwort �ndern');

/* BIBLIOGRAPHIC MODULE */
# submenu
define('lang_mod_biblio', 'Titelaufnahmen');
define('lang_mod_biblio_list', 'Titelaufnahmen ansehen');
define('lang_mod_biblio_list_titletag', 'Vorhandene Titelaufnahmen anzeigen');
define('lang_mod_biblio_add', 'Neue Titelaufnahme');
define('lang_mod_biblio_add_titletag', 'Neue Titelaufnahme zum Katalog hinzuf�gen');
define('lang_mod_biblio_item', 'Exemplare');
define('lang_mod_biblio_item_list', 'Exemplare ansehen');
define('lang_mod_biblio_item_list_titletag', '�bersicht der Bibliotheksexemplare');
define('lang_mod_biblio_item_checkout', 'Entliehene Exemplare');
define('lang_mod_biblio_item_checkout_titletag', '�bersicht der derzeit entliehenen Exemplare');
define('lang_mod_biblio_tools', 'Werkzeuge');
define('lang_mod_biblio_tools_z3950', 'Z39.50 Service');
define('lang_mod_biblio_tools_z3950_titletag', 'Bibliographische Daten von einem Z39.50-Services beziehen');
define('lang_mod_biblio_tools_label_print', 'Etikette drucken (Aufnahmen)');
define('lang_mod_biblio_tools_label_print_titletag', 'Etikette mit Signatur f�r Titelaufnahmen drucken');
define('lang_mod_biblio_tools_label_print_select', 'Etikettendruck starten');
define('lang_mod_biblio_tools_label_print_clear', 'Druckerwarteschlange l�schen');
define('lang_mod_biblio_tools_item_barcode', 'Barcodes drucken (Exemplare)');
define('lang_mod_biblio_tools_item_barcode_titletag', 'Exemplarbarcodes drucken');
define('lang_mod_biblio_tools_item_barcode_print_select', 'Barcodedruck starten');
define('lang_mod_biblio_tools_item_barcode_clear', 'Druckerwarteschlange l�schen');
define('lang_mod_biblio_tools_export', 'Daten exportieren');
define('lang_mod_biblio_tools_export_titletag', 'Titelaufnahmen in Datei exportieren (CSV-Format)');
define('lang_mod_biblio_tools_import', 'Daten importieren');
define('lang_mod_biblio_tools_import_titletag', 'Titelaufnahmen aus Datei importieren (CSV-Format)');
# bibliography form fields
define('lang_mod_biblio_field_title', 'Titel');
define('lang_mod_biblio_field_edition', 'Ausgabe');
define('lang_mod_biblio_field_specific_detail', 'Anmerkung'); //? (Specific Detail Info)
define('lang_mod_biblio_field_items', 'Exemplardatensatz/-s�tze');
define('lang_mod_biblio_field_no_item', 'F�r diesen Titel ist noch kein Exemplar eingetragen');
define('lang_mod_biblio_link_item_add', 'Neues Exemplar hinzuf�gen');
define('lang_mod_biblio_field_authors', 'Autor(en)');
define('lang_mod_biblio_link_author_add', 'Autor(en) hinzuf�gen');
define('lang_mod_biblio_link_author_search', 'Klicken um weitere Titel von diesem Autor anzuzeigen');
define('lang_mod_biblio_field_gmd', 'Ressourcenart');
define('lang_mod_biblio_field_isbn', 'ISBN/ISSN');
define('lang_mod_biblio_field_class', 'Klassifikation'); //? Hmm
define('lang_mod_biblio_field_publisher', 'Verlag');
define('lang_mod_biblio_field_no_publisher', 'Kein Verlag angegeben bisher');
define('lang_mod_biblio_field_publish_year', 'Erscheinungsjahr');
define('lang_mod_biblio_field_publish_place', 'Erscheinungsort');
define('lang_mod_biblio_field_no_publish_place', 'Kein Erscheinungsort angegeben bisher');
define('lang_mod_biblio_field_collation', 'Umfang'); //? (Collation)
define('lang_mod_biblio_field_series', 'Reihentitel'); //? Series Title
define('lang_mod_biblio_field_call_number', 'Signatur');
define('lang_mod_biblio_field_topic', 'Schlagw�rter');
define('lang_mod_biblio_link_topic_add', 'Schlagw�rter hinzuf�gen');
define('lang_mod_biblio_link_topic_search', 'Klicken um weitere Titel mit diesem Schlagwort anzuzeigen');
define('lang_mod_biblio_field_lang', 'Sprache');
define('lang_mod_biblio_field_notes', 'Abstract/Inhalt');
define('lang_mod_biblio_field_image', 'Bild');
define('lang_mod_biblio_field_image_nothing', 'Kein Bild vorhanden');
define('lang_mod_biblio_field_attachment', 'Dateianhang');
define('lang_mod_biblio_field_attachment_nothing', 'Kein Dateianhang vorhanden');
define('lang_mod_biblio_field_availability', 'Verf�gbarkeit');
define('lang_mod_biblio_field_hide_opac', 'Anzeige im OPAC');
define('lang_mod_biblio_field_promote', 'Auf der Startseite anzeigen'); //? promote...
# bibliography common
define('lang_mod_biblio_common_form_print_queue', 'Zur Druckerwarteschlange hinzuf�gen');
define('lang_mod_biblio_common_print_queue_confirm', 'Zur Druckerwarteschlange hinzuf�gen?');
define('lang_mod_biblio_common_print_cleared', 'Druckerwarteschlange gel�scht!');
define('lang_mod_biblio_common_print_no_data', 'Es sind keine Daten zum Drucken vorhanden!');
define('lang_mod_biblio_alert_print_no_add_queue', 'Ausgew�hlte Eintr�ge NICHT zur Druckerwarteschlange hinzugef�gt. Es k�nnen h�chstens {max_print} auf einmal gedruckt werden');
define('lang_mod_biblio_alert_print_add_ok', 'Ausgew�hlte Eintr�ge zur Druckerwarteschlange hinzugef�gt');
define('lang_mod_biblio_alert_title_empty', 'Titel muss angegeben sein');
define('lang_mod_biblio_alert_failed_to_save', 'Speicherung der Titelaufnahme FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_biblio_alert_failed_to_update', 'Aktualisierung der Titelaufnahme FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_biblio_alert_new_added', 'Neue Titelaufnahme erfolgreich gespeichert');
define('lang_mod_biblio_alert_updated_ok', 'Titelaufnahme erfolgreich aktualisiert');
define('lang_mod_biblio_alert_image_uploaded', 'Bild erfolgreich hochgeladen');
define('lang_mod_biblio_alert_image_not_uploaded', 'Hochladen des Bildes FEHLGESCHLAGEN');
define('lang_mod_biblio_alert_attach_uploaded', 'Dateianhang erfolgreich hochgeladen');
define('lang_mod_biblio_alert_attach_not_uploaded', 'Hochladen des Dateianhangs FEHLGESCHLAGEN');
define('lang_mod_biblio_common_not_exists','FEHLER! Ausgew�hlte Daten sind nicht vorhanden');
define('lang_mod_biblio_common_edit_message', 'Sie sind im Begriff die Angaben f�r folgende Titelaufnahme zu bearbeiten');
define('lang_mod_biblio_common_last_update', 'Letzte Aktualisierung ');
define('lang_mod_biblio_alert_list_not_deleted', 'Folgende Daten k�nnen nicht gel�scht werden: ');
define('lang_mod_biblio_alert_data_selected_deleted', 'Alle Daten erfolgreich gel�scht');
define('lang_mod_biblio_alert_data_selected_not_deleted', 'Einige oder alle Daten wurden NICHT erfolgreich gel�scht!\nBitte kontaktieren Sie den Systemadministrator');
define('lang_mod_biblio_alert_data_have_item', 'Diese Titelaufnahme kann nicht gel�scht werden, da noch {biblio_item} Exemplare mit ihr verkn�pft sind. Bitte l�schen Sie diese Exemplare zun�chst.');
define('lang_mod_biblio_alert_data_deleted', 'Titelaufnahme erfolgreich gel�scht');
define('lang_mod_biblio_alert_data_not_deleted', 'L�schung der Titelaufnahme fehlgeschlagen');
# item form fields
define('lang_mod_biblio_item_field_title', 'Titel');
define('lang_mod_biblio_item_field_itemcode', 'Barcode/Exemplar');
define('lang_mod_biblio_item_field_inventory', 'Bestandsnummer'); //? (Inventory Code)
define('lang_mod_biblio_item_field_location', 'Standort'); //?
define('lang_mod_biblio_item_field_site', 'Regalstandort');
define('lang_mod_biblio_item_field_ctype', 'Sammlung');
define('lang_mod_biblio_item_field_item_status', 'Exemplarstatus');
define('lang_mod_biblio_item_field_order_number', 'Bestellnummer'); //? (Order Number)
define('lang_mod_biblio_item_field_order_date', 'Bestelldatum');
define('lang_mod_biblio_item_field_received_date', 'Lieferungsdatum');
define('lang_mod_biblio_item_field_supplier', 'Zulieferer');
define('lang_mod_biblio_item_field_item_source', 'Quelle'); //? Herkunft...?
define('lang_mod_biblio_item_field_invoice', 'Rechnung');
define('lang_mod_biblio_item_field_invoice_date', 'Rechnungsdatum');
define('lang_mod_biblio_item_field_price', 'Preis');
#item
define('lang_mod_biblio_item_common_opac_status_1', 'Wir besitzen {copy} Exemplare dieses Titels und ALLE sind derzeit ausgeliehen');
define('lang_mod_biblio_item_common_opac_status_2', 'Wir besitzen {copy} Exemplare dieses Titels');
define('lang_mod_biblio_item_common_opac_status_3', 'ist verf�gbar');
define('lang_mod_biblio_item_common_opac_status_4', 'derzeit ausgeliehen');
define('lang_mod_biblio_item_common_location_status_1', 'Exemplare in'); //? at - how does it continue?
define('lang_mod_biblio_item_alert_collection_title', 'Titel der Sammlung muss angegeben sein!');
define('lang_mod_biblio_item_alert_item_code', 'Barcode/Exemplar muss angegeben sein!');
define('lang_mod_biblio_item_alert_new_saved', 'Neues Exemplar erfolgreich gespeichert');
define('lang_mod_biblio_item_alert_updated','Exemplar erfolgreich aktualisiert');
define('lang_mod_biblio_item_alert_not_saved', 'Speicherung des Exemplars FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_biblio_item_alert_delete_fail_on_loan', 'Exemplars kann nicht gel�scht werden, da es noch ausgeliehen ist');
define('lang_mod_biblio_item_alert_delete_item_data_success', 'Alle Daten erfolgreich gel�scht');
define('lang_mod_biblio_item_alert_delete_item_data_failed', 'Einige oder alle Daten wurden NICHT erfolgreich gel�scht!\nBitte kontaktieren Sie den Systemadministrator');
define('lang_mod_biblio_item_common_edit_message', 'Sie sind im Begriff die Angaben f�r folgendes Exemplar zu bearbeiten');
define('lang_mod_biblio_item_common_last_update', 'Letzte Aktualisierung');
define('lang_mod_biblio_item_common_delete_success', 'Exemplar erfolgreich gel�scht');
define('lang_mod_biblio_item_common_delete_failed', 'L�schung des Exemplars fehlgeschlagen');
define('lang_mod_biblio_item_alert_remove_success', 'Exemplar erfolgreich entfernt!');
define('lang_mod_biblio_item_alert_remove_failed', 'Entfernung des Exemplars FEHLGESCHLAGEN!');
# file attached
define('lang_mod_biblio_file_delete_success', 'Datei {file_d[0]} gel�scht');
define('lang_mod_biblio_file_delete_fail', 'L�schung der Datei {file_d[0]} FEHLGESCHLAGEN');
# export
define('lang_mod_biblio_export_header', 'EXPORT-WERKZEUG');
define('lang_mod_biblio_export_header_text', 'Titelaufnahmen in Datei exportieren (CSV-Format)');
define('lang_mod_biblio_export_form_field_separator', 'Trennzeichen f�r Felder*');
define('lang_mod_biblio_export_form_field_enclosed', 'Feldinhalte einschlie�en zwischen*');
define('lang_mod_biblio_export_form_field_rec_separator', 'Datensatztrennzeichen');
define('lang_mod_biblio_export_form_field_rec_to_export', 'Zahl der zu exportierenden Datens�tze (0 f�r alle Datens�tze)');
define('lang_mod_biblio_export_form_field_rec_start', 'Beginnend von Datensatz');
define('lang_mod_biblio_export_form_button_start', 'Export starten');
define('lang_mod_biblio_export_alert_all_field', 'Erforderliche Felder m�ssen korrekt angegeben sein!');
define('lang_mod_biblio_export_alert_err_query', 'Fehler bei der Datenbankabfrage, Export FEHLGESCHLAGEN!');
define('lang_mod_biblio_export_alert_no_record', 'Es sind keine Titelaufnahmen in der Datenbank vorhanden, Export FEHLGESCHLAGEN!');
# import
define('lang_mod_biblio_import_header', 'IMPORT-WERKZEUG');
define('lang_mod_biblio_import_header_text', 'Titelaufnahmen aus Datei importieren (CSV-Format). F�r Erl�uterung zur Sortierung und dem Format der CVS-Felder ziehen Sie bitte die Dokumentation zu Rate oder besuchen Sie die <a href="http://senayan.diknas.go.id" target="_blank">Offizielle Webseite</a>');
define('lang_mod_biblio_import_form_field_file_input', 'Zu importierende Datei*');
define('lang_mod_biblio_import_file_input_require', 'Bitte w�hlen Sie die zu importierende Datei aus!');
define('lang_mod_biblio_import_form_field_separator', 'Trennzeichen f�r Felder*');
define('lang_mod_biblio_import_form_field_enclosed', 'Feldinhalte eingeschlossen zwischen*');
define('lang_mod_biblio_import_form_field_rec_to_export', 'Zahl der zu importierenden Datens�tze (0 f�r alle Datens�tze)');
define('lang_mod_biblio_import_form_field_rec_start', 'Beginnend von Datensatz');
define('lang_mod_biblio_import_form_button_start', 'Import starten');
define('lang_mod_biblio_import_alert_all_field', 'Erforderliche Felder m�ssen korrekt angegeben sein!');
define('lang_mod_biblio_import_alert_err_size', 'Hochladen fehlgeschlagen! Dateityp ist unzul�ssig oder ist gr��er als ');
define('lang_mod_biblio_alert_field_author_removed', 'Autor entfernt!');
define('lang_mod_biblio_alert_field_author_session_removed', 'Autor erfolgreich entfernt!');
# pop-ups
# author
define('lang_mod_biblio_author_update_ok', 'Autor erfolgreich aktualisiert!');
define('lang_mod_biblio_author_added_ok', 'Autor hinzugef�gt!');
define('lang_mod_biblio_author_added_fail', 'Hinzuf�gen des Autors FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_biblio_author_form_name', 'Name des Autors');
define('lang_mod_biblio_author_form_search', 'Tippen Sie einen Namen ein um nach vorhandenen Autoren zu suchen oder einen neuen hinzuf�gen');
define('lang_mod_biblio_author_insert_to_biblio', 'In Titelaufnahme einf�gen');
#topic
define('lang_mod_biblio_topic_update_ok', 'Schlagwort erfolgreich aktualisiert!');
define('lang_mod_biblio_topic_added_ok', 'Schlagwort hinzugef�gt!');
define('lang_mod_biblio_topic_added_fail', 'Hinzuf�gen des Schlagwortes FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_biblio_topic_form_title', 'Schlagw�rter hinzuf�gen');
define('lang_mod_biblio_topic_form_keyword', 'Stichwort');
define('lang_mod_biblio_topic_form_search', 'Tippen Sie einfach los um nach vorhandenen Schlagw�rtern zu suchen oder ein neues hinzuf�gen');
define('lang_mod_biblio_topic_insert_to_biblio', 'In Titelaufnahme einf�gen');

/* CIRCULATION MODULE */
# submenu
define('lang_mod_circ', 'Ausleihe');
define('lang_mod_circ_start', 'Neue Buchung');
define('lang_mod_circ_start_titletag', 'Neuen Buchungsvorgang ausf�hren (Entleihung, R�cknahme, Vormerkung, Geb�hren)');
define('lang_mod_circ_quick_return', 'Schnellr�cknahme');
define('lang_mod_circ_quick_return_titletag', 'Exemplare schnell zur�ckbuchen');
define('lang_mod_circ_quick_return_msg1', 'Tippen oder scannen Sie den Barcode eines Exemplars ein um es zur�ckzubuchen');
define('lang_mod_circ_loan_rules', 'Ausleihregeln');
define('lang_mod_circ_loan_rules_titletag', 'Ausleihregeln ansehen und �ndern');
define('lang_mod_circ_loan_rules_add', 'Neue Ausleihregel');
define('lang_mod_circ_loan_rules_list', 'Ausleihregeln ansehen');
define('lang_mod_circ_transaction_history', 'Ausleihverlauf');
define('lang_mod_circ_transaction_history_titletag', '�bersicht vergangener Ausleihvorg�nge');
define('lang_mod_circ_overdues', 'Mahnungen');
define('lang_mod_circ_overdues_titletag', 'Zeige Mitlgieder mit Mahngeb�hren');
# common
define('lang_mod_circ_common_welcome', 'AUSLEIHE - Geben sie eine Mitgliedsnummer ein um einen Buchungsvorgang auszuf�hren');
define('lang_mod_circ_common_loan_not_saved', 'FEHLER! Ausleihinformationen k�nnen nicht in der Datenbank gespeichert werden');
define('lang_mod_circ_common_trans_finish', 'Buchungsvorgang f�r Mitglied {member_id} erfolgreich abgeschlossen');
define('lang_mod_circ_common_error_unregistered_member', ' ung�ltig (nicht in der Datenbank vorhanden) ');
define('lang_mod_circ_common_error_expired_membership', 'Mitgliedschaft ist abgelaufen ');
define('lang_mod_circ_common_error_pending_membership', 'Status der Mitgliedsschaft ist \'ruhend\', keine Ausleihvorg�nge m�glich.');
define('lang_mod_circ_common_return_confirmation', 'Wollen Sie das Exemplar zur�ckbuchen?');
define('lang_mod_circ_common_extend_confirmation', 'Wollen Sie die Leihfrist verl�ngern f�r');
define('lang_mod_circ_common_overdued_for_1', '�BERF�LLIG seit');
define('lang_mod_circ_common_overdued_for_2', 'Tag(en) mit Mahngeb�hren');
define('lang_mod_circ_common_loan_confirmation', 'Wollen Sie den derzeitigen Buchungsvorgang abschlie�en?');
define('lang_mod_circ_common_finished_loan_confirmation', 'Buchungsvorgang abgeschlossen');
define('lang_mod_circ_common_fines_inserted', 'Mahngeb�hren im System gespeichert');
define('lang_mod_circ_common_fines_alert_01', 'Geb�hrenbeschreibung und Geb�hrenforderung m�ssen angegeben sein');
define('lang_mod_circ_common_fines_alert_02', 'Das Guthaben kann nicht gr��er als die Geb�hrenforderung sein');
define('lang_mod_circ_common_alert_error_limit_reach', 'Ausleihlimit erreicht!');
define('lang_mod_circ_common_alert_extended_success', 'Leihfrist verl�ngert');
define('lang_mod_circ_common_overide_confirmation', 'Wollen Sie dies ausdr�cklich ignorieren und weiter fortfahren?');
define('lang_mod_circ_alert_on_resereved', 'Warnung! Dieses Exemplar ist durch ein anderes Mitglied vorgemerkt');
define('lang_mod_circ_alert_item_not_registered', 'Dieses Exemplar ist im System nicht vorhanden');
define('lang_mod_circ_alert_item_not_available', 'Dieses Exemplar ist derzeitig nicht verf�gbar');
define('lang_mod_circ_alert_member_expired', 'Ausleihe NICHT ZUL�SSIG! Mitgliedschaft ist ABGELAUFEN!');
define('lang_mod_circ_alert_member_pending', 'Ausleihe NICHT ZUL�SSIG! Mitgliedschaft hat Status RUHEND!');
define('lang_mod_circ_alert_not_for_loan', 'Ausleihe f�r dieses Exemplar nicht gestattet!');
define('lang_mod_circ_alert_item_remove_from_session', 'Exemplar {removeID} aus Ausleihliste entfernt');
define('lang_mod_circ_common_item_already_return', 'Dieses Exemplar wurde bereits zur�ckgebucht oder ist nicht in der Ausleihdatenbank gef�hrt');
define('lang_mod_circ_common_return_overdue', '�BERF�LLIG seit {overdueDays} Tag(en) mit Mahngeb�hren von '); /* see common_overdued_for_1 & 2 */
define('lang_mod_circ_common_item_return_ok', ' erfolgreich zur�ckgebucht am ');
define('lang_mod_circ_reserve', 'Vormerkungen');
define('lang_mod_circ_reserve_alert_nod_data', 'KEINE DATEN zur Vormerkung ausgew�hlt!');
define('lang_mod_circ_reserve_alert_forbidden', 'Exemplar kann nicht vorgemerkt werden. Ausleihe nicht gestattet!');
define('lang_mod_circ_reserve_alert_success', 'Vormerkung hinzugef�gt');
define('lang_mod_circ_reserve_alert_after_return', 'Exemplar {itemCode} ist durch Mitglied {member} vorgemerkt');
define('lang_mod_circ_reserve_alert_available', 'Ein Exemplar f�r diesen Titel ist verf�gbar oder bereits von diesem Mitglied ausgeliehen!');
define('lang_mod_circ_reserve_alert_removed', 'Vormerkung entfernt');
define('lang_mod_circ_reserve_alert_reach_limit', 'Es k�nnen keine weiteren Vormerkungen hinzugef�gt werden. H�chstzahl erreicht');
define('lang_mod_circ_fines_alert_removed', 'Geb�hrendaten entfernt');
# transaction form
define('lang_mod_circ_field_member_id', 'Mitgliedsnummer');
define('lang_mod_circ_field_member_name', 'Name des Mitglieds');
define('lang_mod_circ_field_member_email', 'E-Mail des Mitglieds');
define('lang_mod_circ_field_register_date', 'Registrierungsdatum');
define('lang_mod_circ_field_member_type', 'Mitgliedstyp');
define('lang_mod_circ_field_expiry_date', 'Ablaufdatum');
define('lang_mod_circ_button_loans', 'Ausleihen');
define('lang_mod_circ_button_current_loans', 'Derzeitige Entleihungen');
define('lang_mod_circ_button_reserve', 'Vormerkungen');
define('lang_mod_circ_button_fines', 'Geb�hren');
define('lang_mod_circ_button_loan_history', 'Geb�hren- und Ausleihverlauf');
define('lang_mod_circ_button_finish_transaction', 'Buchungsvorgang abschlie�en');
define('lang_mod_circ_tblheader_return', 'Zur�ckbuchen');
define('lang_mod_circ_tblheader_extend', 'Verl�ngern');
define('lang_mod_circ_tblheader_item_code', 'Barcode');
define('lang_mod_circ_tblheader_title', 'Titel');
define('lang_mod_circ_tblheader_loan_date', 'Ausleihdatum');
define('lang_mod_circ_tblheader_due_date', 'R�ckgabetermin');
define('lang_mod_circ_tblheader_returned_date', 'R�ckgabedatum');
define('lang_mod_circ_tblheader_remove', 'Entfernen');
define('lang_mod_circ_tblheader_reserve_date', 'Datum der Vormerkung');
define('lang_mod_circ_tblheader_add_new_fines', 'Neue Geb�hr hinzuf�gen');
define('lang_mod_circ_tblheader_fines_list', 'Geb�hren ansehen');
define('lang_mod_circ_tblheader_view_balanced_overdue', 'Beglichene Mahngeb�hren ansehen');
define('lang_mod_circ_loan_field_insert_barcode', 'Barcode des Exemplars angeben');
define('lang_mod_circ_loan_button_loan', 'Ausleihen');
define('lang_mod_circ_reserve_field_search_collection', 'Bestand durchsuchen');
define('lang_mod_circ_reserve_button_add_reserve', 'Vormerkung hinzuf�gen');
define('lang_mod_circ_return_titletext_return', 'Exemplar zur�ckbuchen');
define('lang_mod_circ_return_alttext_return', 'Zur�ckbuchen');
define('lang_mod_circ_return_no_return_history_data', 'Noch nicht zur�ckgegeben');
define('lang_mod_circ_extend_alttext_no_extend', 'Keine Verl�ngerung');
define('lang_mod_circ_extend_titletext_extend', 'Leihfrist f�r dieses Exemplar verl�ngern');
define('lang_mod_circ_extend_alttext_extend', 'Verl�ngern');
define('lang_mod_circ_extend_renewal_flag', 'Verl�ngert');
define('lang_mod_circ_extend_noextend_confirmation', 'Leihfrist des Exemplars kann NICHT verl�ngert werdenItem! Exemplar ist durch ein anderes Mitglied vorgemerkt');
# fines
define('lang_mod_circ_fines_alert_new_added', 'Neuer Geb�hreneintrag erfolgreich gespeichert');
define('lang_mod_circ_fines_alert_fail_to_save', 'Speicherung des Geb�hreneintrags FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_circ_fines_alert_required_data', 'Geb�hrenbeschreibung und Geb�hrenforderung m�ssen angegeben sein');
define('lang_mod_circ_fines_alert_balance_data', 'Das Guthaben kann nicht gr��er als die Geb�hrenforderung sein');
define('lang_mod_circ_fines_alert_updated', 'Geb�hreneintrag erfolgreich aktualisiert');
define('lang_mod_circ_fines_alert_not_updated', 'Aktualisierung des Geb�hreneintrags FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_circ_fines_alert_not_exists', 'Fehler! Geb�hreneintrag ist nicht vorhanden!');
define('lang_mod_circ_fines_common_info', 'Sie sind im Begriff die Angaben f�r folgenden Geb�hreneintrag zu bearbeiten: ');
# form
define('lang_mod_circ_fines_field_date', 'Geb�hrendatum');
define('lang_mod_circ_fines_field_description', 'Beschreibung/Name');
define('lang_mod_circ_fines_field_debit', 'Geb�hrenforderung');
define('lang_mod_circ_fines_field_credit', 'Guthaben');
# loan rules
define('lang_mod_circ_loan_rules_alert_add_ok', 'Neue Ausleihregel erfolgreich gespeichert');
define('lang_mod_circ_loan_rules_alert_add_fail', 'Speicherung der Ausleihregel FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
# form loan rules
define('lang_mod_circ_loan_rules_field_member_type', 'Mitgliedstyp');
define('lang_mod_circ_loan_rules_field_collection_type', 'Sammlungstyp');
define('lang_mod_circ_loan_rules_field_gmd', 'Ressourcenart');
define('lang_mod_circ_loan_rules_field_loan_limit', 'Ausleihlimit');
define('lang_mod_circ_loan_rules_field_loan_period', 'Ausleihdauer');
define('lang_mod_circ_loan_rules_field_reborrow_limit', 'Ausleiherneuerungen maximal');
define('lang_mod_circ_loan_rules_field_fines', 'Geb�hren pro Tag');
# common loan rules
define('lang_mod_circ_loan_rules_alert_updated_ok', 'Ausleihregeln erfolgreich aktualisiert');
define('lang_mod_circ_loan_rules_alert_updated_fail', 'Aktualisierung der Ausleihregeln FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_circ_loan_rules_alert_not_exist', 'Fehler! Ausleihregel sind nicht vorhanden!');
define('lang_mod_circ_loan_rules_common_edit_info', 'Sie sind im Begriff die Angaben f�r folgende Ausleihregel zu bearbeiten: ');
define('lang_mod_circ_loan_rules_common_last_update', 'Letzte Aktualisierung ');
define('lang_mod_circ_loan_rules_alert_all_deleted', 'Alle Daten erfolgreich gel�scht');
define('lang_mod_circ_loan_rules_alert_not_all_deleted', 'Einige oder alle Daten wurden NICHT erfolgreich gel�scht!\nBitte kontaktieren Sie den Systemadministrator');
define('lang_mod_circ_loan_rules_alert_deleted', 'Ausleihregeln erfolgreich gel�scht');
define('lang_mod_circ_loan_rules_alert_not_deleted', 'L�schung der Ausleihregeln FEHLGESCHLAGEN');
# overdue loan
define('lang_mod_circ_loan_overdue_tblheader', 'Mitglied(er) mit Mahngeb�hren');
# quick return
define('lang_mod_circ_loan_quick_return_disable', 'Schnellr�cknahme ist deaktiviert');
define('lang_mod_circ_loan_quick_return_form_item_id', 'Barcode/Exemplar');
define('lang_mod_circ_loan_quick_return_form_button', 'Zur�ckbuchen');
# reserve list
define('lang_mod_circ_loan_reserve_status', 'VERF�GBAR');
define('lang_mod_circ_loan_reserve_confirm_delete', 'Wollen Sie die Vormerkung entfernen f�r');
define('lang_mod_circ_loan_reserve_expired', 'BEREITS ABGELAUFEN');

/* MEMBERSHIP MODULE */
# submenu
define('lang_mod_membership', 'Mitgliedschaften');
define('lang_mod_membership_view_member_list', 'Mitgliederliste');
define('lang_mod_membership_view_member_list_titletag', 'Liste der Bibliotheksmitglieder aufrufen');
define('lang_mod_membership_add_new_member', 'Neues Mitglied');
define('lang_mod_membership_add_new_member_titletag', 'Ein neues Bibliotheksmitglied hinzuf�gen');
define('lang_mod_membership_member_type', 'Mitgliedstypen');
define('lang_mod_membership_member_type_titletag', 'Mitgliedstyp ansehen und �ndern');
define('lang_mod_membership_member_type_new_add', 'Neuer Mitgliedstyp');
define('lang_mod_membership_member_type_list', 'Mitgliedstypen ansehen');
define('lang_mod_membership_member_list', 'Mitgliederliste');
define('lang_mod_membership_view_expired_member', 'Abgelaufene Mitgliedschaften anzeigen');
define('lang_mod_membership_tools', 'Werkzeuge');
define('lang_mod_membership_import_data', 'Daten importieren');
define('lang_mod_membership_import_data_titletag', 'Mitgliederdaten aus Datei importieren (CSV-Format)');
define('lang_mod_membership_import_data_description', 'Mitgliederdaten aus Datei importieren (CSV-Format)');
define('lang_mod_membership_export_data', 'Daten exportieren');
define('lang_mod_membership_export_data_titletag', 'Mitgliederdaten in Datei exportieren (CSV-Format)');
define('lang_mod_membership_export_data_description', 'Mitgliederdaten in Datei exportieren (CSV-Format)');
define('lang_mod_membership_search', 'Mitgliedersuche');
define('lang_mod_membership_search_button', 'Suchen');
define('lang_mod_membership_card_generator_titletag', 'Mitgliederkarten drucken');
define('lang_mod_membership_card_generator', 'Mitgliederkarten drucken');
# common
define('lang_mod_membership_common_error_no_id_name', 'Mitgliedsnummer und Name m�ssen angegeben sein');
define('lang_mod_membership_common_member_data_saved', 'Neue Mitgliedsdaten erfolgreich gespeichert');
define('lang_mod_membership_common_image_upload_success', 'Bild erfolgreich hochgeladen');
define('lang_mod_membership_common_image_upload_error', 'Hochladen des Bildes FEHLGESCHLAGEN');
define('lang_mod_membership_common_error_fail_to_save_member_data', 'Speicherung/Aktualisierung der Mitgliedsdaten FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_membership_common_error_member_data_not_exist', 'FEHLER! Ausgew�hlte Daten sind nicht vorhanden');
define('lang_mod_membership_common_error_membership_expired', 'Mitgliedschaft bereits abgelaufen');
define('lang_mod_membership_common_member_data_updated', 'Mitgliedsdaten erfolgreich aktualisiert');
define('lang_mod_membership_button_save', 'Speichern');
define('lang_mod_membership_common_maximum', 'Maximum');
define('lang_mod_membership_common_edit_message', 'Sie sind im Begriff die Angaben f�r folgendes Mitglied zu bearbeiten');
define('lang_mod_membership_common_last_update', 'Letzte Aktualisierung');
define('lang_mod_membership_common_alert_no_delete_member_data', 'Folgende Mitgliederdaten k�nnen nicht gekl�scht werden, da noch Entleihungen gebucht sind');
define('lang_mod_membership_common_alert_no_delete_member_data_1', 'Mitgliederdaten');
define('lang_mod_membership_common_alert_no_delete_member_data_2', 'k�nnen nicht gekl�scht werden,');
define('lang_mod_membership_common_alert_no_delete_member_data_3', 'da noch Entleihungen gebucht sind');
define('lang_mod_membership_common_member_data_deleted_success', 'Mitgliederdaten erfolgreich gel�scht');
define('lang_mod_membership_common_member_data_deleted_failed', 'L�schung des Mitglieds fehlgeschlagen');
define('lang_mod_membership_common_expired_member_list', 'Liste abgelaufener Mitgliedschaften');
define('lang_mod_membership_common_found_text_1', 'Es wurde');
define('lang_mod_membership_common_found_text_2', 'Mitglied(er) gefunden mit dem Suchbegriff');
define('lang_mod_membership_common_alert_delete_member_data_success', 'Alle Daten erfolgreich gel�scht');
define('lang_mod_membership_common_alert_delete_member_data_failed', 'Einige oder alle Daten wurden NICHT erfolgreich gel�scht!\nBitte kontaktieren Sie den Systemadministrator');
# form
define('lang_mod_membership_field_extend_membership', 'Mitgliedschaft verl�ngern');
define('lang_mod_membership_field_extend', 'Verl�ngern');
define('lang_mod_membership_field_member_id', 'Mitgliedsnummer');
define('lang_mod_membership_field_name', 'Name des Mitglieds');
define('lang_mod_membership_field_birth_date', 'Geburtsdatum');
define('lang_mod_membership_field_institution', 'Institution');
define('lang_mod_membership_field_membership_type', 'Mitgliedstyp');
define('lang_mod_membership_field_gender', 'Geschlecht');
define('lang_mod_membership_field_gender_opt1', 'M�nnlich');
define('lang_mod_membership_field_gender_opt2', 'Weiblich');
define('lang_mod_membership_field_email', 'E-Mail');
define('lang_mod_membership_field_address', 'Adresse');
define('lang_mod_membership_field_postal_code', 'Postleitzahl');
define('lang_mod_membership_field_phone_number', 'Telefon');
define('lang_mod_membership_field_fax_number', 'Fax');
define('lang_mod_membership_field_personal_id', 'Personal ID Number'); //? Personalnummer; Personalausweisnummer?... lost in translation? :)
define('lang_mod_membership_field_notes', 'Bemerkungen');
define('lang_mod_membership_field_photo', 'Foto');
define('lang_mod_membership_field_member_since', 'Mitglied seit');
define('lang_mod_membership_field_register_date', 'Registrierungsdatum');
define('lang_mod_membership_field_expiry_date', 'Ablaufdatum');
define('lang_mod_membership_field_pending', 'Ruhende Mitgliedschaft');
# member type form
define('lang_mod_member_type_alert_name_noempty', 'Bezeichnung des Mitgliedstyps muss angegeben sein');
define('lang_mod_member_type_alert_data_not_exist', 'FEHLER! Mitgliedstypsdaten sind nicht vorhanden');
define('lang_mod_member_type_common_edit_message', 'Sie sind im Begriff die Angaben f�r folgenden Mitgliedstyp zu bearbeiten');
define('lang_mod_member_type_common_last_update', 'Letzte Aktualisierung');
define('lang_mod_member_type_common_member_type_saved', 'Neuer Mitgliedstyp erfolgreich gespeichert');
define('lang_mod_member_type_common_member_type_updated', 'Mitgliedstyp erfolgreich aktualisiert');
define('lang_mod_member_type_common_fail_to_save_member_type', 'Speicherung/Aktualisierung der Mitgliedstypdaten FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_member_type_field_name', 'Bezeichnung des Mitgliedstyps');
define('lang_mod_member_type_field_periode', 'Mitgliedschaftsdauer (in Tagen)');
define('lang_mod_circ_field_loan_limit', 'Ausleihlimit');
define('lang_mod_circ_field_loan_periode', 'Ausleihdauer (in Tagen)'); //? (Loan Periode)
define('lang_mod_circ_field_reserve', 'Vormerkungen');
define('lang_mod_circ_field_reserve_limit', 'Vormerkungen Limit');
define('lang_mod_circ_field_reborrow_limit', 'Ausleiherneuerungen maximal');
define('lang_mod_circ_field_fine_each_day', 'Geb�hren pro Tag');
define('lang_mod_circ_field_grace_periode', 'Kulanzzeit bei �berf�lligkeit');
# import membership
define('lang_mod_member_import_alert_file_noempty', 'Bitte w�hlen Sie eine Datei zum Import aus!');
define('lang_mod_member_import_alert_required_noempty', 'Erforderliche Felder m�ssen korrekt angegeben sein!');
define('lang_mod_member_import_alert_fail', 'Hochladen fehlgeschlagen! Dateityp ist unzul�ssig oder ist gr��er als');
define('lang_mod_member_import_info_record_uploaded',  'Datens�tze erfolgreich in die Mitgliederdatenbank eingef�gt, von Datensatz'); //? from record?
define('lang_mod_member_import_field_file', 'Zu importierende Datei');
define('lang_mod_member_import_field_field_separator', 'Trennzeichen f�r Felder');
define('lang_mod_member_import_field_field_enclosed', 'Feldinhalte eingeschlossen zwischen');
define('lang_mod_member_import_field_record_number', 'Zahl der zu importierenden Datens�tze (0 f�r alle Datens�tze)');
define('lang_mod_member_import_field_record_offset', 'Beginnend von Datensatz');
define('lang_mod_member_import_button_start', 'Import starten');
# export membership
define('lang_mod_member_export_alert_required_noempty', 'Erforderliche Felder m�ssen korrekt angegeben sein!');
define('lang_mod_member_export_alert_fail', 'Es befinden sich keine Datens�tze in der Mitgliederdatenbank, Export FEHLGESCHLAGEN');
define('lang_mod_member_export_alert_query_fail', 'Fehler bei der Datenbankabfrage, Export FEHLGESCHLAGEN!');
define('lang_mod_member_export_field_field_separator', 'Trennzeichen f�r Felder');
define('lang_mod_member_export_field_field_enclosed', 'Feldinhalte eingeschlossen zwischen');
define('lang_mod_member_export_field_record_number', 'Zahl der zu exportierenden Datens�tze (0 f�r alle Datens�tze)');
define('lang_mod_member_export_field_record_offset', 'Beginnend von Datensatz');
define('lang_mod_member_export_field_record_separator', 'Datensatztrennzeichen');
define('lang_mod_member_export_button_start', 'Export starten');

/* MASTER FILE MODULE */
# submenu
define('lang_mod_masterfile_authority_files', 'Normdateien');
define('lang_mod_masterfile_lookup_files', 'Nachschlagedateien');
define('lang_mod_masterfile_gmd', 'Ressourcenart');
define('lang_mod_masterfile_gmd_titletag', 'Ressourcenart');
define('lang_mod_masterfile_gmd_new_add', 'Neue Ressourcenart');
define('lang_mod_masterfile_gmd_list', 'Ressourcenarten ansehen');
define('lang_mod_masterfile_publisher', 'Verlag');
define('lang_mod_masterfile_publisher_titletag', 'Verlag');
define('lang_mod_masterfile_publisher_new_add', 'Neuer Verlag');
define('lang_mod_masterfile_publisher_list', 'Verlage ansehen');
define('lang_mod_masterfile_supplier', 'Zulieferer');
define('lang_mod_masterfile_supplier_titletag', 'Zulieferer f�r Bibliotheksexemplare');
define('lang_mod_masterfile_supplier_new_add', 'Neuer Zulieferer');
define('lang_mod_masterfile_supplier_list', 'Zulieferer ansehen');
define('lang_mod_masterfile_author', 'Autor');
define('lang_mod_masterfile_author_titletag', 'Autoren');
define('lang_mod_masterfile_author_new_add', 'Neuer Autor');
define('lang_mod_masterfile_author_list', 'Autoren ansehen');
define('lang_mod_masterfile_topic', 'Schlagwort');
define('lang_mod_masterfile_topic_titletag', 'Schlagwort');
define('lang_mod_masterfile_topic_list', 'Schlagw�rter ansehen');
define('lang_mod_masterfile_topic_type', 'Schlagwortkategorie');
define('lang_mod_masterfile_topic_new_add', 'Neues Schlagwort');
define('lang_mod_masterfile_location', 'Standort'); //? doch Zweigstelle? Der "echte" Standort wird dann �ber Shelf Location angegeben
define('lang_mod_masterfile_location_titletag', 'Standortangabe f�r Exemplare');
define('lang_mod_masterfile_location_new_add', 'Neuer Standort');
define('lang_mod_masterfile_location_list', 'Standorte ansehen');
define('lang_mod_masterfile_place', 'Erscheinungsort');
define('lang_mod_masterfile_place_titletag', 'Erscheinungsort');
define('lang_mod_masterfile_place_new_add', 'Neuer Erscheinungsort');
define('lang_mod_masterfile_place_list', 'Erscheinungsorte ansehen');
define('lang_mod_masterfile_itemstatus', 'Exemplarstatus');
define('lang_mod_masterfile_itemstatus_titletag', 'Exemplarstatus');
define('lang_mod_masterfile_itemstatus_new_add', 'Neuer Exemplarstatus');
define('lang_mod_masterfile_itemstatus_list', 'Exemplarstatus ansehen'); //! item_status.php wrong (lang_mod_masterfile_itemstatus)
define('lang_mod_masterfile_colltype', 'Sammlungstyp');
define('lang_mod_masterfile_colltype_titletag', 'Sammlungstyp (Thema, Genre)');
define('lang_mod_masterfile_colltype_new_add', 'Neuer Sammlungstyp');
define('lang_mod_masterfile_colltype_list', 'Sammlungstypen ansehen');
define('lang_mod_masterfile_lang', 'Sprache');
define('lang_mod_masterfile_lang_titletag', 'Sprache in der Werke verfasst sind');
define('lang_mod_masterfile_lang_new_add', 'Neue Sprache');
define('lang_mod_masterfile_lang_list', 'Sprachen ansehen');
define('lang_mod_masterfile_label', 'Kennzeichnung');
define('lang_mod_masterfile_label_titletag', 'Besondere Kennzeichnungen f�r Titel, wie z.B. \'Neuer Titel\'');
define('lang_mod_masterfile_label_new_add', 'Neue Kennzeichnung');
define('lang_mod_masterfile_label_list', 'Kennzeichnungen ansehen');
define('lang_mod_masterfile_frequency', 'Erscheinungsh�ufigkeit');
define('lang_mod_masterfile_frequency_titletag', 'Erscheinungsh�ufigkeit (Periodika)');
define('lang_mod_masterfile_frequency_new_add', 'Neue Erscheinungsh�ufigkeit');
define('lang_mod_masterfile_frequency_list', 'Erscheinungsh�ufigkeiten ansehen');
# author master file
# common
define('lang_mod_masterfile_author_alert_name_noempty', 'Name des Autors muss angegeben sein');
define('lang_mod_masterfile_author_alert_new_add_ok', 'Neuer Autor erfolgreich gespeichert');
define('lang_mod_masterfile_author_alert_add_fail', 'Speicherung der Autorendaten FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_author_alert_update_ok', 'Autorendaten erfolgreich aktualisiert');
define('lang_mod_masterfile_author_alert_update_fail', 'Aktualisierung der Autorendaten FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_author_alert_not_exists', 'FEHLER! Ausgew�hlte Daten sind nicht vorhanden');
define('lang_mod_masterfile_author_common_edit_info', 'Sie sind im Begriff die Angaben f�r folgenden Autor zu bearbeiten: ');
define('lang_mod_masterfile_author_common_last_update', 'Letzte Aktualisierung ');
define('lang_mod_masterfile_author_alert_all_delete_ok', 'Alle Daten erfolgreich gel�scht');
define('lang_mod_masterfile_author_alert_all_delete_fail', 'Einige oder alle Daten wurden NICHT erfolgreich gel�scht!\nBitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_author_alert_delete_ok', 'L�schung des Autors fehlgeschlagen');
# form
define('lang_mod_masterfile_author_form_field_name', 'Name des Autors');
define('lang_mod_masterfile_author_form_field_authority', 'Normdatentyp');
# collection type master file
# common
define('lang_mod_masterfile_colltype_alert_name_noempty', 'Bezeichnung des Sammlungstyps muss angegeben sein');
define('lang_mod_masterfile_colltype_alert_new_add_ok', 'Neuer Sammlungstyp erfolgreich gespeichert');
define('lang_mod_masterfile_colltype_alert_add_fail', 'Speicherung des Sammlungstyps FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_colltype_alert_update_ok', 'Sammlungstyp erfolgreich aktualisiert');
define('lang_mod_masterfile_colltype_alert_update_fail', 'Aktualisierung des Sammlungstypss FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_colltype_alert_not_exists', 'FEHLER! Ausgew�hlte Daten sind nicht vorhanden');
define('lang_mod_masterfile_colltype_common_edit_info', 'Sie sind im Begriff die Angaben f�r folgend.. ... zu bearbeiten collection type data : ');
define('lang_mod_masterfile_colltype_common_last_update', 'Letzte Aktualisierung ');
define('lang_mod_masterfile_colltype_alert_not_delete', 'Folgende Daten k�nnen nicht gel�scht werden: \n');
define('lang_mod_masterfile_colltype_alert_all_delete_ok', 'Alle Daten erfolgreich gel�scht');
define('lang_mod_masterfile_colltype_alert_all_delete_fail', 'Einige oder alle Daten wurden NICHT erfolgreich gel�scht!\nBitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_colltype_alert_has_item', 'Der Sammlungstyp ({item_name}) ist noch f�r {number_items} Exemplar(e) eingetragen');
define('lang_mod_masterfile_colltype_alert_inuse', 'Dieser Sammlungstyp kann nicht gel�scht werden, da er noch f�r {item_d} Exemplar(e) eingetragen ist. Bitte l�schen Sie die Exemplare (bzw. diese Angabe dort) zun�chst');
define('lang_mod_masterfile_colltype_alert_delete_fail', 'L�schung des Sammlungstyps fehlgeschlagen');
# form
define('lang_mod_masterfile_colltype_form_field_colltype', 'Sammlungstyp');
# language master file
# common
define('lang_mod_masterfile_lang_alert_name_noempty', 'Codek�rzel und/oder Name der Sprache m�ssen angegeben sein');
define('lang_mod_masterfile_lang_alert_new_add_ok', 'Neue Sprache erfolgreich gespeichert');
define('lang_mod_masterfile_lang_alert_add_fail', 'Speicherung der Sprache FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_lang_alert_update_ok', 'Sprachangaben erfolgreich aktualisiert');
define('lang_mod_masterfile_lang_alert_update_fail', 'Aktualisierung der Sprachangaben FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_lang_alert_not_exists', 'FEHLER! Ausgew�hlte Daten sind nicht vorhanden');
define('lang_mod_masterfile_lang_common_edit_info', 'Sie sind im Begriff die Angaben f�r folgende Sprache zu bearbeiten: ');
define('lang_mod_masterfile_lang_common_last_update', 'Letzte Aktualisierung ');
define('lang_mod_masterfile_lang_alert_all_delete_ok', 'Alle Daten erfolgreich gel�scht');
define('lang_mod_masterfile_lang_alert_all_delete_fail', 'Einige oder alle Daten wurden NICHT erfolgreich gel�scht!\nBitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_lang_alert_delete_ok', 'L�schung der Sprache fehlgeschlagen');
# form
define('lang_mod_masterfile_lang_form_field_lang_code', 'Sprache Codek�rzel');
define('lang_mod_masterfile_lang_form_field_name', 'Sprache');
# GMD master file
# common
define('lang_mod_masterfile_gmd_alert_name_noempty', 'Codek�rzel und Name der Ressourcenart m�ssen angegeben sein');
define('lang_mod_masterfile_gmd_alert_new_add_ok', 'Neue Ressourcenart erfolgreich gespeichert');
define('lang_mod_masterfile_gmd_alert_add_fail', 'Speicherung der Ressourcenart FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_gmd_alert_update_ok', 'Ressourcenart erfolgreich aktualisiert');
define('lang_mod_masterfile_gmd_alert_update_fail', 'Aktualisierung der Ressourcenart FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_gmd_alert_not_exists', 'FEHLER! Ausgew�hlte Daten sind nicht vorhanden');
define('lang_mod_masterfile_gmd_common_edit_info', 'Sie sind im Begriff die Angaben f�r folgende Ressourcenart zu bearbeiten');
define('lang_mod_masterfile_gmd_common_last_update', 'Letzte Aktualisierung ');
define('lang_mod_masterfile_gmd_alert_all_delete_ok', 'Alle Daten erfolgreich gel�scht');
define('lang_mod_masterfile_gmd_alert_all_delete_fail', 'Einige oder alle Daten wurden NICHT erfolgreich gel�scht!\nBitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_gmd_alert_delete_ok', 'Ressourcenart erfolgreich gel�scht');
define('lang_mod_masterfile_gmd_alert_delete_fail', 'L�schung der Ressourcenart fehlgeschlagen');
# form
define('lang_mod_masterfile_gmd_form_field_gmd_code', 'Ressourcenart Codek�rzel');
define('lang_mod_masterfile_gmd_form_field_gmd_name', 'Name der Ressourcenart');
define('lang_mod_masterfile_gmd_form_field_gmd_icon', 'Ressourcenart Icon');
# Item status master file
# common
define('lang_mod_masterfile_itemstatus_alert_name_noempty', 'Codek�rzel und Bezeichnung des Exemplarstatus m�ssen angegeben sein');
define('lang_mod_masterfile_itemstatus_alert_new_add_ok', 'Neuer Exemplarstatus erfolgreich gespeichert');
define('lang_mod_masterfile_itemstatus_alert_add_fail', 'Speicherung des Exemplarstatus FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_itemstatus_alert_update_ok', 'Exemplarstatus erfolgreich aktualisiert');
define('lang_mod_masterfile_itemstatus_alert_update_fail', 'Aktualisierung des Exemplarstatus FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_itemstatus_alert_not_exists', 'FEHLER! Ausgew�hlte Daten sind nicht vorhanden');
define('lang_mod_masterfile_itemstatus_common_edit_info', 'Sie sind im Begriff die Angaben f�r folgenden Exemplarstatus zu bearbeiten');
define('lang_mod_masterfile_itemstatus_common_last_update', 'Letzte Aktualisierung');
define('lang_mod_masterfile_itemstatus_alert_all_delete_ok', 'Alle Daten erfolgreich gel�scht');
define('lang_mod_masterfile_itemstatus_alert_all_delete_fail', 'Einige oder alle Daten wurden NICHT erfolgreich gel�scht!\nBitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_itemstatus_alert_delete_fail', 'L�schung des Exemplarstatus fehlgeschlagen');
# form
define('lang_mod_masterfile_itemstatus_form_field_code', 'Exemplarstatus Codek�rzel');
define('lang_mod_masterfile_itemstatus_form_field_name', 'Bezeichnung des Exemplarstatus');
define('lang_mod_masterfile_itemstatus_form_field_rules', 'Regeln');
# location master file
# common
define('lang_mod_masterfile_location_alert_name_noempty', 'Codek�rzel und Name des Standorts m�ssen angegeben sein');
define('lang_mod_masterfile_location_alert_new_add_ok', 'Neuer Standort erfolgreich gespeichert');
define('lang_mod_masterfile_location_alert_add_fail', 'Speicherung des Standorts FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_location_alert_update_ok', 'Standortangaben erfolgreich aktualisiert');
define('lang_mod_masterfile_location_alert_update_fail', 'Aktualisierung des Standorts FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_location_alert_not_exists', 'FEHLER! Ausgew�hlte Daten sind nicht vorhanden');
define('lang_mod_masterfile_location_common_edit_info', 'Sie sind im Begriff die Angaben f�r folgenden Standort zu bearbeiten: ');
define('lang_mod_masterfile_location_common_last_update', 'Letzte Aktualisierung ');
define('lang_mod_masterfile_location_alert_not_delete', 'Folgende Standortdaten k�nnen nicht gel�scht werden: \n');
define('lang_mod_masterfile_location_alert_all_delete_ok', 'Alle Daten erfolgreich gel�scht');
define('lang_mod_masterfile_location_alert_all_delete_fail', 'Einige oder alle Daten wurden NICHT erfolgreich gel�scht!\nBitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_location_alert_has_item', 'Der Standort ({item_name}) ist noch f�r {number_items} Exemplar(e) eingetragen');
define('lang_mod_masterfile_location_alert_inuse', 'Dieser Standort kann nicht gel�scht werden, da er noch f�r {item_d} Exemplar(e) eingetragen ist. Bitte l�schen Sie die Exemplare (bzw. diese Angabe dort) zun�chst');
define('lang_mod_masterfile_location_alert_delete_fail', 'L�schung des Standorts fehlgeschlagen');
# form
define('lang_mod_masterfile_location_form_field_code', 'Standort Codek�rzel');
define('lang_mod_masterfile_location_form_field_name', 'Name des Standorts');
# place of publication master file
# common
define('lang_mod_masterfile_place_alert_name_noempty', 'Name des Erscheinungsorts muss angegeben sein');
define('lang_mod_masterfile_place_alert_new_add_ok', 'Neuer Erscheinungsort erfolgreich gespeichert');
define('lang_mod_masterfile_place_alert_add_fail', 'Speicherung des Erscheinungsorts FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_place_alert_update_ok', 'Erscheinungsort erfolgreich aktualisiert');
define('lang_mod_masterfile_place_alert_update_fail', 'Aktualisierung des Erscheinungsorts FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_place_alert_not_exists', 'FEHLER! Ausgew�hlte Daten sind nicht vorhanden');
define('lang_mod_masterfile_place_common_edit_info', 'Sie sind im Begriff die Angaben f�r folgenden Erscheinungsort zu bearbeiten');
define('lang_mod_masterfile_place_common_last_update', 'Letzte Aktualisierung ');
define('lang_mod_masterfile_place_alert_not_delete', 'Folgende Erscheinungsorte k�nnen nicht gel�scht werden: \n');
define('lang_mod_masterfile_place_alert_all_delete_ok', 'Alle Daten erfolgreich gel�scht');
define('lang_mod_masterfile_place_alert_all_delete_fail', 'Einige oder alle Daten wurden NICHT erfolgreich gel�scht!\nBitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_place_alert_delete_fail', 'L�schung des Erscheinungsorts fehlgeschlagen');
# form
define('lang_mod_masterfile_place_form_field_name', 'Erscheinungsort Name');
# publisher master file
# common
define('lang_mod_masterfile_publisher_alert_name_noempty', 'Name des Verlags muss angegeben sein');
define('lang_mod_masterfile_publisher_alert_new_add_ok', 'Neuer Verlag erfolgreich gespeichert');
define('lang_mod_masterfile_publisher_alert_add_fail', 'Speicherung des Verlags FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_publisher_alert_update_ok', 'Verlag erfolgreich aktualisiert');
define('lang_mod_masterfile_publisher_alert_update_fail', 'Aktualisierung des Verlags FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_publisher_alert_not_exists', 'FEHLER! Ausgew�hlte Daten sind nicht vorhanden');
define('lang_mod_masterfile_publisher_common_edit_info', 'Sie sind im Begriff die Angaben f�r folgendem Verlag zu bearbeiten');
define('lang_mod_masterfile_publisher_common_last_update', 'Letzte Aktualisierung ');
define('lang_mod_masterfile_publisher_alert_not_delete', 'Folgender Verlag k�nnen nicht gel�scht werden: \n');
define('lang_mod_masterfile_publisher_alert_all_delete_ok', 'Alle Daten erfolgreich gel�scht');
define('lang_mod_masterfile_publisher_alert_all_delete_fail', 'Einige oder alle Daten wurden NICHT erfolgreich gel�scht!\nBitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_publisher_alert_delete_fail', 'L�schung des Verlags fehlgeschlagen');
# form
define('lang_mod_masterfile_publisher_form_field_name', 'Name des Verlags');
# supplier master file
# common
define('lang_mod_masterfile_supplier_alert_name_noempty', 'Name des Zulieferers muss angegeben sein');
define('lang_mod_masterfile_supplier_alert_new_add_ok', 'Neuer Zulieferer erfolgreich gespeichert');
define('lang_mod_masterfile_supplier_alert_add_fail', 'Speicherung des Zulieferers FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_supplier_alert_update_ok', 'Zulieferer erfolgreich aktualisiert');
define('lang_mod_masterfile_supplier_alert_update_fail', 'Aktualisierung des Zulieferers FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_supplier_alert_not_exists', 'FEHLER! Ausgew�hlte Daten sind nicht vorhanden');
define('lang_mod_masterfile_supplier_common_edit_info', 'Sie sind im Begriff die Angaben f�r folgenden Zulieferer zu bearbeiten');
define('lang_mod_masterfile_supplier_common_last_update', 'Letzte Aktualisierung ');
#define('lang_mod_masterfile_supplier_alert_not_delete', 'Folgende Zulieferer k�nnen nicht gel�scht werden: \n'); //? why is it outcommented?
define('lang_mod_masterfile_supplier_alert_all_delete_ok', 'Alle Daten erfolgreich gel�scht');
define('lang_mod_masterfile_supplier_alert_all_delete_fail', 'Einige oder alle Daten wurden NICHT erfolgreich gel�scht!\nBitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_supplier_alert_delete_fail', 'L�schung des Zulieferers fehlgeschlagen');
# form
define('lang_mod_masterfile_supplier_form_field_name', 'Name des Zulieferers');
define('lang_mod_masterfile_supplier_form_field_address', 'Adresse');
define('lang_mod_masterfile_supplier_form_field_contact', 'Kontakt(person)');
define('lang_mod_masterfile_supplier_form_field_phone', 'Telefon');
define('lang_mod_masterfile_supplier_form_field_fax', 'Fax');
define('lang_mod_masterfile_supplier_form_field_account', 'Kontonummer');
# topic master file
# common
define('lang_mod_masterfile_topic_alert_name_noempty', 'Schlagwort muss angegeben sein');
define('lang_mod_masterfile_topic_alert_new_add_ok', 'Neues Schlagwort erfolgreich gespeichert');
define('lang_mod_masterfile_topic_alert_add_fail', 'Speicherung des Schlagworts FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_topic_alert_update_ok', 'Schlagwort erfolgreich aktualisiert');
define('lang_mod_masterfile_topic_alert_update_fail', 'Aktualisierung des Schlagworts FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_topic_alert_not_exists', 'FEHLER! Ausgew�hlte Daten sind nicht vorhanden');
define('lang_mod_masterfile_topic_common_edit_info', 'Sie sind im Begriff die Angaben f�r folgendes Schlagwort zu bearbeiten');
define('lang_mod_masterfile_topic_common_last_update', 'Letzte Aktualisierung ');
define('lang_mod_masterfile_topic_alert_all_delete_ok', 'Alle Daten erfolgreich gel�scht');
define('lang_mod_masterfile_topic_alert_all_delete_fail', 'Einige oder alle Daten wurden NICHT erfolgreich gel�scht!\nBitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_topic_alert_delete_fail', 'L�schung des Schlagworts fehlgeschlagen');
# form
define('lang_mod_masterfile_topic_form_field_name', 'Schlagwort');
# label master file
# common
define('lang_mod_masterfile_label_alert_new_add_ok', 'Neue Kennzeichnung erfolgreich gespeichert');
define('lang_mod_masterfile_label_alert_add_fail', 'Speicherung der Kennzeichnung FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_label_alert_update_ok', 'Kennzeichnung erfolgreich aktualisiert');
define('lang_mod_masterfile_label_alert_update_fail', 'Aktualisierung der Kennzeichnung FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_label_alert_not_exists', 'FEHLER! Ausgew�hlte Daten sind nicht vorhanden');
define('lang_mod_masterfile_label_common_edit_info', 'Sie sind im Begriff die Angaben f�r folgende Kennzeichnung zu bearbeiten');
define('lang_mod_masterfile_label_common_last_update', 'Letzte Aktualisierung ');
define('lang_mod_masterfile_label_alert_all_delete_ok', 'Alle Daten erfolgreich gel�scht');
define('lang_mod_masterfile_label_alert_all_delete_fail', 'Einige oder alle Daten wurden NICHT erfolgreich gel�scht!\nBitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_label_alert_delete_fail', 'L�schung der Kennzeichnung fehlgeschlagen');
# form
define('lang_mod_masterfile_label_form_field_label_name', 'Bezeichnung der Kennzeichnung');
define('lang_mod_masterfile_label_form_field_label_desc', 'Beschreibung der Kennzeichnung');
define('lang_mod_masterfile_label_form_field_label_image', 'Kennzeichnung Bild');
# frequency
define('lang_mod_masterfile_frequency_alert_new_add_ok', 'Neue Erscheinungsh�ufigkeit erfolgreich gespeichert');
define('lang_mod_masterfile_frequency_alert_add_fail', 'Speicherung der Erscheinungsh�ufigkeit FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_frequency_alert_update_ok', 'Erscheinungsh�ufigkeit erfolgreich aktualisiert');
define('lang_mod_masterfile_frequency_alert_update_fail', 'Aktualisierung der Erscheinungsh�ufigkeit FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_frequency_alert_not_exists', 'FEHLER! Ausgew�hlte Daten sind nicht vorhanden');
define('lang_mod_masterfile_frequency_common_edit_info', 'Sie sind im Begriff die Angaben f�r folgende Erscheinungsh�ufigkeit zu bearbeiten');
define('lang_mod_masterfile_frequency_common_last_update', 'Letzte Aktualisierung ');
define('lang_mod_masterfile_frequency_alert_all_delete_ok', 'Alle Daten erfolgreich gel�scht');
define('lang_mod_masterfile_frequency_alert_all_delete_fail', 'Einige oder alle Daten wurden NICHT erfolgreich gel�scht!\nBitte kontaktieren Sie den Systemadministrator');
define('lang_mod_masterfile_frequency_alert_delete_fail', 'L�schung der Erscheinungsh�ufigkeit fehlgeschlagen');
# form
define('lang_mod_masterfile_frequency_form_field_frequency_name', 'Erscheinungsh�ufigkeit');
define('lang_mod_masterfile_frequency_form_field_frequency_lang', 'Sprache');
define('lang_mod_masterfile_frequency_form_field_frequency_time_increment', 'Zeitintervall');
define('lang_mod_masterfile_frequency_form_field_frequency_unit', 'Zeiteinheit');

/* STOCK TAKE MODULE */
# common
define('lang_mod_stocktake_active_status', 'Derzeit aktiv');
define('lang_mod_stocktake_total', 'Exemplare absolut in Inventur'); //? (Total Item Stock Taked)
define('lang_mod_stocktake_lost_total', 'Exemplare absolut verloren');
define('lang_mod_stocktake_exists_total', 'Exemplare absolut vorhanden');
define('lang_mod_stocktake_loan_total', 'Exemplare absolut ausgeliehen');
define('lang_mod_stocktake_participants', 'Inventurmitarbeiter');
define('lang_mod_stocktake_total_checked', 'Exemplare absolut gepr�ft/gescannt'); //? (Total Checked/Scanned Items)
define('lang_mod_stocktake_finish_confirmation', 'Wollen Sie die aktuellen Inventur wirklich beenden? Einmal beendet k�nnen Sie diese Inventur nicht nicht wieder fortsetzen');
define('lang_mod_stocktake_purge_lost', 'Verlorene Exemplare l�schen');
# submenu
define('lang_mod_stocktake', 'Inventur');
define('lang_mod_stocktake_status', 'Status');
define('lang_mod_stocktake_history', 'Bisherige Inventuren');
define('lang_mod_stocktake_history_titletag', 'Betrachten sie Berichte abgeschlossener Inventuren');
define('lang_mod_stocktake_current', 'Aktuelle Inventur');
define('lang_mod_stocktake_current_titletag', 'Aktuellen Inventurvorgang ansehen');
define('lang_mod_stocktake_report', 'Inventurbericht');
define('lang_mod_stocktake_report_titletag', 'Bericht des aktuellen Inventurnvorgangs ansehen');
define('lang_mod_stocktake_init', 'Inventur starten');
define('lang_mod_stocktake_init_titletag', 'Einen neuen Inventurvorgang starten');
define('lang_mod_stocktake_finish', 'Inventur beenden');
define('lang_mod_stocktake_finish_titletag', 'Den aktuellen Inventurnvorgang abschlie�en');
define('lang_mod_stocktake_lost', 'Verlorene Exemplare aktuell');
define('lang_mod_stocktake_lost_titletag', 'Verlorene Exemplare des aktuellen Inventurvorgangs ansehen');
define('lang_mod_stocktake_log', 'Inventurlog');
define('lang_mod_stocktake_log_titletag', 'Log des aktuellen Inventurvorgangs ansehen');
define('lang_mod_stocktake_resync', 'Abgleich');
define('lang_mod_stocktake_resync_titletag', 'Daten der Titelaufnahmen mit dem aktuellen Inventurvorgang abgleichen');
# initialization
define('lang_mod_stocktake_init_info', 'Ein Inventurvorgang l�uft bereits!');
define('lang_mod_stocktake_init_alert_noempty', 'Name der Inventur muss angegeben sein!');
define('lang_mod_stocktake_init_alert_started', 'Inventurvorgang gestartet');
define('lang_mod_stocktake_init_alert_fail_start', 'Start des Inventurvorgangs FEHLGESCHLAGEN.\nKeine Exemplare f�r eine Inventur vorhanden!');
define('lang_mod_stocktake_init_button_start', 'Inventur starten');
define('lang_mod_stocktake_init_field_name', 'Bezeichnung der Inventur');
define('lang_mod_stocktake_init_field_GMD', 'Ressourcenart');
define('lang_mod_stocktake_init_field_colltype', 'Sammlungstyp');
define('lang_mod_stocktake_init_field_location', 'Standort');
define('lang_mod_stocktake_init_field_site', 'Regalstandort');
define('lang_mod_stocktake_init_field_classification', 'Klassifikation'); //? hmm
define('lang_mod_stocktake_init_field_class_text', 'Geben Sie die Klassen getrennt durch Kommata an. Verwenden Sie das * als Platzhalter (Wildcard)');
define('lang_mod_stocktake_init_field_option_all', 'ALLE');
define('lang_mod_stocktake_init_field_start_date', 'Beginn');
define('lang_mod_stocktake_init_field_end_date', 'Abschluss');
define('lang_mod_stocktake_init_field_report_file', 'Bericht');
define('lang_mod_stocktake_init_field_user', 'Gestartet von');
#report
define('lang_mod_stocktake_report_page_title', 'BERICHT DER AKTUELLEN INVENTUR');
define('lang_mod_stocktake_report_not_initialize', 'KEIN Inventurvorgang gestartet bisher!');
define('lang_mod_stocktake_report_no_process', 'KEIN Inventurvorgang derzeit am laufen!');
define('lang_mod_stocktake_alert_process_finish', 'Inventurvorgang abgeschlossen!');

/* REPORTING MODULE */
# submenu
define('lang_mod_report', 'Berichte');
define('lang_mod_report_stat', 'Inventursstatistik');
define('lang_mod_report_stat_titletag', 'Statistik zum Bibliotheksbestand ansehen');
define('lang_mod_report_loan', 'Ausleihbericht');
define('lang_mod_report_loan_titletag', 'Bericht zur Ausleihe ansehen');
define('lang_mod_report_member', 'Mitgliedschaftsbericht');
define('lang_mod_report_member_titletag', 'Bericht zu Bibliotheksmitgliedschaften ansehen');
# General Statistic
define('lang_mod_report_stat_page_head', 'Bestandsstatistik - Bericht');
define('lang_mod_report_stat_table_head', 'Zusammenfassung der Bestandsstatistik');
define('lang_mod_report_stat_field_title', 'Titel absolut');
define('lang_mod_report_stat_field_items', 'Exemplare absolut');
define('lang_mod_report_stat_field_onloan', 'Entliehene Exemplare absolut');
define('lang_mod_report_stat_field_available', 'Exemplare absolut in der Bibliothek'); //? Wo ist der Unterschied zu "Exemplare absolut" (Total  item/copies)
define('lang_mod_report_stat_field_by_gmd', 'Titel absolut nach Medium/Ressourcenart');
define('lang_mod_report_stat_field_by_colltype', 'Exemplare absolut nach Sammlungstyp');
define('lang_mod_report_stat_field_title_topten', 'Die 10 beliebtesten Titel');
# Loan Statistic
define('lang_mod_report_loan_page_head', 'Ausleihbericht');
define('lang_mod_report_loan_table_head', 'Zusammenfassung der Ausleihvorg�nge');
define('lang_mod_report_loan_field_total', 'Entleihungen absolut');
define('lang_mod_report_loan_field_transaction', 'Ausleihvorg�nge absolut');
define('lang_mod_report_loan_field_perday', 'Ausleihvorg�nge im Durchschnitt (pro Tag)');
define('lang_mod_report_loan_field_peak', 'Ausleihvorg�nge - Spitzenwert');
define('lang_mod_report_loan_field_member_with_loan', 'Mitglieder mit Entleihungen');
define('lang_mod_report_loan_field_member_no_loan', 'Mitglieder ohne Entleihungen bisher');
define('lang_mod_report_loan_field_overdue', 'Entleihungen absolut mit Mahngeb�hren');
define('lang_mod_report_loan_field_by_gmd', 'Entleihungen absolut nach Ressourcenart/Medium');
define('lang_mod_report_loan_field_by_colltype', 'Entleihungen absolut nach Sammlungstyp');
# Member Statistic
define('lang_mod_report_member_page_head', 'Mitgliedschaftsbericht');
define('lang_mod_report_member_table_head', 'Zusammenfassung zu Mitgliedschaften');
define('lang_mod_report_member_field_registered', 'Registrierte Mitglieder absolut');
define('lang_mod_report_member_field_active', 'Aktive Mitglieder absolut');
define('lang_mod_report_member_field_active_topten', 'Die 10 aktivsten Mitglieder');
define('lang_mod_report_member_field_by_type', 'Mitglieder absolut nach Mitgliedstyp');
define('lang_mod_report_member_field_expired', 'Abgelaufene Mitgliedschaften absolut');

/* SERIAL CONTROL MODULE */
# submenu
define('lang_mod_serial', 'Periodikaverwaltung');
define('lang_mod_serial_subscription', 'Abonnements');
define('lang_mod_serial_subscription_titletag', 'Abonnements verwalten');
define('lang_mod_serial_kardex', 'Kardex');
define('lang_mod_serial_kardex_titletag', 'Kardex verwalten');
# subcription menu
define('lang_mod_serial_subscription_add', 'Neues Abonnement hinzuf�gen');
define('lang_mod_serial_subscription_list', 'Abonnements ansehen');
# kardex menu
define('lang_mod_serial_kardex_add', 'Neuen Kardex hinzuf�gen');
define('lang_mod_serial_kardex_view', 'Kardex ansehen');
# fields
define('lang_mod_serial_field_date_start', 'Abonniert seit');
define('lang_mod_serial_field_exemplar', 'Insgesamt erwartete Exemplare');
define('lang_mod_serial_field_period', 'Periodenbezeichnung'); //? (Period Name); ~Rechnungszeitraum
define('lang_mod_serial_field_notes', 'Bemerkungen zum Abonnement');
define('lang_mod_serial_kardex_field_date_expected', 'Erwartet (Datum)');
define('lang_mod_serial_kardex_field_date_received', 'Erhalten (Datum)');
define('lang_mod_serial_kardex_field_seq_number', 'Fortlaufende Nummer');
define('lang_mod_serial_kardex_field_notes', 'Bemerkungen');
# messages
define('lang_mod_serial_alert_01', 'Fehler beim Einf�gen des Abonnement. Ein Abonnementsdatum muss angegeben sein!');
define('lang_mod_serial_subscription_alert_delete_ok', 'Abonnement erfolgreich gel�scht');
define('lang_mod_serial_subscription_alert_delete_failed', 'L�schung des Abonnements FEHLGESCHLAGEN!');
define('lang_mod_serial_alert_02', 'Kardex aktualisiert!');
define('lang_mod_serial_alert_03', 'Karde gel�scht!');
define('lang_mod_serial_alert_new_added', 'Neues Abonnement erfolgreich gespeichert');
define('lang_mod_serial_alert_fail_to_save', 'Speicherung des Abonnement FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_serial_alert_updated', 'Abonnement erfolgreich aktualisiert');
define('lang_mod_serial_alert_not_updated', 'Aktualisierung des Abonnement FEHLGESCHLAGEN. Bitte kontaktieren Sie den Systemadministrator');
define('lang_mod_serial_alert_not_exists', 'Fehler! Das Abonnement ist nicht vorhanden!');
define('lang_mod_serial_common_info', 'Sie sind im Begriff die Angaben f�r folgendes Abonnement zu bearbeiten: ');


##### Added 2009-08 #####
# datagrid form
define('lang_sys_common_tblheader_delete', 'L�SCHEN');
define('lang_sys_common_tblheader_edit', 'EDIT');
define('lang_sys_common_tblheader_add', 'Hinzuf�gen');
define('lang_sys_common_tblheader_hover_sort', 'Sortiere List nach Spalte');
define('lang_sys_common_tblheader_hover_sort_asc', 'aufsteigend');
define('lang_sys_common_tblheader_hover_sort_desc', 'absteigend');
define('lang_sys_common_tblheader_print_header_part1', 'Datens�tze gefunden. Angezeigt wird Seite');
define('lang_sys_common_tblheader_print_header_part2', 'Datens�tze pro Seite');
/* BIBLIOGRAPHIC MODULE */
# submenu
define('lang_mod_biblio_tools_common_print_msg1', 'H�chstens');
define('lang_mod_biblio_tools_common_print_msg2', 'Datens�tze k�nnen auf einmal gedruckt werden. Derzeit sind');
define('lang_mod_biblio_tools_common_print_msg3', 'Eintr�ge in der Druckerwarteschlange.');
define('lang_mod_biblio_tools_card_generator_print_select', 'Mitgliederkartendruck starten');
define('lang_mod_biblio_tools_card_generator_print_clear', 'Druckerwarteschlange l�schen');
#item
define('lang_mod_biblio_item_common_status_description', 'Leihstatus');
define('lang_mod_biblio_item_common_status_onloan', 'Ausgeliehen');
define('lang_mod_biblio_item_common_status_returned', 'Zur�ckgegeben');
define('lang_mod_biblio_item_common_status_missing', 'Vermisst');
define('lang_mod_biblio_item_common_status_exists', 'Vorhanden');
# bibliography form fields
define('lang_mod_biblio_field_copies', 'Exemplare');
define('lang_mod_biblio_field_copies_none', 'Keine');
define('lang_mod_biblio_field_update', 'Letzte Aktualisierung');
define('lang_mod_biblio_field_opt_all', 'Alle Felder');
define('lang_mod_biblio_field_opt_title', 'Titel');
define('lang_mod_biblio_field_opt_subject', 'Schlagw�rter');
define('lang_mod_biblio_field_opt_author', 'Autoren');
define('lang_mod_biblio_field_opt_isbn', 'ISBN/ISSN');
define('lang_mod_biblio_field_opt_publisher', 'Verlage');
define('lang_mod_biblio_field_opt_none', 'NICHT ZUTREFFEND');
define('lang_mod_biblio_field_frequency_explain', 'Geben Sie dies bei Periodika an');
define('lang_mod_biblio_link_attachment_add', 'Dateianhang hinzuf�gen');
define('lang_mod_biblio_field_opt_show', 'Anzeigen');
define('lang_mod_biblio_field_opt_hide', 'Verbergen');
define('lang_mod_biblio_field_opt_promotefalse', 'Nicht anzeigen'); //?
define('lang_mod_biblio_field_opt_promotetrue', 'Anzeigen'); //?
define('lang_mod_biblio_author_form_title', 'Autor hinzuf�gen');
# pop-ups - attachment
define('lang_mod_biblio_attach_alert_typesize', 'Hochladen FEHLGESCHLAGEN! Dateityp nicht erlaubt oder Datei zu gro�!');
define('lang_mod_biblio_attach_alert_update_ok', 'Dateianhang wurde aktualisiert!');
define('lang_mod_biblio_attach_alert_update_fail', 'Aktualisierung des Dateianhangs FEHLGESCHLAGEN!');
define('lang_mod_biblio_attach_alert_added_ok', 'Dateianhang erfolgreich hochgeladen!');
define('lang_mod_biblio_attach_alert_added_fail', 'Speicherung des Dateianhangs FEHLGESCHLAGEN!');
define('lang_mod_biblio_attach_alert_removed', 'Dateianhang entfernt!');
define('lang_mod_biblio_attach_form_button_upload', 'Jetzt hochloaden');
define('lang_mod_biblio_attach_form_field_title', 'Titel');
define('lang_mod_biblio_attach_form_field_filedir', 'Speicherort'); //?
define('lang_mod_biblio_attach_form_field_browse', 'Anzuh�ngende Datei');
define('lang_mod_biblio_attach_form_field_url', 'URL');
define('lang_mod_biblio_attach_form_field_description', 'Beschreibung');
define('lang_mod_biblio_attach_form_field_access', 'Zugriff');
define('lang_mod_biblio_attach_form_opt_public', '�ffentlich');
define('lang_mod_biblio_attach_form_opt_private', 'Privat');
# item form fields
define('lang_mod_biblio_item_field_opt_available', 'Verf�gbar');
define('lang_mod_biblio_item_field_opt_buy', 'Einkauf');
define('lang_mod_biblio_item_field_opt_grant', 'Schenkung/Sonstiges');
define('lang_mod_biblio_item_field_opt_none', 'Keine Angabe');
# Simbio table
define('lang_simbio_nodata', 'Keine Daten');
# z3950
define('lang_mod_biblio_tools_z3950_connection', '* Bitte stellen Sie sicher, dass Sie mit dem Internet verbunden sind.');
# circulation
define('lang_mod_circ_tblheader_callno', 'Signatur');
/* MEMBERSHIP MODULE - # form */
define('lang_mod_membership_field_opt_autoset', 'Vorgabe verwenden');
define('lang_mod_membership_field_opt_yes', 'Ja');
define('lang_mod_membership_extend_button', 'Ausgew�hlte Mitglieder verl�ngern');
define('lang_mod_membership_extend_alert_confirm', 'Wollen Sie die Mitgliedschaft f�r die ausgew�hlten Mitglieder VERL�NGERN?');
define('lang_mod_membership_extend_success', 'Mitglieder verl�ngert!');
/* COMMON */
define('lang_sys_common_query_msg1', 'Abfrage in');
define('lang_sys_common_query_msg2', 'Sekunde(n) bearbeitet');
define('lang_sys_common_day', 'Tag');
define('lang_sys_common_week', 'Woche');
define('lang_sys_common_all', 'Alle');
define('lang_sys_common_month_short_01', 'Jan');
define('lang_sys_common_month_short_02', 'Feb');
define('lang_sys_common_month_short_03', 'M�r');
define('lang_sys_common_month_short_04', 'Apr');
define('lang_sys_common_month_short_05', 'Mai');
define('lang_sys_common_month_short_06', 'Jun');
define('lang_sys_common_month_short_07', 'Jul');
define('lang_sys_common_month_short_08', 'Aug');
define('lang_sys_common_month_short_09', 'Sep');
define('lang_sys_common_month_short_10', 'Okt');
define('lang_sys_common_month_short_11', 'Nov');
define('lang_sys_common_month_short_12', 'Dez');
/* REPORTING MODULE (especially "Other Reports"; and reports in other modules) */
# common
define('lang_mod_reporting_form_generic_header', 'Berichtsfilter');
define('lang_mod_reporting_form_button_filter_apply', 'Filter anwenden');
define('lang_mod_reporting_form_button_filter_options_show', 'Weitere Filteroptionen');
define('lang_mod_reporting_form_button_filter_options_hide', 'Filteroptionen verbergen');
define('lang_mod_reporting_form_button_print', 'Aktuelle Seite drucken');
# submenu (other)
define('lang_mod_report_other', 'Weitere Berichte');
define('lang_mod_report_other_recapitulation', 'Zusammenfassungen');
define('lang_mod_report_other_recapitulation_titletag', 'Zusammenfassungen von Titeln und Sammlungen, gefiltert nach Klassifikation oder anderen Kriterien');
define('lang_mod_report_other_titles', 'Titelliste');
define('lang_mod_report_other_titles_titletag', 'Liste vorhandener Titelaufnahmen');
define('lang_mod_report_other_itemtitles', 'Exemplarliste');
define('lang_mod_report_other_itemtitles_titletag', 'Liste vorhandener Exemplare');
define('lang_mod_report_other_itemusage', 'Jahresstatistik Exemplare');
define('lang_mod_report_other_itemusage_titletag', 'Ausleihstatistik f�r Exemplare nach Monaten eines Jahres');
define('lang_mod_report_other_loansclass', 'Ausleihen nach Klassifikation');
define('lang_mod_report_other_loansclass_titletag', 'Ausleihstatistik nach Klassifikation');
define('lang_mod_report_other_memberlist', 'Mitgliederliste');
define('lang_mod_report_other_memberlist_titletag', 'Liste von Bibliotheksmitgliedern');
define('lang_mod_report_other_loanmember', 'Entleihungen/Mitglieder');
define('lang_mod_report_other_loanmember_titletag', 'Liste derzeit ausgeliehener Titel nach Mitgliedern');
define('lang_mod_report_other_staffactivity', 'Mitarbeiterbericht');
define('lang_mod_report_other_staffactivity_titletag', 'T�tigkeiten der Mitarbeiter als Bericht');
# Report - common
define('lang_mod_report_common_form_titisbn', 'Titel/ISBN');
define('lang_mod_report_common_form_recspage', 'Datens�tze pro Seite');
define('lang_mod_report_common_form_recspage_help', 'W�hlen Sie einen Wert zwischen 20 und 200');
define('lang_mod_report_common_form_select_help', 'Halten Sie Strg w�hrend des Klickens gedr�ckt um mehere Eintr�ge zu w�hlen');
# Report - Recapitulation
define('lang_mod_report_recapitulation_form_recapby', 'Zusammenfassen nach');
define('lang_mod_report_recapitulation_print_header', 'Zusammenfassung von Titeln und Exemplaren nach');
# Report - Titles
define('lang_mod_report_recapitulation_form_author', 'Autor');
# Report - Loans by Classification
define('lang_mod_report_loansclass_form_opt_class0', '0er Klassifikationen');
define('lang_mod_report_loansclass_form_opt_class1', '1er Klassifikationen');
define('lang_mod_report_loansclass_form_opt_class2', '2er Klassifikationen');
define('lang_mod_report_loansclass_form_opt_class2x', '2Xer Klassifikationen (Islamisches)');
define('lang_mod_report_loansclass_form_opt_class3', '3er Klassifikationen');
define('lang_mod_report_loansclass_form_opt_class4', '4er Klassifikationen');
define('lang_mod_report_loansclass_form_opt_class5', '5er Klassifikationen');
define('lang_mod_report_loansclass_form_opt_class6', '6er Klassifikationen');
define('lang_mod_report_loansclass_form_opt_class7', '7er Klassifikationen');
define('lang_mod_report_loansclass_form_opt_class8', '8er Klassifikationen');
define('lang_mod_report_loansclass_form_opt_class9', '9er Klassifikationen');
define('lang_mod_report_loansclass_form_opt_classx', 'NON-Dezimal-Klassifikationen');
# Report - Member List
define('lang_mod_report_memberlist_form_regfrom', 'Registrierungsdatum ab');
define('lang_mod_report_memberlist_form_regto', 'Registrierungsdatum bis');
# Report - Loan List by Member
define('lang_mod_report_loanmember_form_loanfrom', 'Entleihungen ab');
define('lang_mod_report_loanmember_form_loanto', 'Entleihungen bis');
# Report - Overdued List
define('lang_mod_report_overdues_table_overdue', '�berf�lligkeit');
define('lang_mod_report_overdues_table_overdue_days', 'Tag(e)');
# Report - Staff Activity
define('lang_mod_report_staffactivity_form_activityfrom', 'Aktivit�ten ab');
define('lang_mod_report_staffactivity_form_activityto', 'Aktivit�ten bis');
define('lang_mod_report_staffactivity_tblheader_bibliography', 'Titel aufgenommen');
define('lang_mod_report_staffactivity_tblheader_items', 'Exemplare eingetragen');
define('lang_mod_report_staffactivity_tblheader_members', 'Mitglieder eingetragen');
define('lang_mod_report_staffactivity_tblheader_circulation', 'Ausleihen vorgenommen');
# Report - Reservation
define('lang_mod_report_reservation_form_reservefrom', 'Vormerkungen ab');
define('lang_mod_report_reservation_form_reserveto', 'Vormerkungen bis');
/* STOCK TAKE MODULE */
# submenu
define('lang_mod_stocktake_upload', 'Daten importieren');
define('lang_mod_stocktake_upload_titletag', 'Textdatei mit Barcodes hochladen');
# common
define('lang_mod_stocktake_tblheader_lost', 'Verlorene Exemplare');
define('lang_mod_stocktake_tblheader_exists', 'Vorhandene Exemplare');
define('lang_mod_stocktake_tblheader_loan', 'Entliehene Exemplare');
define('lang_mod_stocktake_tblfield_classes', 'er Klassifikation');
define('lang_mod_stocktake_participants_checked', 'Exemplare bisher inventurisiert');
define('lang_mod_stocktake_field_opt_yes', 'Ja');
define('lang_mod_stocktake_tblfield_none', 'Keine');
define('lang_mod_stocktake_resync_info', 'Der Abgleich umfasst nur Exemplare der laufenden Inventur. Titelaufnahmen oder Exemplardatens�tze, die w�hrend der Inventur erstellt wurden, werden nicht aktualisiert.');
define('lang_mod_stocktake_resync_button', 'Jetzt abgleichen');
# Current
define('lang_mod_stocktake_current_welcome', 'INVENTUR - Geben oder scannen sie einen Barcode/Exemplar ein um es der Inventurliste hinzuzuf�gen');
define('lang_mod_stocktake_current_welcome_alt', 'Derzeit vermisste/verlorene Exemplare');
define('lang_mod_stocktake_current_form_list', 'Zeige Inventur durch');
define('lang_mod_stocktake_current_form_opt_user_cur', 'Aktuellen Benutzer (Sie)');
define('lang_mod_stocktake_current_form_opt_user_all', 'Alle Mitarbeiter');
define('lang_mod_stocktake_current_form_button_change', 'Status �ndern');
# Upload
define('lang_mod_stocktake_upload_welcome', 'INVENTUR DATENIMPORT - Laden Sie eine Textdatei (.txt) mit einer Auflistung von Barcode/Exemplar zum inventurisieren hoch. Ein Barcode/Exemplar pro Zeile.');
define('lang_mod_stocktake_upload_form_file', ' Datei');
define('lang_mod_stocktake_upload_form_button_upload', ' Datei hochladen');
define('lang_mod_stocktake_upload_alert_success', 'Inventurdatei erfolgreich hochgeladen ');
define('lang_mod_stocktake_upload_alert_success_info', ' Barcodes eingelesen!');
/* SERIAL CONTROL MODULE */
# subcription menu 
define('lang_mod_serial_subscription_header', 'Vorhandene Periodika');
define('lang_mod_serial_subscription_close', 'SCHLIE�EN');
define('lang_mod_serial_subscription_kardex', 'Kardex ansehen/bearbeiten');
define('lang_mod_serial_subscription_kardex_msg', 'Details zum Kardex des Abonnements');
/* OPAC */
define('lang_opac_form_opt_gmd', 'Alle Ressourcenarten');
define('lang_opac_form_opt_collection', 'Alle Sammlungen');
define('lang_opac_form_opt_location', 'Alle Standorte');
define('lang_opac_rec_detail_attachment_none', 'Kein Anhang');
define('lang_opac_rec_detail_status_onloan', 'Derzeit ausgeliehen (bis zum ');
define('lang_opac_rec_detail_status_unavailable', 'Nicht verf�gbar');
define('lang_opac_rec_detail_status_available', 'Verf�gbar');


/* 
#############################
# GENERAL TRANSLATION NOTES #
#############################
Library German<>English Dictionary: http://www.bibliotheks-glossar.de/
GMD = General Materials Designator

  //?   = Fehlende �bersetzung/Sehr unsch�ne �bersetzung 
  //-   = Not used in code
  //!   = Remark
*/

/* 
###############################
# KONVENTIONEN VERSION: ALPHA #
###############################
add                               =>  hinzuf�gen (manchmal w�re "erstellen" 
                                      sch�ner; so bleibt's einheitlich)
Are You Sure Want to              =>  Wollen Sie ... (wirklich) ...
Authority Files                   =>  Normdateien
Authority Type                    =>  Normdatentyp
bibliographic                     =>  ~Titelaufnahmen (oder doch Bibliographie;
                                      gar Katalogisierung?)
cant be empty / can not be empty  =>  muss/m�ssen angegeben sein
Call Number                       =>  Signatur
cancel                            =>  abbrechen
circulation                       =>  Entleihe (trifft's nur bedingt, aber besser
                                      als Umlauf/Verbuchung etc. ... oder?); 
                                      Abgrenzung von loan (Ausleihe)
check                             =>  w�hlen
checkout (items)                  =>  entliehen exemplare
Code                              =>  Codek�rzel
Collection                        =>  Sammlung/(Bestand)
Collection Type                   =>  Sammlungstyp
confirm                           =>  best�tigen
content                           =>  Inhaltsbereiche (eek)
copies = items                    =>  Exemplar
Credit                            =>  Guthaben
data                              =>  Daten (oder besser: Datens�tze; was ganz anderes?)
database backup                   =>  Datenbanksicherung (!= Datenbanbackup)
Debit                             =>  Geb�hrenforderung
due date                          =>  R�ckgabetermin
expired                           =>  abgelaufen (nicht "ausgelaufen")
Expiry Date                       =>  Ablaufdatum (oder doch "G�ltig bis"?)
Export XXX Data To CSV format     =>  XXX in Datei exportieren (CSV-Format)
fines                             =>  Geb�hren (!= overdue fines)
Forbidden                         =>  nicht gestattet
frequency                         =>  Erscheinungsh�ufigkeit 
gmd                               =>  Ressourcenart
group                             =>  Benutzergruppe
history                           =>  Verlauf
holiday                           =>  Ruhetag(e) (Erl�uterung: "Holiday" sind 
                                      ausschlie�lich Tage, die bei den Leih-
                                      fristen rausgerechnet werden; sie werden
                                      nirgendwo auf der Seite angezeigt; es hat
                                      nichts mit Mitarbeiterurlaub o.�. zu tun)
id                                =>  ggf. "...nummer"
image thumbnail                   =>  Vorschaubild
Import Data to XXX from CSV file  =>  XXX aus Datei importieren (CSV-Format)
initialize                        =>  starten
Inventory Code                    =>  Bestandsnummer (?)
item = copies                     =>  Exemplar
Item Code                         =>  Barcode/Exemplar
label                             =>  Kennzeichnung (NICHT Etikettenlabel, s. Labels)
Labels                            =>  Etikett (die druckbaren, nicht die Labels 
                                      � la "New Title", "Favorite"...)
library automatation (system)     =>  (im) Bibliotheksmanagementsystem
library members                   =>  Bibliotheksmitglieder (oder doch: Bibliotheksnutzer?)
list                              =>  �bersicht (manchmal Liste; manchmal weggestrichen)
loan                              =>  Ausleihe/ausgeliehen/Ausleih.../(Leihfrist)/(Entleihungen)
                                      (nicht Verleihe/verliehen; entliehen)
Loan Limit                        =>  Ausleihlimit
Location                          =>  Standort (Ort = mi�verst�ndlich; Filiale = unsch�n; 
                                      Zweigstelle = ob das allein gemeint ist? hmmm...)
login                             =>  anmelden/Anmeldung
Lookup Files                      =>  Nachschlagedateien
make sure                         =>  stellen Sie sicher
member ID                         =>  Mitgliedsnummer
Member Type                       =>  Mitgliedstyp (hmm...)
Member Type Name                  =>  Bezeichnung des Mitgliedstyps
Membership                        =>  Mitgliedschaft
module                            =>  Modul (?)
must be set = cant be empty       =>  muss/m�ssen angegeben sein
overdue                           =>  �berf�llig/Mahnung
(overdue) fines                   =>  Mahngeb�hren
Override(Overide)                 =>  ignorieren (oder au�er Kraft setzen?)
pending                           =>  ruhend
PERMITTED                         =>  zul�ssig (Forbidden = nicht gestattet)
Place                             =>  Erscheinungsort
previous                          =>  Vorherig/letztes
privileges                        =>  Rechte
promote(ed)                       =>  propagiert (igitt!)
quick return                      =>  Schnellr�cknahme
Real Name                         =>  Name (oder: Vor- und Nachname bzw. Nach- und Vorname?)
Reborrow                          =>  Ausleiherneuerung
repository                        =>  ?
Required                          =>  erforderlich (nicht ben�tigt)
reservation                       =>  Vormerkung
return                            =>  zur�ckbuchen
section                           =>  Bereich
stock take                        =>  Bestandsaufnahme (oder doch Bestandsrevision oder...?)
Subject                           =>  Schlagwort
Subject Type                      =>  Schlagwortkategorie
Subscription                      =>  Abonnement
supplier                          =>  zulieferer
System Users                      =>  Systembenutzer (oder: Systemanwender?)
template                          =>  Template (konvention)
transaction                       =>  Buchungsvorgang
uncheck                           =>  abw�hlen
update                            =>  aktualisieren
user/user name                    =>  Benutzer/Benutzername
view                              =>  einzusehen
writable                          =>  beschreibbar
you                               =>  Sie
You are going to edit xxx         =>  Sie sind im Begriff die Angaben f�r folgend.. ... zu bearbeiten
*/

/* 
#############################
# �NDERUNGEN Version: BETA  #
#############################
Neue Titelaufnahme hinzuf�gen           => Neue Titelaufnahme
Neuer Buchungsvorgang                   => Neue Buchung
Neues Mitglied hinzuf�gen               => Neues Mitglied
ENTLEIHE -                              => AUSLEIHE -
Titelaufnahmen�bersicht                 => Titelaufnahmen ansehen
L�sche ausgew�hlte Daten                => Auswahl l�schen
Exemplar�bersicht                       => Exemplare ansehen
Drucke Etiketten (Aufnahmen/Signatur)   => Etikette drucken (Aufnahmen)
Aufnahmeetikett drucken                 => Etikette mit Signatur f�r Titelaufnahmen drucken
Etikette ausgew�hlter Aufnahmen drucken => Etikettendruck starten
Drucke Barcodes (Exemplare)             => Barcodes drucken (Exemplare)
Barcodes der Exemplare ausgew�hlter Aufnahmen drucken => Barcodedruck starten
Entleihungen [_button_loans]            => Ausleihen
Barcode des Exemplars einf�gen          => Barcode des Exemplars angeben
Neue Geb�hren hinzuf�gen                => Neue Geb�hr hinzuf�gen
Geb�hrenverlauf                         => Geb�hren- und Ausleihverlauf
Geb�hren�bersicht                       => Geb�hren ansehen
Zeige beglichene Mahngeb�hren           => Beglichene Mahngeb�hren ansehen
Neue Ausleihregel hinzuf�gen            => Neue Ausleihregel
�bersicht Ausleihregeln                 => Ausleihregeln ansehen
Ausleiherneuerung Limit                 => Ausleiherneuerungen maximal
Mitgliedstyp [_membership_member_type]  => Mitgliedstypen
Mitgliedsdaten [diverse]                => Mitgliederdaten
Neuen Materialcode hinzuf�gen           => Neue Ressourcenart
Materialcode�bersicht                   => Ressourcenart ansehen
Materialcode Name                       => Name der Ressourcenart
Neuen Herausgeber hinzuf�gen            => Neuer Herausgeber
Herausgeberliste                        => Herausgeber ansehen
Herausgeber Name                        => Name des Herausgebers
Neuen Zulieferer hinzuf�gen             => Neuer Zulieferer
Zuliefererliste                         => Zulieferer ansehen
Zulieferer Name                         => Name des Zulieferers
Neuen Autor hinzuf�gen                  => Neuer Autor
Autoren�bersicht                        => Autoren ansehen
Neues Schlagwort hinzuf�gen             => Neues Schlagwort
Schlagw�rter�bersicht                   => Schlagw�rter ansehen
Neue Standortangabe hinzuf�gen          => Neuer Standort
Liste der Standortangaben               => Standorte ansehen
Standort Name                           => Name des Standorts
Neuen Erscheinungsort hinzuf�gen        => Neuer Erscheinungsort
Liste der Erscheinungsorte              => Erscheinungsorte ansehen
Angabem�glichkeiten zum Exemplarstatus  => Exemplarstatus
Neuen Exemplarstatus hinzuf�gen         => Neuer Exemplarstatus
Liste der Exemplarstatus                => Exemplarstatus ansehen
Exemplarstatus Bezeichnung              => Bezeichnung des Exemplarstatus
Neuen Sammlungstyp hinzuf�gen           => Neuer Sammlungstyp
�bersicht der Sammlungstypen            => Sammlungstypen ansehen
Neue Sprache hinzuf�gen                 => Neue Sprache
Liste der Sprachen                      => Sprachen ansehen
Neue Kennzeichnung hinzuf�gen           => Neue Kennzeichnung
Liste der Kennzeichnungen               => Kennzeichnungen ansehen
Kennzeichnung Name                      => Bezeichnung der Kennzeichnung
Kennzeichnung Beschreibung              => Beschreibung der Kennzeichnung
Neue Erscheinungsh�ufigkeit hinzuf�gen  => Neue Erscheinungsh�ufigkeit
Vorhandene Angaben zur Erscheinungsh�ufigkeit => Erscheinungsh�ufigkeiten ansehen
Fr�here Bestandsaufnahmen               => Bisherige Bestandsaufnahmen
Bestandsaufnahme Name                   => Bezeichnung der Bestandsaufnahme
Beteiligte der Bestandsaufnahme         => Bestandsaufnahmemitarbeiter
Bestandsaufnahme abschlie�en            => Bestandsaufnahme beenden
Session Login Timeout                   => Automatisch abmelden nach (Sekunden)
OPAC XML Detail                         => OPAC XML-Detail
OPAC XML Ergebnis                       => OPAC XML-Ergebnis
Anzahl der Sammlungen, die in der Ergebnisliste des OPACs angezeigt werden => Zahl anzuzeigender Sammlungen in der OPAC-Ergebnisliste
Neue Seite hinzuf�gen                   => Neue Seite
Seitenliste                             => Seiten ansehen
Neue Module hinzuf�gen                  => Neues Modul
�bersicht der Module                    => Module ansehen
Neuen Benutzer hinzuf�gen               => Neuer Benutzer
Benutzer�bersicht                       => Benutzer ansehen
Neue Benutzergruppe hinzuf�gen          => Neue Benutzergruppe
Benutzergruppen�bersicht                => Benutzergruppen ansehen
�bersicht besonderer Ruhezeitr�ume      => Ruhezeitr�ume ansehen
Besonderern Ruhezeitraum (Ferien, Feiertage) hinzuf�gen => Neuer Ruhezeitraum (Ferien, Feiertage)
System Log                              => Systemlog
Abonnement                              => Abonnements
Sortierfolge                            => Umfang
Zeitschriftenverwaltung                 => Periodikaverwaltung
Erscheinungsh�ufigkeit (Zeitschriften)  => Erscheinungsh�ufigkeit (Periodika)
Neuen Mitgliedstyp hinzuf�gen           => Neuer Mitgliedstyp
Mitgliedstypen�bersicht                 => Mitgliedstypen ansehen
Bestands... [aufnahmen]                 => Inventur...
Herausgeber [publisher]									=> Verlag
*/

/* BUGS-NOTES
Circulation > Start Transaction > Fines > Add New Fines
*/
?>
