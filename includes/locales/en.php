<?php
/**
 * includes/locales/en.php
 * 
 * English locale
 */

/**
 * Global
 */
$lang['exiting'] = 'Exiting...';
$lang['sendMessage']['ok'] = 'Successfully sent.';
$lang['sendMessage']['failed'] = 'Failed to send.';
$lang['sendMessage']['testMessage'] = 'Test Message!';
$lang['done'] = 'Done.';
$lang['decimalSeparator'] = '.';
$lang['thousandsSeparator'] = ',';

/**
 * includes/functions/checkVersion.php
 */
$lang['checkVersion']['skipped'] = 'Check for updates skipped. Will be checked only every 15 minutes!';
$lang['checkVersion']['error'] = 'Update check failed!';
$lang['checkVersion']['notifyAgain'] = 'Last update notification 3 days ago. Notify again.';
$lang['checkVersion']['updateAvailable'] = "An update is available!\n\nNavigate to the directory of the notifier in the terminal and execute `git pull` to perform an update.";
$lang['checkVersion']['versionOk'] = 'Version up to date.';

/**
 * notifier.php
 */
// Versioncheck
$lang['notifier']['checkConfigVersion'] = 'Check configuration version.';
$lang['notifier']['updateConfig'] = 'The configuration file needs to be updated. Use the latest configuration file from the repository as a basis.';
$lang['notifier']['checkConfigVersionDone'] = 'Configuration version OK.';
$lang['notifier']['checkUpdateAvailable'] = 'Checking for updates.';

// Send test message to telegram
$lang['notifier']['sendTestMessage'] = 'Send test message to telegram and exit.';

// previous.json file handling
$lang['notifier']['previousFile'] = 'File with previously seen aircrafts: %s';
$lang['notifier']['previousFileNotExists'] = 'Does not exist yet. Will be created later.';
$lang['notifier']['previousFileEmpty'] = 'File is empty. Will be deleted and recreated later.';
$lang['notifier']['previousFileReadFailed'] = 'File content invalid. File deleted.';
$lang['notifier']['previousFileRead'] = 'File read.';
$lang['notifier']['checkTimeout'] = 'Check if aircraft are outside the set timeout (%d seconds).';
$lang['notifier']['deleteAircraft'] = '%s removed, last seen at: %s';
$lang['notifier']['deleteAircraftCount'] = '%d aircraft removed.';
$lang['notifier']['noDeletedAircrafts'] = 'No aircrafts removed.';
$lang['notifier']['previousFileTruncate'] = 'File with seen aircraft is updated.';

// aircraft.json file handling
$lang['notifier']['aircraftJsonFile'] = 'File with current aircrafts from decoder: %s';
$lang['notifier']['aircraftJsonFileNotExists'] = 'Decoder data cannot be found. Check path and operation state of the decoder!';
$lang['notifier']['aircraftJsonDataFailed'] = 'Decoder data corrupted!';
$lang['notifier']['aircraftWrongDataSource'] = '%s comes from an unwanted data source.';
$lang['notifier']['aircraftOutOfRange'] = '%s outside the monitoring radius.';
$lang['notifier']['aircraftBelowMinAlt'] = '%s below the minimum altitude.';
$lang['notifier']['aircraftAboveMaxAlt'] = '%s above the maximum altitude.';
$lang['notifier']['aircraftUpdated'] = '%s already seen, time of last sighting updated.';
$lang['notifier']['aircraftWrongDbFlag'] = '%s has an unwanted dbFlag.';
$lang['notifier']['aircraftSkipWithoutReg'] = '%s was skipped because no registration could be determined.';
$lang['notifier']['newAircraft'] = '%s new in the monitoring radius, will be notified.';
$lang['notifier']['aircraftCalcDistance'] = 'Calculated distance %s.';

// Planespotters API
$lang['notifier']['planespottersApiCall'] = 'Request photo at planespotters.net.';
$lang['notifier']['planespottersApiCallSuccessful'] = 'Photo request successful.';
$lang['notifier']['planespottersApiCallFailed'] = 'Photo request failed.';
$lang['notifier']['planespottersSkipNoPhoto'] = 'Skip plane as no photo is available.';

// Telegram message templates
$lang['notifier']['newAircraftTelegram'] = "*New aircraft spotted!*\n\n";
$lang['notifier']['aircraftHexLink'] = 'Hex: [%s]('.$linkToTar1090.")\n";
$lang['notifier']['aircraftFlightLink'] = 'Flight: [%s]('.$linkToFlightStats.")\n";
$lang['notifier']['aircraftRegistration'] = "Registration: `%s`\n";
$lang['notifier']['aircraftDesc'] = "\nAircraft:\n`%s`\n";
$lang['notifier']['aircraftDbFlag'] = "\ndbFlag: `%s`\n";
$lang['notifier']['aircraftCoordinates'] = "Coordinates: %s, %s\n";
$lang['notifier']['aircraftCoordinatesLinked'] = "Coordinates: [%s, %s](%s)\n";
$lang['notifier']['aircraftAlt'] = "Altitude: %s%s\n";
$lang['notifier']['planespottersNote'] = "\n[Photo](%s) by %s";

/**
 * Execution time
 */
$lang['notifier']['executionTime'] = 'Execution time: ';
?>
