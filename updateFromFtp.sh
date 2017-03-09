#Update from the server the data to the git brach



rm *
wget -r ftp://weierand@ftp.espagne-vacances.ch/httpdocs/ 

mv ftp.espagne-vacances.ch/httpdocs/* .
rm -r ftp.espagne-vacances.ch/httpdocs
git add *
git commit -m"Update from the ftp server"
git push origin

