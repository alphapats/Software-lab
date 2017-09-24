all: checker.l checker.y
	bison -d checker.y
	flex checker.l
	g++ -o checker checker.tab.c lex.yy.c -lfl


