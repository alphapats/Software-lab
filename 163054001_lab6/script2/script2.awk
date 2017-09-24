BEGIN{RS = "!";FS= ",";printf "ID\tName\n"}
{print NR"\t"$2 ;}
END{print NR,"records merged";} 

