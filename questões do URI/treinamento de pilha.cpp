#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#define MAXTAM 300

typedef struct{
	char main[MAXTAM];
	char auxL[MAXTAM];
	char auxC[MAXTAM];
	
	int topo;
}Access;

void vetor_inicia(Access *p){
	p->topo = -1;
}

bool vetor_vazio(Access *p){
	if(p->topo == -1){
		return true;
	}else{
		return false;
	}
}

bool vetor_cheio(Access *p){
	if(p->topo == MAXTAM - 1){
		return true;
	}else{
		return false;
	}
}

void vetor_insere(Access *p, char indc[MAXTAM]){
	if(vetor_cheio(p)){
		printf("vetor cheio\n");
	}else{
		p->topo++;
		p->main[p->topo] = indc[p->topo]; 
	}
}

char vetor_remove(Access *p){
	char aux[MAXTAM];
	int oldtop;
	if(vetor_vazio(p)){
		printf("vetor vazio\n");
	}else{
		aux[p->topo] = p->main[p->topo];
		oldtop = p->topo;
		p->topo--;
		return aux[oldtop];
	}
}


int main() {
	Access *p = (Access*)malloc(sizeof(Access));
	char aux[MAXTAM];
	vetor_inicia(p);
	
	vetor_insere(p, "A");
	vetor_insere(p, "B");
	vetor_insere(p, "2");
	
	vetor_remove(p);
	vetor_remove(p);
	vetor_remove(p);
	
	for(int count = 0; count <= strlen(p->main); count++){
		printf("%c", p->main);
	}
	printf("\n");
	return 0;
}
