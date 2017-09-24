.script8.sh testcase/tab1 testcase/tab2 testcase/tab3 2
diff testcase/out testcase/tab3 > result

if [[ -s result ]];
then
	echo fail
else
	echo success
fi
rm result

