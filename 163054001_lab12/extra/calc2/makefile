

all:  calc2.l  calc2.y
	bison -d  calc2.y
	flex  calc2.l
	g++ -o  calc2  calc2.tab.c lex.yy.c -lfl
