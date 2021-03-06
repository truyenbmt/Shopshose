from typing import Any

from ..utils import keys_to_typing as keys_to_typing
from .interaction import KEY as KEY, Interaction as Interaction
from .key_input import KeyInput as KeyInput

class KeyActions(Interaction):
    source: Any
    def __init__(self, source: Any | None = ...) -> None: ...
    def key_down(self, letter): ...
    def key_up(self, letter): ...
    def pause(self, duration: int = ...): ...
    def send_keys(self, text): ...
