DATABASENAME="linmas"
FILENAME=$DATABASENAME"_"$(date +"%Y%m%d")
DATABASEUSER="root"
DBPASSWORD="Hash2856"

mysqldump -u $DATABASEUSER -p$DBPASSWORD --complete-insert --no-create-db --no-create-info --skip-events --skip-routines --skip-triggers $DATABASENAME > $DATABASENAME.data.sql
mysqldump -u $DATABASEUSER -p$DBPASSWORD -f --no-data --skip-events --skip-routines --skip-triggers $DATABASENAME > $DATABASENAME.struk.sql
mysqldump -u $DATABASEUSER -p$DBPASSWORD -f --routines --triggers --no-create-info --no-data --no-create-db --skip-opt  $DATABASENAME > $DATABASENAME.func.sql
