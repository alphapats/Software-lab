function processname(var)
{    
if (var == 0)
       {	for (process in pid)
		{
		if (pid[process] == var)
			{
			printf process; 
			}
		}
	}
 else
		for(process in pid)
		{
		if (pid[process] == var)
			{
			printf process "->";
			processname(ppid[process]);
			}
		}

}


{
pid[$1]=$2
ppid[$1]=$3
}

END{processname(p)
#for (process in pid)
	#printf process"\t"pid[process]"\t"ppid[process] "\n"# pid[process]
}
