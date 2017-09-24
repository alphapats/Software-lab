BEGIN{RS="[()]" ;FS=",";/[0-9]/;printf " digraph H{\n"}
{
gsub(/[a-zA-Z]/,"");
gsub(/[{}]/,"");
gsub(/[=]/,"");
gsub(/[\n]/,"");
if($1~ /[0-9]/)
{
if(NR == 1)
{	for(i=1;i<=NF;i++)
	printf $i"[shape=circle];\n";

}

if(NR>1)
{	#printf "edge[label="$3"];";
	printf $1"->"$2"[label="$3"];\n"
}
}
}
END{printf"\n}\n"}
