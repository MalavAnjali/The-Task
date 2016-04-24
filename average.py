import csv

total = 0.0
average =[]
maxt= 0.0


with open('sample.csv') as csvfile:
    
    reader = csv.reader(csvfile)
    for row in reader:
        average.append(row)
        total += float(row[2])
        maxt = max(maxt,row[2])
    print "The entries in the csv file are:" 
    print average
    print " the average of marks is:"
    print total/len(average)
    print "The highest value is :"
    print maxt
    
