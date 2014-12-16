#include<graphics.h>
#include<stdlib.h>
#include<conio.h>


union REGS i,o;

int initmouse()
{
i.x.ax=0;
int86(0X33,