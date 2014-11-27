Saurabh Garg

set ns [new Simulator]

$ns color 0 black
$ns color 1 blue
$ns color 2 red

set tracefile1 [open out.tr w]
$ns trace-all $tracefile1

#open the nam trace fileclear
set namfile [open out.nam w]
$ns namtrace-all $namfile

#define a 'finish' procedure
proc finish {} {
	global ns tracefile1 namfile fstate
	$ns flush-trace
	close $tracefile1
	close $namfile
	exec nam out.nam 