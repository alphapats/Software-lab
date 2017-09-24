import sys
def make_list():
        #Code to process the input file and return a list of list L
        #return L
        pass

def det(L):
	#Code to get the determinant of the matrix
	#Print the value of the derterminant.
	#return determinant
	
	size=len(L)
	
	if(size==1): #if matrix has only one element
		return(L[0][0])
	else:
		det_total=0
		multiplier=0
		for col in range(0,size):
			multiplier=(L[0][col])*pow(-1,col+2)
			cofact=[]
			for row in range(1,size):
				r=[]
				for currentcol in range(size):
					if currentcol!=col:
						r.append(L[row][currentcol])
				cofact.append(r)
			det_total=det_total+(multiplier*(det(cofact)))	
		return (det_total)

#matrix1=[[1, 3, 6], [5, 8, 4], [3, 9, 7]]
#print(m1atrix[1][2])
#x=det(matrix1)
#print(x)
