awk -f script4.awk input1 > tmpout1
diff tmpout1 output1 > result1
if [ -s result1 ]
then 
     echo "Test case failed"
else
     echo "Test case passed"
fi

rm tmpout1 result1




