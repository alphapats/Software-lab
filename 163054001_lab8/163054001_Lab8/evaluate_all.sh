for i in $(seq 5)
do
	echo "Evaluating problem$i:"
	python3.5 -B problem$i/evaluate.py
done
