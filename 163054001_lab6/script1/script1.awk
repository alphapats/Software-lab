BEGIN{RS = "!";FS= ","}
{print $1"\t"$2 }
END{} 

#Method 2
#{gsub(";","\t");printf"%s\n",$0}
