awk -f script6.awk input1 > tmpout1
diff tmpout1 output1 > result1
if [ -s result1 ]
then 
     echo "Test case-1 failed"
else
     echo "Test case-1 passed"
fi


awk -f script6.awk input2 > tmpout2
diff tmpout2 output2 > result2

if [ -s result2 ]
then 
     echo "Test case-2 failed"
else
     echo "Test case-2 passed"
fi

rm tmpout1 tmpout2 result1 result2




