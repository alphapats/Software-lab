BEGIN{FS="";RS="|";i=0;printf "digraph H{\ninvis1[style=\"invis\"]; \nstart[label=\"S\"]; \nEnd[label=\"End\",shape=circle,peripheries=2];\ninvis1->start;\n"}
{

{
printf "start->P"i"[label=\""$1"\"];\n";
for(x=2;x<NF+1;x++)
{	
	if( ($(x) != "*"))
	{
	if( ($(x+1) != "*") )
	{
	if(($(x) != "+"))
	{
	if(($(x) != "\n"))
	{
		printf "P"i"->P"(i+1)"[label=\""$x"\"];\n";
		i++;
	}
	}
	}
	}

	if($(x+1) == "*")
	{
	printf "P"(i)"->P"(i)"[label=\""$x"\"];\n"
	}

	if($(x) == "+")
	{
	printf "P"(i)"->P"(i)"[label=\""$(x-1)"\"];\n"
	}
}
i++;
printf "P"(i-1)"->End;\n";
}
}

END{printf "\n}"}

