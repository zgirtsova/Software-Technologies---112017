package com.company;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.HashMap;
import java.util.Scanner;

public class Main {

    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);

        HashMap<String, ArrayList<Double>> grades = new HashMap<>();

        grades.put("Pesho", new ArrayList<Double>(Arrays.asList(5.20, 6.45)));
        grades.put("Gosho", new ArrayList<Double>(Arrays.asList(5.20, 6.45)));
        grades.put("Kiro", new ArrayList<Double>(Arrays.asList(4.40, 3.25, 5.20, 6.45)));

        for (String name: grades.keySet()) {
            ArrayList<Double> personGrades = grades.get(name);
            double avgGrade = personGrades.stream()
                    .mapToDouble(x -> x)
                    .average()
                    .getAsDouble();
            System.out.printf("%s -> среден успех = %f%n", name, avgGrade);
        }



    }
}
