package com.company;

import java.util.Arrays;
import java.util.Comparator;
import java.util.Scanner;

public class Largest_3_Numbers_06 {

    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);

        int[] arr = Arrays
              .stream(scan.nextLine().split(" "))
              .mapToInt(Integer::parseInt)
              .sorted()
              .limit(3)
              .toArray();

        String[] sarr = Arrays
              .stream(arr)
              .mapToObj(String::valueOf)
              .toArray(String[]::new);

        System.out.println(String.join(" ", sarr));
    }
}
