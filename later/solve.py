#!/usr/bin/env python3


#d = {i: 0 for i in range(m)}
#n = int(input())
#d, x = map(int, input().split())
#a = [[*map(int, input().split())] for i in range(n)]
#a = [*map(int, input().split())]
from sys import exit
from collections import Counter
from math import *
from itertools import accumulate, combinations, permutations
from pprint import pprint


#sys.setrecursionlimit(20000)

def is_cube(cakes):
    # cake has all is_cube elements
    return len(set(cakes)) == 1


def split_cake(cakes, depth):
    if depth > 10:
        return

    if is_cube(cakes):
        print(depth)
        return
    
    # select longest surface
    longest_v = max(cakes)
    longest_idx = cakes.index(longest_v)
    if min(cakes) == 1:
        piece = 1
    else:
        piece = longest_v // min(cakes) 
    cakes[longest_idx] =  piece

    #print(f"longest={longest_idx}", f"piece={piece}")
    #print(f"cubes_pattern={cakes}", f"depth={depth}")

    # for i in range(cakes[longest_idx]):
    #     split_cake(cakes, depth + 1)
    return split_cake(cakes, depth + 1)

def main():
    cakes = list(map(int, input().split()))
    split_cake(cakes, 0)
   

main()
