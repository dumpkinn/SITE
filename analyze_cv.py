import sys
import random
import language_tool_python

# Initialize LanguageTool with Portuguese from Portugal settings
tool = language_tool_python.LanguageTool('pt-PT')

def calculate_size_score(cv_text):
    word_count = len(cv_text.split())
    return min(word_count / 60, 5)  # Adjusted threshold from 200 to 60

def calculate_grammar_score(cv_text):
    # Check grammar and style using LanguageTool
    matches = tool.check(cv_text)
    # Return score based on number of grammar/style errors found
    return max(5 - len(matches), 0)

def calculate_keyword_score(cv_text):
    # Define keywords to search for
    keywords = ['experiência', 'competências', 'formação', 'trabalho', 'educação']

    # Count occurrences of keywords in CV text
    keyword_count = sum(cv_text.lower().count(keyword) for keyword in keywords)

    # Calculate score based on keyword count
    # For simplicity, let's assume 1 keyword occurrence adds 1 point to the score
    return min(keyword_count, 5)  # Cap score at 5

def main(cv_text):
    size_score = calculate_size_score(cv_text)
    grammar_score = calculate_grammar_score(cv_text)
    keyword_score = calculate_keyword_score(cv_text)
    print(size_score, grammar_score, keyword_score)

if __name__ == "__main__":
    cv_text = sys.argv[1]
    main(cv_text)