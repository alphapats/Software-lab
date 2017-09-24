awk -f script0.awk input1 > tmpout1
diff tmpout1 output1 > result1
if [ -s result1 ]
then 
     echo "Test case-1 failed"
else
     echo "Test case-1 passed"
fi



rm tmpout1 result1 




