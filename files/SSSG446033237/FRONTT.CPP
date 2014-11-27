#include<iostream.h>
#include<graphics.h>
#include<dos.h>
#include<conio.h>
#include<stdlib.h>
#include<string.h>


int mx,my,button;

class card
{
protected:
int a1,a2,b1,b2,c1,c2;
int x1,x2,y1,y2,z1,z2;
int sc;
int sp;
public:
card()
{
sc=sp=0;
}
void draw();
int calc(int ty);
void number(int xco,int yco,int n);
void compcal2(int);
void compcal1(int ,int);
};

int card::calc(int ty)
{
switch(ty)
{
case 1:
return(20);
case 2:
return(15);
case 3:
return(10);
default:
return(5);
}}

void card::number(int xco,int yco,int n)
{
switch(n)
{
case 1:
outtextxy(xco,yco,"A");
sp=sp 1;
break;

case 2:
outtextxy(xco,yco,"2");
sp=sp 2;
break;

case 3:
outtextxy(xco,yco,"3");
sp=sp 3;
break;

case 4:
outtextxy(xco,yco,"4");
sp=sp 4;
break;

case 5:
sp=sp 5;
outtextxy(xco,yco,"5");
break;

case 6:
sp=sp 6;
outtextxy(xco,yco,"6");
break;

case 7:
sp=sp 7;
outtextxy(xco,yco,"7");
break;

case 8:
sp=sp 8;
outtextxy(xco,yco,"8");
break;

case 9:
sp=sp 9;
outtextxy(xco,yco,"9");
break;

case 10:
sp=sp 10;
outtextxy(xco,yco,"10");
break;

case 11:
sp=sp 11;
outtextxy(xco,yco,"J");
break;

case 12:
sp=sp 12;
outtextxy(xco,yco,"Q");
break;

case 13:
sp=sp 13;
outtextxy(xco,yco,"K");
break;

default:
sp=sp 10;
outtextxy(xco,yco,"K");
}}

void card::compcal2(int n2)

{
switch(n2)
{
case 1:
sc=sc 1;
break;
case 2:
sc=sc 2;
break;
case 3:
sc=sc 3;
break;
case 4:
sc=sc 4;
break;
case 5:
sc=sc 5;
break;
case 6:
sc=sc 6;
break;
case 7:
sc=sc 7;
break;
case 8:
sc=sc 8;
break;
case 9:
sc=sc 9;
break;
case 10:
sc=sc 10;
break;
case 11:
sc=sc 11;
break;
case 12:
sc=sc 12;
break;
default:
sc=sc 13;
}}



void card::compcal1(int n1,int n2)
{
switch(n1)
{
case 1:
sc=sc 20;
compcal2(n2);
break;
case 2:
sc=sc 15;
compcal2(n2);
break;
case 3:
sc=sc 10;
compcal2(n2);
break;
default:
sc=sc 5;
compcal2(n2);
}
}

