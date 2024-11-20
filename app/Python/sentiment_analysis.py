from textblob import TextBlob
import sys

text = sys.argv[1]

blob = TextBlob(text)
sentiment = blob.sentiment.polarity

if sentiment > 0:
    print('Positive')
elif sentiment < 0:
    print('Negative')
else:
    print('Neutral')
