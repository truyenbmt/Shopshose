from typing import Any

class MultipartDataGenerator:
    data: Any
    line_break: str
    boundary: Any
    chunk_size: Any
    def __init__(self, chunk_size: int = ...) -> None: ...
    def add_params(self, params) -> None: ...
    def param_header(self): ...
    def get_post_data(self): ...
