

all: calc1.l calc1.y
	bison -d calc1.y
	flex calc1.l
	g++ -o calc1 calc1.tab.c lex.yy.c -lfl
