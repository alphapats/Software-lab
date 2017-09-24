for name in $(cat $1)
do
  if [[ -d $name ]]; then
   echo could not create "$name" 
   else 
    mkdir $name
    echo created "$name"
  fi
done 



