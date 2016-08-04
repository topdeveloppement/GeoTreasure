print("\n\nSuppression du cache ...");
system("sudo rm -rf ./var/cache/* ./var/logs/* ./var/sessions/*");
system("sleep 0.1");
print("\n\nAttribution des droits ...");
system("sudo chmod 777 ./var/cache ./var/logs ./var/sessions");
print("\n\nTerminé\n\n");