void card::draw()
{
randomize();
setbkcolor(MAGENTA);
outtextxy(60,20,"Computer cards :");

delay(700);
setcolor(LIGHTRED);
rectangle(110,50,230,170);
setfillstyle(WIDE_DOT_FILL,LIGHTRED);
floodfill(120,70,LIGHTRED);
a1=random(5);
a2=random(14);
compcal1(a1,a2);

delay(450);
setcolor(BLUE);
rectangle(250,50,370,170);
setfillstyle(WIDE_DOT_FILL,BLUE);
floodfill(260,70,BLUE);
b1=random(999)%5;
b2=random(3321);
compcal1(b1,b2);
delay(450);
setcolor(GREEN);
rectangle(390,50,510,170);
setfillstyle(WIDE_DOT_FILL,GREEN);
floodfill(400,70,GREEN);
c1=random(5);
c2=random(13);
compcal1(c1,c2);

setcolor(WHITE);
delay(700);
outtextxy(70,250,"Player Cards :");
setcolor(RED);
x1=rand()%5;
x2=rand();
y1=random(5);
y2=random(14);
z1=random(3124)%5;
z2=random(234234);

delay(400);
rectangle(110,280,230,400);
if(x1==1)
{sp=sp 20;
outtextxy(145,300,"HEARTS");
}
else if(x1==2)
{sp=sp 15;
outtextxy(140,300,"DIAMOND");
}
else if(x1==3)
{sp=sp 10;
outtextxy(150,300,"CLUB");
}
else
{sp=sp 5;
outtextxy(150,300,"SPADE");
}
number(160,350,x2);


delay(450);
rectangle(250,280,370,400);
if(y1==1)
{sp=sp 20;
outtextxy(285,300,"HEARTS");
}else if(y1==2)
{sp=sp 15;
outtextxy(280,300,"DIAMOND");
}else if(y1==3)
{sp=sp 10;
outtextxy(290,300,"CLUB");
}else
{sp=sp 5;
outtextxy(290,300,"SPADE");
}number(300,350,y2);

delay(450);
rectangle(390,280,510,400);
if(z1==1)
{sp=sp 20;
outtextxy(425,300,"HEARTS");
}else if(z1==2)
{sp=sp 15;
outtextxy(420,300,"DIAMOND");
}else if(z1==3)
{sp=sp 10;
outtextxy(430,300,"CLUB");
}else
{sp=sp 5;
outtextxy(430,300,"SPADE");
}number(440,350,z2);
cout<<sc<<endl<<sp;
if(sc>sp)
outtextxy(280,450,"YOU LOST");
else
outtextxy(280,450,"YOU WON");

}


class shape
{
protected:
int x;
int y;

public:
shape(){
x=y=0;
}

void set(int x1,int y1)
{
x=x1;
y=y1;
}
};


class noshape
{
protected:
int x1,y1;
public:
noshape(){}
noshape(int x2,int y2)
{
x1=x2;
y1=y2;
}
void erase();
};

void noshape::erase()
{
setcolor(MAGENTA);
int border[]={x1-20,y1 90,x1 90,y1 90,x1 90,y1-20,x1-20,y1-20};
setfillstyle(SOLID_FILL,MAGENTA);
fillpoly(4,border);
delay(20);
}


class ball:public shape
{
public:
ball(){}
ball(int x1,int y1)
{
x=x1;
y=y1;
}

void draw1()
{
setcolor(RED);
circle(x,y,40);
setfillstyle(SOLID_FILL,RED);
floodfill(x,y,RED);
}
};


class rect:public shape
{
public:
rect(){}
rect(int x1,int y1)
{
x=x1;
y=y1;
}

void draw1()
{
setcolor(YELLOW);
rectangle(x-40,y-30,x 40,y 30);
setfillstyle(SOLID_FILL,YELLOW);
floodfill(x,y,YELLOW);
}
};


class triangle:public shape
{
public:
triangle(){}
triangle(int x1,int y1)
{
x=x1;
y=y1;
}
void draw1();

};

void triangle::draw1()
{
int triarray[]={x 10,y-30,x 60,y 60,x-30,y 60};
setcolor(CYAN);
fillpoly(3,triarray);
setfillstyle(SOLID_FILL,CYAN);
floodfill(x,y,CYAN);
}



class wheel:public shape,public noshape
{
int h;
int xco,yco;
ball b;
rect r;
triangle t;
noshape *n;

public:
wheel(int x1,int y1)
{
xco=x1;
yco=y1;
n=new noshape(xco,yco);
}

void erase1()
{
n->erase();
}

void draw()
{
rectangle(xco-30,yco-30,xco 100,yco 100);
}
void draw1();

int returnh()
{
return(h);
}

};


void wheel::draw1()
{
h=random(100);
switch(h)
{

case 1:
erase1();
b.set(xco 35,yco 35);
b.draw1();
break;
case 2:
erase1();
r.set(xco 35,yco 35);
r.draw1();
break;
case 3:
erase1();
t.set(xco 20,yco 20);
t.draw1();
break;
default:
erase1();
b.set(xco 35,yco 35);
r.set(xco 35,yco 35);
t.set(xco 20,yco 20);
h=h%3;
if(h==1)
t.draw1();
else if(h==2)
r.draw1();
else
b.draw1();
break;


} }










union REGS i,o;

int initmouse()
{
i.x.ax=0;
int86(0X33,